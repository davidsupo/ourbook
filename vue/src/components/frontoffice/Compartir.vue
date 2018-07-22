<template>
  <div>
    <Header></Header>
    <ParallaxPortada1></ParallaxPortada1>
    <SubHeader></SubHeader>
    <section class="bg-blanco py-2">
        <div class="container bg-oscuro">
            <div class=" row  py-5">
                <div class="col-sm-12 col-md-3">
                    <img src="https://goo.gl/cYvfw8" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-12 col-md-9">
                    <div class="row">
                        <div class="col-sm-12 border-bottom">
                            <h2>Compatir tus libros es muy Sencillo</h2>
                            <h4>Obtendras ganancias por compartir con los demas</h4>
                        </div>
                        <div class="col-sm-12 py-3">
                            <h4>Verifica tus Datos</h4>
                            <form class="row" @submit.prevent="Compartir()">
                                <template v-if="user">
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="ruc">Nombre</label>
                                        <input class="form-control" v-model="user.nombres" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="razon">Apellidos</label>
                                        <input class="form-control" v-model="user.apellidos" disabled>
                                    </div>
                                </template>
                                   
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" v-model="direccion" required>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control" v-model="ciudad" required>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Celular para contactarte</label>
                                    <input type="text" class="form-control" v-model="celular" required>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Teléfono para contactarte</label>
                                    <input type="text" class="form-control" v-model="telefono" required>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Nombre del Libro</label>
                                    <input type="text" class="form-control" v-model="titulo" required>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Autor</label>
                                    <input type="text" class="form-control" v-model="autor" required>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Editorial</label>
                                    <input type="text" class="form-control" v-model="editorial" required>
                                </div>                               
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Tiempo de uso</label>
                                    <select class="form-control" v-model="porcentaje">
                                        <option value="4%">0 - 6 meses</option>
                                        <option value="3%">6 - 12 meses</option>
                                        <option value="2.5%">12 meses a más</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="ruc">Porcentaje de Ganancia</label>
                                    <input class="form-control" v-model="porcentaje" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Fecha que recogeremos el libro</label>
                                    <input type="date" v-model="inicio" @change="Fechas()" class="form-control">
                                </div>

                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="correo">Número de meses a compartir</label>
                                    <select class="form-control" v-model="meses" @change="Fechas()">
                                        <option value="1">1 mes</option>
                                        <option value="2">2 meses</option>
                                        <option value="3">3 meses</option>
                                        <option value="4">4 meses</option>
                                        <option value="5">5 meses</option>
                                        <option value="6">6 meses</option>
                                        <option value="7">7 meses</option>
                                        <option value="8">8 meses</option>
                                        <option value="9">9 meses</option>
                                        <option value="10">10 meses</option>
                                        <option value="11">11 meses</option>
                                        <option value="12">12 meses</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Fecha que te devolveremos el libro</label>
                                    <input class="form-control" id="date3" type="date" disabled>
                                </div>          
                                <div class="col-sm-12 col-md-12 py-3">
                                    <button type="submit" class="btn btn-success">Compatir Libro</button>
                                </div>
                            </form>
                            
                        </div>

                    </div>
                </div>
                
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
      meses: 1,
      porcentaje: "4%",
      direccion:'',
      ciudad:'',
      celular:'',
      telefono:'',
      titulo:'',
      autor:'',
      editorial:'',
      inicio:'',
    };
  },
  mounted() {
    this.user = JSON.parse(localStorage.getItem("user-ourbook"));
  },
  methods: {
    Fechas() {
      var days = this.meses;
      var date = new Date(this.inicio);
      date.setDate(date.getDate() + parseInt(days)*30);
      document.getElementById("date3").valueAsDate = date;
    },
    Compartir(){
        let data = {
            titulo:this.titulo,
            autor:this.autor,
            editorial:this.editorial,
            uso:this.porcentaje=='4%'? '1': this.porcentaje=='3%'? '2' : '3',
            fecha_inicio:this.inicio,
            fecha_fin:document.getElementById("date3").value,
            usuario:`${this.user.id}`,
            direccion:this.direccion,
            ciudad:this.ciudad,
            celular:this.celular,
            telefono:this.telefono
        }
        fetch('http://localhost:3000/api/libro/compartir',{
            method:'post',
            headers:{'Content-Type':'application/json'},
            body:JSON.stringify(data)
        })
        .then(res=>res.json())
        .then(res=>{
            if(res.success){
                this.$router.replace('/compartidos');
            }
        })
    }
  }
};
</script>

<style>
</style>