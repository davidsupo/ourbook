<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Libros de Stock</a>
                </li>
                <li class="breadcrumb-item active">Lista de Libros</li>
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
                                        <th>Título</th>
                                        <th>Autor</th>
                                        <th>Editorial</th>
                                        <th>Precio de Compra</th>
                                        <th>Fecha de Publicación</th>
                                        <th># Ejemplares</th>
                                        <th>Ver Más</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Título</th>
                                        <th>Autor</th>
                                        <th>Editorial</th>
                                        <th>Precio de Compra</th>
                                        <th>Fecha de Publicación</th>
                                        <th># Ejemplares</th>
                                        <th>Ver Más</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <template v-for="libro in libros">
                                        <tr :key="libro.id_libro">
                                            <td>{{libro.titulo}}</td>
                                            <td>{{libro.autor}}</td>
                                            <td>{{libro.editorial}}</td>
                                            <td>{{libro.precio}}</td>
                                            <td>{{libro.fecha_publicacion}}</td>
                                            <td>{{libro.ejemplares}}</td>
                                            <td><router-link class="nav-link d-flex justify-content-center" to="/admin/editarlibro"><i class="fas fa-angle-double-right"></i></router-link></td>
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
    this.listarLibros();
  },
  methods: {
    listarLibros() {
      fetch("http://localhost:3000/api/librosejemplares")
        .then(res => res.json())
        .then(res => {
          if (res.success && res.data != null) {
            this.libros = res.data;
            this.libros.map(el => {
              if (el.fecha_publicacion)
                el.fecha_publicacion = el.fecha_publicacion.substr(0, 10);
            });
          }
        });
    }
  }
};
</script>

<style>
</style>