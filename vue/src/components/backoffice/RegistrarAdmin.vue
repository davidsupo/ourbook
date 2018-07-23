<template>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Registrar</a>
                </li>
                <li class="breadcrumb-item active">Nuevo Administrador</li>
            </ol>

            <div class="row">
                <div class="col-sm-12 col-md-2">
                    <img src="img/usuario.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-12 col-md-10">
                    <form @submit.prevent="Registrar()" class="row">
        <div role="alert" v-if="alert" class="alert alert-danger col-sm-12 mt-3">{{message}}</div>
        <div class="col-sm-12 col-md-6 py-3">
          <label>Nombre</label>
          <input v-model="nombres" class="form-control"/>
        </div>
        <div class="col-sm-12 col-md-6 py-3">
          <label for="razon">Apellidos</label>
          <input v-model="apellidos" class="form-control"/>
        </div>
        <div class="col-sm-12 col-md-6 py-3">
          <label for="direccion">Dirección</label>
          <input v-model="direccion" class="form-control"/>
        </div>
        <div class="col-sm-12 col-md-6 py-3">
          <label for="ciudad">Ciudad</label>
          <input v-model="ciudad" class="form-control"/>
        </div>
        <div class="col-sm-12 col-md-6 py-3">
          <label for="persona">Celular</label>
          <input v-model="celular" class="form-control"/>
        </div>
        <div class="col-sm-12 col-md-6 py-3">
          <label for="telefono">Teléfono</label>
          <input v-model="telefono" class="form-control"/>
        </div>
        <div class="col-sm-12 col-md-6 py-3">
          <label for="correo">Correo</label>
          <input id="correo" type="email" v-model="correo" class="form-control"/>
        </div>
        <div class="col-sm-12 col-md-6 py-3">
          <label for="correo">Contraseña</label>
          <input id="correo" type="password" v-model="password" class="form-control"/>
        </div>
        <div class="col-sm-12 col-md-6 py-3">
          <label for="correo">Confirmar Contraseña</label>
          <input id="correo" type="password" v-model="cpassword" class="form-control"/>
        </div>
        <div class="col-sm-12 col-md-12 py-3 mb-5 pb-5">
          <button type="submit" class="btn btn-success">REGISTRAR</button>
        </div>
      </form>
                </div>
            </div>
            <Footer class="mt-5"></Footer>
        </div>
    </div>
</template>

<script>
import Footer from "./Footer";
export default {
  components: { Footer },
  data() {
    return {
      alert: false,
      message: "",
      nombres: "",
      apellidos: "",
      direccion: "",
      ciudad: "",
      celular: "",
      telefono: "",
      correo: "",
      password: "",
      cpassword: ""
    };
  },
  methods: {
    Registrar() {
      if (
        this.nombres != "" &&
        this.apellidos != "" &&
        this.direccion != "" &&
        this.ciudad != "" &&
        this.celular != "" &&
        this.correo != "" &&
        this.password != "" &&
        this.cpassword != "" &&
        this.telefono != ""
      ) {
        if (this.password == this.cpassword) {
          let data = {
            nombres: this.nombres,
            apellidos: this.apellidos,
            direccion: this.direccion,
            ciudad: this.ciudad,
            celular: this.celular,
            telefono: this.telefono,
            correo: this.correo,
            contraseña: this.password,
            tipo: "A"
          };
          fetch("http://localhost:3000/api/usuario", {
            method: "post",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data)
          })
            .then(res => res.json())
            .then(res => {
              if (res.success) {
                this.nombres = "";
                this.apellidos = "";
                this.direccion = "";
                this.ciudad = "";
                this.celular = "";
                this.telefono = "";
                this.correo = "";
                this.password = "";
                this.cpassword = "";
              } else {
                this.alert = true;
                this.message = res.message;
                setTimeout(() => {
                  this.alert = false;
                }, 1800);
              }
            });
        } else {
          this.alert = true;
          this.message = "Las contraseñas no coinciden.";
          setTimeout(() => {
            this.alert = false;
          }, 1800);
        }
      } else {
        this.alert = true;
        this.message = "No pueden haber datos vacíos.";
        setTimeout(() => {
          this.alert = false;
        }, 1800);
      }
    }
  }
};
</script>

<style>
</style>