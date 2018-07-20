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
                                    <label for="ruc">Nombre</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Daniel" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="razon">Apellidos</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Sanchez Méndez" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="direccion">Dirección</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Av. Bolognesi 1129" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="ciudad">Ciudad</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Chiclayo" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Celular</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="990344872" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Teléfono</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="74 238035" disabled>
                                </div>

                                <div class="col-sm-12 col-md-6 py-3">
                                    <label for="persona">Correo</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="danielunprg@gmail.com" disabled>
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
  components:{Header,Footer,SubHeader,ParallaxPortada1}
}
</script>

<style>

</style>