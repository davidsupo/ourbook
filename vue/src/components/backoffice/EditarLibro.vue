<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Libros de Stock</a>
                </li>
                <li class="breadcrumb-item active">Lista de Libros</li>
                <li class="breadcrumb-item active">Editar Libro</li>
            </ol>
            <div class="row">
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
                                            <label for="ciudad">Precio</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Publicación</label>
                                            <input class="form-control"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona"># Ejemplares</label>
                                            <input class="form-control" disabled>
                                        </div>

                                        <div class="col-sm-12 col-md-12 py-3">
                                            <label for="persona">Sipnopsis</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
                                        </div>

                                        <div class="col-sm-12 col-md-12 py-3">
                                            <button type="submit" class="btn btn-success">Editar Libro</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Example DataTables Card-->
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> Libros Ejemplares
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Usuario</th>
                                        <th>Uso</th>
                                        <th>Estado</th>
                                        <th>Comfirmado</th>
                                        <th>Ver Más</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Usuario</th>
                                        <th>Uso</th>
                                        <th>Estado</th>
                                        <th>Comfirmado</th>
                                        <th>Ver Más</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    
                                    <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td class="d-flex justify-content-center"><a href=""><i class="fas fa-angle-double-right"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td class="d-flex justify-content-center"><a href=""><i class="fas fa-angle-double-right"></i></a></td>
                                    </tr>
                                    
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted"></div>
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