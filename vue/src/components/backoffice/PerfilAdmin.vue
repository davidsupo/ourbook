<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Perfil</a>
                </li>
                <li class="breadcrumb-item active">Mi Perfil</li>
            </ol>

            <div class="row">
                <div class="col-sm-12 col-md-2">
                    <img src="img/usuario.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-12 col-md-10">
                    <form class="row">
                        <div class="col-sm-12 col-md-6 py-3">
                            <label >Nombre</label>
                            <input class="form-control"  disabled>
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="razon">Apellidos</label>
                            <input class="form-control" disabled>
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="direccion">Dirección</label>
                            <input class="form-control"  disabled>
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="ciudad">Ciudad</label>
                            <input class="form-control"  disabled>
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="persona">Celular</label>
                            <input class="form-control"  disabled>
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="persona">Teléfono</label>
                            <input class="form-control" disabled>
                        </div>

                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="persona">Correo</label>
                            <input class="form-control"  disabled>
                        </div>
                    </form>
                </div>
            </div>
            <Footer></Footer>
        </div>
    </div>
</template>

<script>
import Footer from './Footer'
export default {
  components:{Footer},
 
}
</script>

<style>

</style>
