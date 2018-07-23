<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Libros Alquilados</a>
                </li>
                <li class="breadcrumb-item active">Lista de Libros Compartidos</li>
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
                                        <th>Propietario</th>
                                        <th>Proceso</th>
                                        <th>Ingreso</th>
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
                                        <th>Propietario</th>
                                        <th>Proceso</th>
                                        <th>Ingreso</th>
                                        <th>Ver Más</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <template v-for="libro in libros">
                                    <tr :key="libro.numero">
                                    <td>{{libro.numero}}</td>
                                    <td>{{libro.titulo}}</td>
                                    <td>{{libro.autor}}</td>
                                    <td>{{libro.fecha_compartido.substr(0,10)}}</td>
                                    <td>{{libro.fecha_fin.substr(0,10)}}</td>
                                    <td>{{libro.nombres}} {{libro.apellidos}}</td>
                                    <td><span class="badge badge-pill badge-primary">{{libro.proceso}}</span></td>
                                    <td>S/ {{libro.total}}</td>
                                    <td > <router-link class="nav-link d-flex justify-content-center" to="/admin/"><i class="fas fa-angle-double-right"></i></router-link></td>
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
            libros:null
        }
    },
    mounted(){
        this.listarLibros();
    },
    methods:{
         listarLibros() {
      fetch("http://localhost:3000/api/libros/compartidos")
        .then(res => res.json())
        .then(res => {
          if (res.success && res.data!=null) {
            this.libros = res.data;
            let count = 0;
            this.libros.map(el => {
              count++;
              el.numero = count;            
              let total = 0;
              let alquiler = 'Libre';
              el.alquileres.map(al => {
                  if(al.proceso && al.proceso=='En alquiler'){
                      alquiler = 'En alquiler'
                  }
                if (al.precio != null) {
                  total += al.precio;
                }
                if (al.penalidad != null) {
                  total += al.penalidad;
                }
              });
              el.total = total;
              el.proceso = alquiler;
            });
          }
        });
    }
    }
}
</script>

<style>

</style>