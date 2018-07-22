<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Libros Alquilados</a>
                </li>
                <li class="breadcrumb-item active">Lista de Libros Alquilados</li>
                <li class="breadcrumb-item active">Detalle de Libro Alquilado</li>
            </ol>
            <div class="row pb-4">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Datos del Libro Alquilado
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <img src="https://goo.gl/cYvfw8" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-sm-12 col-md-10">
                                    <form class="row">
                                        <div class="col-sm-12 col-md-12 py-3">
                                            <h4>Datos del Alquiler</h4>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label >Id Alquiler</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label >Id Ejemplar</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label >Título</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="razon">Autor</label>
                                            <input class="form-control" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="direccion">Editorial</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="direccion">Propietario</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Alquiler</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Inicio de Alquiler</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Fin de Alquiler</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Devolución</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-4 py-3">
                                            <label for="ciudad">Precio de Alquiler</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-4 py-3">
                                            <label for="ciudad">Penalidad</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-4 py-3">
                                            <label for="ciudad">Total de Alquiler</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-12 py-3">
                                            <h4>Datos del Cliente</h4>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Nombre</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Apellido</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Ciudad</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Dirección</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Teléfono</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Celular</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                       
                                        <div class="col-sm-12 col-md-12 py-3">
                                            <button type="submit" class="btn btn-success">Libro Devuelto</button>
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