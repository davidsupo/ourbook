<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Libros de Stock</a>
                </li>
                <li class="breadcrumb-item active">Registrar Nuevo Libro</li>
            </ol>
            <div class="row pb-3">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Datos del Libro
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <img src="https://goo.gl/cYvfw8" class="img-fluid" id="blah" alt="Responsive image">
                                </div>
                                <div class="col-sm-12 col-md-10">
                                    <form class="row" @submit.prevent="Registrar()">
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label >Título</label>
                                            <input class="form-control" v-model="titulo" required>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="razon">Autor</label>
                                            <input class="form-control" v-model="autor" required>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="direccion">Editorial</label>
                                            <input class="form-control" v-model="editorial" required>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="ciudad">Precio de compra</label>
                                            <input class="form-control" v-model="precio" required>
                                        </div>
                                        
                                        <div class="col-sm-12 py-3">
                                            <h5>Categorías</h5>
                                            <div class="row">
                                                <template v-for="categoria in categorias">
                                                    <div class="col-sm-4 custom-control custom-checkbox" :key="categoria.id_categoria">
                                                    <input type="checkbox" class="custom-control-input" :value ="categoria.id_categoria" :id="categoria.id_categoria" v-model="selectCategorias">
                                                    <label class="custom-control-label" :for="categoria.id_categoria">{{categoria.nombre}}</label>
                                            </div>

                                                </template>
                                               
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Fecha de Publicación</label>
                                            <input type="date" class="form-control" v-model="fecha" required>
                                        </div>
                                        <div class="col-sm-12 col-md-6 py-3">
                                            <label for="persona">Número de Ejemplares</label>
                                            <input class="form-control"  v-model="ejemplares" required>
                                        </div>

                                        <div class="col-sm-12 col-md-12 py-3">
                                            <label for="persona">Sipnopsis</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="sinopsis" required></textarea>
                                        </div>

                                        <div class="col-sm-12 col-md-12 py-2">
                                            <input type="file" class="custom-file-input" id="customFile" @change="onFileChange">
                                            <label class="custom-file-label" for="customFile">Subir Portada</label>
                                        </div>

                                        <div class="col-sm-12 col-md-12 py-3">
                                            <button type="submit" class="btn btn-success">Crear nuevo</button>
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
  components: { Footer },
  data() {
    return {
      categorias: null,
      selectCategorias: [],
      image: null,
      currentImage: "",
      titulo: "",
      autor: "",
      editorial: "",
      precio: "",
      fecha: "",
      ejemplares: "",
      sinopsis: ""
    };
  },
  mounted() {
    this.listarCategorias();
  },
  methods: {
    listarCategorias() {
      fetch("http://localhost:3000/api/categoria")
        .then(res => res.json())
        .then(res => (this.categorias = res.data));
    },
    Registrar() {
      let form = new FormData();
      form.append("photo", this.image);
      form.append("titulo", this.titulo);
      form.append("autor", this.autor);
      form.append("editorial", this.editorial);
      form.append("precio", this.precio);
      form.append("fecha", this.fecha);
      form.append("ejemplares", this.ejemplares);
      form.append("sinopsis", this.sinopsis);
      form.append("categorias",JSON.stringify(this.selectCategorias));
      fetch("http://localhost:3000/api/libro", {
        method: "post",
        body: form
      })
        .then(res => res.json())
        .then(res => {
          if (res.success) {
            this.image = null;
            this.titulo = "";
            this.autor = "";
            this.editorial = "";
            this.precio = "";
            this.fecha = "";
            this.ejemplares = "";
            this.sinopsis = "";
            this.selectCategorias = [];
            $("#blah").attr("src", "https://goo.gl/cYvfw8");
          }
        });
    },
    onFileChange(e) {
      const files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.image = files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        $("#blah").attr("src", e.target.result);
      };

      reader.readAsDataURL(files[0]);
    }
  }
};
</script>

<style>
</style>