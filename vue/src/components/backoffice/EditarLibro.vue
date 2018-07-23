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
                            <div class="row" v-if="libro">
                                <div class="col-sm-12 col-md-2">
                                    <img :src="libro.imagen" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-sm-12 col-md-10">
                                    <form class="row">
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label >Título</label>
                                            <input class="form-control" v-model="libro.titulo"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="razon">Autor</label>
                                            <input class="form-control" v-model="libro.autor" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="direccion">Editorial</label>
                                            <input class="form-control" v-model="libro.editorial" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="ciudad">Precio</label>
                                            <input class="form-control" v-model="libro.precio" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Publicación</label>
                                            <input class="form-control" v-model="libro.fecha_publicacion" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona"># Ejemplares</label>
                                            <input class="form-control" v-model="libro.ejemplares" disabled>
                                        </div>

                                        <div class="col-sm-12 col-md-12 py-3">
                                            <label for="persona">Sipnopsis</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled v-model="libro.sinopsis" ></textarea>
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
                                        <th>Estado</th>
                                      
                                        <th>Comfirmado</th>
                                        <th>Ver Más</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Usuario</th>
                                        <th>Estado</th>
                                  
                                        <th>Comfirmado</th>
                                        <th>Ver Más</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <template v-if="ejemplares">
                                        <template v-for="ejemplar in ejemplares">
                                            <tr :key="ejemplar.id_ejemplar">
                                        <td>{{ejemplar.id_ejemplar}}</td>
                                        <td>{{ejemplar.usuario}}</td>
                                     
                                        <template v-if="ejemplar.uso==1">
                                                <td><i class="fas fa-star" data-toggle="tooltip" data-placement="top" title="Muy Bueno"></i></td>
                                        </template>
                                        <template v-if="ejemplar.uso==2">
                                                <td><i class="fas fa-star-half-alt" data-toggle="tooltip" data-placement="top" title="Bueno"></i></td>
                                        </template>
                                        <template v-if="ejemplar.uso==3">
                                            <td><i class="fas fa-star-half" data-toggle="tooltip" data-placement="top" title="Regular"></i></td>
                                        </template> 
                
                                        <td>{{ejemplar.confirmado}}</td>
                                        <td class="d-flex justify-content-center"><a href=""><i class="fas fa-angle-double-right"></i></a></td>
                                        </tr>
                                        </template>
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
  props: ["id"],
  components: { Footer },
  data() {
    return {
      libro: null,
      ejemplares:null,
    };
  },
  watch: {
    id() {
      this.obtenerLibro();
    }
  },
  mounted() {
    this.obtenerLibro();
    this.listarEjemplares();
  },
  methods: {
    obtenerLibro() {
      fetch("http://localhost:3000/api/libro/info/" + this.id)
        .then(res => res.json())
        .then(res => {
          if (res.success && res.data != null) {
            this.libro = res.data;
            this.libro.imagen = `http://localhost:3000/libros/${this.id}.jpg`;
            if(this.libro.fecha_publicacion)
                this.libro.fecha_publicacion = this.libro.fecha_publicacion.substr(0,10);            
          }
        });
    },
    listarEjemplares(){
        fetch('http://localhost:3000/api/libro/ejemplares/'+this.id)
            .then(resp=>resp.json())
            .then(resp=>{
                if(resp.success && resp.data!=null)
                    this.ejemplares = resp.data;
                    this.ejemplares.map(el=>{
                        if(el.confirmado=='Y'){
                            el.confirmado = 'SI';
                        }else{
                            el.confirmado = 'NO';
                        }
                    })
            })
    }
  }
};
</script>

<style>
</style>