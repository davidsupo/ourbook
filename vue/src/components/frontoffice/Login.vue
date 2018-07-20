<template lang="pug">
  div
    Header
    .parallax-ingresando.d-flex.align-items-stretch
      .bg-transparente-oscuro(style='width:100%;')
        .container.d-flex.align-items-stretch(style='width:100%; height:100%;')
          .row.d-flex.justify-content-center.align-self-center(style='width:100%;')
            .col-sm-8.d-flex.align-items-center
              .justify-content-center
                h1.col.text-white.negrita Registrate y Encuentra tus libros Favoritos
                h4.col.text-white.delgado Una gran variedad para elegir y alquilar.
            .col-sm-4
    section.bg-blanco.py-2
      .container.bg-oscuro
        .row.py-5
          .col-sm-12.border-bottom
            h2 Ingresa tus datos correctamente
          form.row(@submit.prevent="Registrar()")
            .alert.alert-danger.col-sm-12.mt-3(role='alert' v-if="alert")
              | {{message}}
            .col-sm-12.col-md-6.py-3
              label() Nombre
              input.form-control(v-model="nombres")
            .col-sm-12.col-md-6.py-3
              label(for='razon') Apellidos
              input.form-control(v-model="apellidos")
            .col-sm-12.col-md-6.py-3
              label(for='direccion') Dirección
              input.form-control(v-model="direccion")
            .col-sm-12.col-md-6.py-3
              label(for='ciudad') Ciudad
              input.form-control(v-model="ciudad")
            .col-sm-12.col-md-6.py-3
              label(for='persona') Celular
              input.form-control(v-model="celular")
            .col-sm-12.col-md-6.py-3
              label(for='telefono') Teléfono
              input.form-control(v-model="telefono")
            .col-sm-12.col-md-6.py-3
              label(for='correo') Correo
              input#correo.form-control(type='email' v-model="correo")
            .col-sm-12.col-md-6.py-3
              label(for='correo') Contraseña
              input#correo.form-control(type='password', v-model="password")
            .col-sm-12.col-md-6.py-3
              label(for='correo') Confirmar Contraseña
              input#correo.form-control(type='password', v-model="cpassword")
            .col-sm-12.col-md-12.py-3
              button.btn.btn-success(type='submit') Registrarse
    Footer  
</template>

<script>
import Header from "./Header";
import Footer from "./Footer";
export default {
  components: { Header, Footer },
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
            tipo: "U"
          };
          fetch("http://localhost:3000/api/usuario", {
            method: "post",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data)
          })
            .then(res => res.json())
            .then(res => {
              if (res.success) {
                fetch("http://localhost:3000/api/auth", {
                  method: "post",
                  headers: { "Content-Type": "application/json" },
                  body: JSON.stringify({
                    username: this.correo,
                    password: this.password
                  })
                })
                  .then(res => res.json())
                  .then(res => {
                    if (res.success) {
                      let myUser = {
                        nombres: res.data.f1,
                        apellidos: res.data.f2,
                        tipo: res.data.f3,
                        id: res.data.f4
                      };
                      localStorage.setItem(
                        "user-ourbook",
                        JSON.stringify(myUser)
                      );
                      this.$router.replace('/')
                    } else {
                      this.alert = true;
                      this.message = res.message;
                      setTimeout(() => {
                        this.alert = false;
                      }, 2000);
                    }
                  });
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
