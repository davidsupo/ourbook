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
                            <div class="row" v-if="libro">
                                <div class="col-sm-12 col-md-2">
                                    <img :src="libro.imagen" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-sm-12 col-md-10">
                                    <form class="row">
                                        <div class="col-sm-12 col-md-12 py-3">
                                            <h4>Datos del Alquiler</h4>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label >Id Alquiler</label>
                                            <input class="form-control"  v-model="libro.id_alquiler" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label >Id Ejemplar</label>
                                            <input class="form-control"  v-model="libro.id_ejemplar" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label >Título</label>
                                            <input class="form-control"  v-model="libro.titulo" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="razon">Autor</label>
                                            <input class="form-control" v-model="libro.autor" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="direccion">Editorial</label>
                                            <input class="form-control"  v-model="libro.editorial" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="direccion">Propietario</label>
                                            <input class="form-control"  v-model="libro.propietario" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Alquiler</label>
                                            <input class="form-control" v-model="libro.fecha_alquiler" disabled>
                                        </div>                                      
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Fin de Alquiler</label>
                                            <input class="form-control" v-model="libro.fecha_fin" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Devolución</label>
                                            <input class="form-control" v-model="libro.fecha_devoluacion"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-4 py-3">
                                            <label for="ciudad">Precio de Alquiler</label>
                                            <input class="form-control" v-model="libro.precio" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-4 py-3">
                                            <label for="ciudad">Penalidad</label>
                                            <input class="form-control" v-model="libro.penalidad" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-4 py-3">
                                            <label for="ciudad">Total de Alquiler</label>
                                            <input class="form-control" v-model="libro.total" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-12 py-3">
                                            <h4>Datos del Cliente</h4>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Nombre</label>
                                            <input class="form-control" v-model="libro.nombres"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Apellido</label>
                                            <input class="form-control"  v-model="libro.apellidos" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Ciudad</label>
                                            <input class="form-control" v-model="libro.ciudad"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Dirección</label>
                                            <input class="form-control" v-model="libro.direccion" disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Teléfono</label>
                                            <input class="form-control" v-model="libro.telefono"  disabled>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Celular</label>
                                            <input class="form-control"  v-model="libro.celular" disabled>
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
import Footer from "./Footer";
export default {
  props: ["id"],
  components: { Footer },
  data() {
    return {
      libro: null
    };
  },
  watch: {
    id() {}
  },
  mounted() {
    this.obtenerDetalle();
  },
  methods: {
    obtenerDetalle() {
      fetch("http://localhost:3000/api/detalle/" + this.id)
        .then(res => res.json())
        .then(res => {
          if (res.success && res.data != null) {
            this.libro = res.data;
            if (this.libro.fecha_alquiler)
              this.libro.fecha_alquiler = this.libro.fecha_alquiler.substr(
                0,
                10
              );
            if (this.libro.fecha_fin)
              this.libro.fecha_fin = this.libro.fecha_fin.substr(0, 10);
            if (this.libro.fecha_devoluacion)
              this.libro.fecha_devoluacion = this.libro.fecha_devoluacion.substr(
                0,
                10
              );
            this.libro.imagen = `http://localhost:3000/libros/${
              this.libro.id_libro
            }.jpg`;
            this.libro.total = this.libro.precio + this.libro.penalidad;
          }
        });
    }
  }
};
</script>

<style>
</style>