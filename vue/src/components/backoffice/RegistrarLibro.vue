<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Libros de Stock</a>
                </li>
                <li class="breadcrumb-item active">Registrar Nuevo Libro</li>
            </ol>
            <div class="row pb-3">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Datos del Libro
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <img src="https://goo.gl/cYvfw8" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-sm-12 col-md-10">
                                    <form class="row">
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label >Título</label>
                                            <input class="form-control"  >
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="razon">Autor</label>
                                            <input class="form-control" >
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="direccion">Editorial</label>
                                            <input class="form-control"  >
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="ciudad">Precio de compra</label>
                                            <input class="form-control"  >
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Publicación</label>
                                            <input class="form-control"  >
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Número de Ejemplares</label>
                                            <input class="form-control"  >
                                        </div>

                                        <div class="col-sm-12 col-md-12 py-3">
                                            <label for="persona">Sipnopsis</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                                        </div>

                                        <div class="col-sm-12 col-md-12 py-2">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Subir Portada</label>
                                        </div>

                                        <div class="col-sm-12 col-md-12 py-3">
                                            <button type="submit" class="btn btn-success">Crear nuevo</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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