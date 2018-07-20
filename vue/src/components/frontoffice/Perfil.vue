<template>
  <div>
    <Header></Header>
    <ParallaxPortada1></ParallaxPortada1>
    <SubHeader></SubHeader>
    <section class="bg-blanco py-2">
        <div class="container bg-oscuro">
            <div class=" row  py-5">
                <div class="col-sm-12 col-md-3">
                    <img src="img/usuario.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-12 col-md-9">
                    <div class="row">
                        <div class="col-sm-12 border-bottom">
                            <h2>Mi cuenta</h2>
                            
                        </div>
                        <div class="col-sm-12 py-3">
                            <h4>Verifica tus Datos</h4>
                            <form class="row">
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label >Nombre</label>
                                    <input class="form-control" v-model="user.nombres" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="razon">Apellidos</label>
                                    <input class="form-control" v-model="user.apellidos" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="direccion">Dirección</label>
                                    <input class="form-control"  v-model="user.direccion" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="ciudad">Ciudad</label>
                                    <input class="form-control" v-model="user.ciudad" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Celular</label>
                                    <input class="form-control" v-model="user.celular" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Teléfono</label>
                                    <input class="form-control" v-model="user.telefono" disabled>
                                </div>

                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Correo</label>
                                    <input class="form-control" v-model="user.correo" disabled>
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
import Header from './Header'
import Footer from './Footer'
import SubHeader from './SubHeader'
import ParallaxPortada1 from './ParallaxPortada1'
export default {
  components:{Header,Footer,SubHeader,ParallaxPortada1},
  data(){
      return{
          user:null,
      }
  },
  created(){
      let id = JSON.parse(localStorage.getItem('user-ourbook')).id;
      fetch('http://localhost:3000/api/usuario/profile/'+id)
      .then(res=>res.json())
      .then(res=>this.user = res.data)
  },
  methods:{

  }
}
</script>

<style>

</style>