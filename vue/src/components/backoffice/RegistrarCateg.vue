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
                            <label for="ruc">Categoría</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        
                        <div class="col-sm-12 col-md-12 py-3">
                            <button type="submit" class="btn btn-success">Crear Nuevo</button>
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