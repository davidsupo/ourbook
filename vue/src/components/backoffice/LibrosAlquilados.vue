<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Libros Alquilados</a>
                </li>
                <li class="breadcrumb-item active">Lista de Libros Alquilados</li>
            </ol>
        
            <div class="row">
                <!-- Example DataTables Card-->
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> Libros
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Título</th>
                                        <th>Autor</th>
                                        <th>Inicio</th>
                                        <th>Fin</th>
                                        <th>Proceso</th>
                                        <th>Precio</th>
                                        <th>Penalidad</th>
                                        <th>Total</th>
                                        <th>Ver Más</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Título</th>
                                        <th>Autor</th>
                                        <th>Inicio</th>
                                        <th>Fin</th>
                                        <th>Proceso</th>
                                        <th>Precio</th>
                                        <th>Penalidad</th>
                                        <th>Total</th>
                                        <th>Ver Más</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    
                                    <tr>
                                    <td>1</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>2009/01/12</td>
                                    <td>2009/01/12</td>
                                    <td><span class="badge badge-pill badge-primary">En Alquiler</span></td>
                                    <td>$86,000</td>
                                    <td>$86,000</td>
                                    <td>$86,000</td>
                                    <td > <router-link class="nav-link d-flex justify-content-center" to="/admin/detallelibroalquilado"><i class="fas fa-angle-double-right"></i></router-link></td>
                                    </tr>
                                    <tr>
                                    <td>2</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>2012/03/29</td>
                                    <td>2012/03/29</td>
                                    <td><span class="badge badge-pill badge-primary">Vencido</span></td>
                                    <td>$433,060</td>
                                    <td>$433,060</td>
                                    <td>$433,060</td>
                                    <td> <router-link class="nav-link d-flex justify-content-center" to="/admin/detallelibroalquilado"><i class="fas fa-angle-double-right"></i></router-link></td>
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