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
                                    <template v-for="libro in libros">
                                        <tr :key="libro.numero">
                                            <td>{{libro.numero}}</td>
                                            <td>{{libro.titulo}}</td>
                                            <td>{{libro.autor}}</td>
                                            <td>{{libro.fecha_alquiler.substr(0,10)}}</td>
                                            <td>{{libro.fecha_fin.substr(0,10)}}</td>
                                            <td><span class="badge badge-pill badge-primary">{{libro.proceso}}</span></td>
                                            <td>S/ {{libro.precio}}</td>
                                            <td>S/ {{libro.penalidad}}</td>
                                            <td>S/ {{libro.precio + libro.penalidad}}</td>
                                            <td > <router-link class="nav-link d-flex justify-content-center" :to="{path:'/admin/detallelibroalquilado/'+libro.id_alquiler}"><i class="fas fa-angle-double-right"></i></router-link></td>
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
import Footer from "./Footer";
export default {
  components: { Footer },
  data() {
    return {
      libros: null
    };
  },
  mounted() {
    fetch("http://localhost:3000/api/libros/alquilados")
      .then(res => res.json())
      .then(res => {
        if (res.success && res.data!=null) {
          this.libros = res.data;
          let count = 0;
          this.libros.map(lib => {
            count++;
            var date1 = new Date(lib.fecha_fin);
            var date2 = new Date();
            var timeDiff = date2.getTime() - date1.getTime();
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
            console.log(diffDays);
            if (diffDays > 0) {
              lib.penalidad = 2 * diffDays;
            } else {
              lib.penalidad = 0.00;
            }
            lib.numero = count;
          });
        }
      });
  }
};
</script>

<style>
</style>