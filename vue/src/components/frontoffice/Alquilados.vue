<template>
  <div>
    <Header></Header>
    <ParallaxPortada1></ParallaxPortada1>
    <SubHeader></SubHeader>
    <section class="bg-blanco py-1">
        <div class="container">
            <div class=" row  py-5">
                <h3 class="col-sm-12 color-primario negrita">Libros Alquilados</h3>
                <p class="col-sm-12">Esta es una lista de los libros que has adquirido.</p>
                <h5 class="col-sm-12 color-terciario">No olvides devolverlos en un buen estado.</h5>
                <table class="table col-sm-12 my-3">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Autor</th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Estado del libro alquilado">Estado</span></th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Fecha que empieza el alquiler">Inicio</span></th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Fecha que iremos a recoger el libro alquilado">Vencimiento</span></th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Estado del proceso de alquiler">Proceso</span></th>
                        <th scope="col"><span class="color-secundario" data-toggle="tooltip" data-placement="top" title="Precio por las semanas alquiladas">Precio</span> </th>
                        <th scope="col"><span class="color-terciario" data-toggle="tooltip" data-placement="top" title="Penalización por infringir las reglas de alquiler">Penalización</span></th>
                        <th scope="col"><span class="color-primario" data-toggle="tooltip" data-placement="top" title="Monto Final">Total</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <template v-for="libro in libros">

                       
                        <tr :key="libro.autor">
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
                        
                        <td>{{libro.fecha_alquiler.substr(0,10)}}</td>
                        <td>{{libro.fecha_fin.substr(0,10)}}</td>
                        <td><span class="badge badge-pill badge-primary">{{libro.proceso}}</span></td>
                        <td>S/ {{libro.precio}}</td>
                        <td>S/ {{libro.penalidad}}</td>
                        <td>S/ {{libro.precio + libro.penalidad}}</td>
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
      libros: null,
      user: null
    };
  },
  mounted() {
    this.user = JSON.parse(localStorage.getItem("user-ourbook"));
    this.listarLibros();
  },
  methods: {
    listarLibros() {
      fetch("http://localhost:3000/api/usuario/alquilados/" + this.user.id)
        .then(res => res.json())
        .then(res => {
          if (res.success && res.data!=null) {
            this.libros = res.data;
            let count = 0;
            this.libros.map(el => {
              count++;
              el.numero = count;
              var date1 = new Date(el.fecha_fin);
              var date2 = new Date();
              var timeDiff = date2.getTime() - date1.getTime();
              var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
              console.log(diffDays);
              if (diffDays > 0) {
                el.penalidad = 2 * diffDays;
              } else {
                el.penalidad = 0.00;
              }
              if (el.uso == 1) {
                el.estado = "Muy Bueno";
              } else if (el.uso == 2) {
                el.estado = "Bueno";
              } else {
                el.estado = "Regular";
              }
            });
          }
        });
    }
  }
};
</script>

<style>
</style>