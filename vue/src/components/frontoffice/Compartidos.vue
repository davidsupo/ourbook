<template>
  <div>
    <Header></Header>
    <ParallaxPortada1></ParallaxPortada1>
    <SubHeader></SubHeader>
    <section class="bg-blanco py-1">
        <div class="container">
            <div class=" row  py-5">
                <h3 class="col-sm-12 color-primario negrita">Libros Compartidos</h3>
                <p class="col-sm-12">Esta es una lista de los libros que has compartido con nosotros para que más usuarios disfruten.</p>
                <h5 class="col-sm-12 color-terciario">Descuida te lo devolveremos en un buen estado.</h5>
                <table class="table col-sm-12 my-3">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Autor</th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Estado del libro que nos compartiste">Estado</span></th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Fecha que nos compartiste el libro">Inicio</span></th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Fecha que te devolveremos el libro">Vencimiento</span></th>
                        <th scope="col"><span class="color-secundario">Ingresos</span> </th>
                        <th scope="col"><span class="color-secundario" data-toggle="tooltip" data-placement="top" title="Porcentaje del libro según su estado y precio">Porcentaje de ingreso</span> </th>
                        <th scope="col"><span class="color-primario" data-toggle="tooltip" data-placement="top" title="Monto Ganado por compartir el libro">Total</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <template v-for="libro in libros">
                            <tr :key="libro.titulo">
                            <th scope="row">{{libro.numero}}</th>
                            <td>{{libro.titulo}}</td>
                            <td>{{libro.autor}}</td>
                             <template v-if="libro.uso==1">
                            <td><i class="fas fa-star" data-toggle="tooltip" data-placement="top" :title="libro.estado"></i></td>
                        </template>
                        <template v-if="libro.uso==2">
                            <td><i class="fas fa-star-half-alt" data-toggle="tooltip" data-placement="top" :title="libro.estado"></i></td>
                        </template>
                        <template v-if="libro.uso==3">
                            <td><i class="fas fa-star-half" data-toggle="tooltip" data-placement="top" :title="libro.estado"></i></td>
                        </template>
                            <td>{{libro.fecha_compartido.substr(0,10)}}</td>
                            <td>{{libro.fecha_fin.substr(0,10)}}</td>
                            
                            <td>S/ {{libro.total}}</td>
                            <td>{{libro.porcentaje}}</td>
                            <td>S/ {{Math.round((libro.total/2)*100)/100}}</td>
                            </tr>
                        </template>
                        
                    </tbody>
                    </table>
                
            </div>
        </div>
    </section>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "./Header";
import Footer from "./Footer";
import SubHeader from "./SubHeader";
import ParallaxPortada1 from "./ParallaxPortada1";
export default {
  components: { Header, Footer, SubHeader, ParallaxPortada1 },
  data() {
    return {
      user: null,
      libros: null
    };
  },
  mounted() {
    this.user = JSON.parse(localStorage.getItem("user-ourbook"));
    this.listarLibros();
  },
  methods: {
    listarLibros() {
      fetch("http://localhost:3000/api/usuario/compartidos/" + this.user.id)
        .then(res => res.json())
        .then(res => {
          this.libros = res.data;
          let count = 0;
          this.libros.map(el => {
            count++;
            el.numero = count;
            if (el.uso == 1) {
              el.estado = "Muy Bueno";
              el.porcentaje = "50%";
            } else if (el.uso == 2) {
              el.estado = "Bueno";
              el.porcentaje = "50%";
            } else {
              el.estado = "Regular";
              el.porcentaje = "50%";
            }
            let total = 0;
            el.alquileres.map(al=>{
                if(al.precio!=null){
                    total+=al.precio;
                }
                if(al.penalidad!=null){
                    total+=al.penalidad;
                }
            })
            el.total = total;
          });
        });
    }
  }
};
</script>

<style>
</style>