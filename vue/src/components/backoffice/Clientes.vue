<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Clientes</a>
                </li>
                <li class="breadcrumb-item active">Lista de Clientes</li>
            </ol>

            <div class="row">
                <!-- Example DataTables Card-->
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> Clientes
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Dirección</th>
                                        <th>Celular</th>
                                        <th># Libros Alquilados</th>
                                        <th># Libros Compartidos</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Dirección</th>
                                        <th>Celular</th>
                                        <th># Libros Alquilados</th>
                                        <th># Libros Compartidos</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <template v-for="usuario in usuarios">
                                        <tr :key="usuario.nombres">
                                            <td>{{usuario.nombres}}</td>
                                            <td>{{usuario.apellidos}}</td>
                                            <td>{{usuario.direccion}}</td>
                                            <td>{{usuario.celular}}</td>
                                            <td>{{usuario.alquileres}} Libro(s)</td>
                                            <td>{{usuario.compartidos}} Libro(s)</td>
                                        </tr>
                                    </template>
                                    
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
    data(){
        return{
            usuarios:null,
        }
    },
    mounted(){
        this.listarUsuarios();
    },
    methods:{
        listarUsuarios(){
            fetch('http://localhost:3000/api/usuarios')
            .then(res=>res.json())
            .then(res=>this.usuarios=res.data);
        }
    }
}
</script>

<style>

</style>