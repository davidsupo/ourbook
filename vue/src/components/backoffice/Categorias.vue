<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Categorías</a>
                </li>
                <li class="breadcrumb-item active">Lista de Categorías</li>
            </ol>

            <div class="row">
                <!-- Example DataTables Card-->
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> Categorías de Libros
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categoría</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categoría</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <template v-for="categoria in categorias">
                                    <tr :key="categoria.id_categoria">
                                        <td>{{categoria.id_categoria}}</td>
                                        <td>{{categoria.nombre}}</td>
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
          categorias:null,
      }
  },
  mounted(){
      this.listarCategorias();
  },
  methods:{
      listarCategorias(){
          fetch('http://localhost:3000/api/categoria')
          .then(res=>res.json())
          .then(res=>this.categorias=res.data)
      }
  }
 
}
</script>

<style>

</style>