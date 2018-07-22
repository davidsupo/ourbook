<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Registrar</a>
                </li>
                <li class="breadcrumb-item active">Nuevo Administrador</li>
            </ol>

            <div class="row">
                <div class="col-sm-12 col-md-2">
                    <img src="img/usuario.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-12 col-md-10">
                    <form class="row">
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="ruc">Nombre</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="razon">Apellidos</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="persona">Celular</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="correo">Contraseña</label>
                            <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="col-sm-12 col-md-6 py-3">
                            <label for="correo">Confirmar Contraseña</label>
                            <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="col-sm-12 col-md-12 py-3">
                            <button type="submit" class="btn btn-success">Registrar</button>
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