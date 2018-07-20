<template lang="pug">
  div
    Header
    .parallax-inicio.d-flex.align-items-stretch
      .bg-transparente-oscuro(style='width:100%;')
        .container.d-flex.align-items-stretch(style='width:100%; height:100%;')
          .row.d-flex.justify-content-center.align-self-center(style='width:100%;')
            .col-sm-8.d-flex.align-items-center
              .justify-content-center
                h1.col.text-white.negrita Alquila tu libro Favorito
                h4.col.text-white
                  | Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores quidem dolore, quasi error velit maiores delectus debitis deleniti consequatur alias.
            .col-sm-4
              .justify-content-center
                .bg-transparente-oscuro
                  .row.p-4(v-if="!user")
                    h3.col-sm-12.text-white Iniciar Sesión
                    .col-sm-12.bg-secundario.mb-3(style='width:10%; height:1px;')
                    form.col-sm-12(@submit.prevent="Login()")
                      .alert.alert-danger(role='alert' v-if="alert")
                        | {{message}}
                      .form-group
                        label.text-white(for='exampleInputEmail1') Correo
                        input#exampleInputEmail1.form-control(type='email', aria-describedby='emailHelp', placeholder='Enter email' v-model="email")
                        small#emailHelp.form-text.text-muted Nunca compartiremos su correo electrónico con nadie.
                      .form-group
                        label.text-white(for='exampleInputPassword1') Contraseña
                        input#exampleInputPassword1.form-control(type='password', placeholder='Password' v-model="password")
                      // .form-group
                      //   a(href='#' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo') Olvide mi contraseña
                      .form-group.form-check
                        input#exampleCheck1.form-check-input(type='checkbox')
                        label.form-check-label.color-oscuro(for='exampleCheck1') Recordar
                      button.btn.btn-primary.text-white.mr-3(type='submit') Ingresar
                      router-link.bg-terciario.btn.text-white(to='/login') Regístrate
                    // Modal
                    #exampleModal.modal.fade(tabindex='-1', role='dialog', aria-labelledby='exampleModalLabel', aria-hidden='true')
                      .modal-dialog(role='document')
                        .modal-content
                          .modal-header
                            h5#exampleModalLabel.modal-title Recuperar mi contraseña
                            button.close(type='button', data-dismiss='modal', aria-label='Close')
                              span(aria-hidden='true') ×
                          .modal-body
                            .alert.alert-success(role='alert')
                              | En su correo recibirá su contraseña
                            .alert.alert-danger(role='alert')
                              | Su correo no esta registrado
                            form
                              .form-group
                                label.col-form-label(for='recipient-name') Correo:
                                input#recipient-name.form-control(type='text')
                          .modal-footer
                            button.btn.btn-secondary(type='button', data-dismiss='modal') Cerrar
                            button.btn.btn-primary(type='button') Enviar
    SubHeader(v-if="user")    
    section.bg-blanco.py-4
      .container
        .row.d-flex.justify-content-center
          .col-md-12
            .row.introduccion
              .col-sm-12.col-md-12.mb-3
                h1.delgado CATEGORÍA DE LIBROS
                .bg-primario.mb-3(style='width:5%; height:3px;')
              .col-sm-12.col-md-12
                .row.bg-oscuro
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Clásicos
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white BestSellers
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Top Autores
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Lo más nuevo
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Biografías
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Deportes
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Gastronomía
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Novela
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Histórica
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Comics
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Tecnología
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
                  .col-sm-12.col-md-4.my-3
                    .row
                      .col-8.bg-azul-oscuro.py-4
                        h4.text-white Motivacionales
                      .col-4.bg-terciario.d-flex.align-items-center
                        img.img-fluid(src='img/icono-arte.png', class='icono-pequeño', alt='Responsive image')
    section.bg-blanco.py-4
      .container
        .row.d-flex.justify-content-center
          .col-md-12
            .row.introduccion
              .col-sm-12.col-md-12.mb-3
                h1.delgado ¿COMÓ ALQUILAR UN LIBRO?
                .bg-primario.mb-3(style='width:5%; height:3px;')
              .col-sm-12.col-md-12
                .row
                  .col-sm-12.col-md-3.my-2
                    .card.shadow.rounded.bg-azul-oscuro
                      .card-body.d-flex.flex-column
                        .d-flex.justify-content-center.py-4
                          span.icon-profile.color-terciario(style='font-size: 50px;')
                        h3.color-secundario.negrita Regristraté
                        h4.color-secundario.delgado como usuario
                        p.text-justify.text-white
                          | Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, in, est ut impedit veniam distinctio laudantium.
                  .col-sm-12.col-md-3.my-2
                    .card.shadow.rounded.bg-azul-oscuro
                      .card-body.d-flex.flex-column
                        .d-flex.justify-content-center.py-4
                          span.icon-book.color-terciario(style='font-size: 50px;')
                        h3.color-secundario.negrita Alquila
                        h4.color-secundario.delgado uno libro
                        p.text-justify.text-white
                          | Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, in, est ut impedit veniam distinctio laudantium.
                  .col-sm-12.col-md-3.my-2
                    .card.shadow.rounded.bg-azul-oscuro
                      .card-body.d-flex.flex-column
                        .d-flex.justify-content-center.py-4
                          span.icon-home.color-terciario(style='font-size: 50px;')
                        h3.color-secundario.negrita Recibe lo
                        h4.color-secundario.delgado en tu domicilio
                        p.text-justify.text-white
                          | Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, in, est ut impedit veniam distinctio laudantium.
                  .col-sm-12.col-md-3.my-2
                    .card.shadow.rounded.bg-azul-oscuro
                      .card-body.d-flex.flex-column
                        .d-flex.justify-content-center.py-4
                          span.icon-undo2.color-terciario(style='font-size: 50px;')
                        h3.color-secundario.negrita Devuelve lo
                        h4.color-secundario.delgado a tiempo
                        p.text-justify.text-white
                          | Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, in, est ut impedit veniam distinctio laudantium.
    Footer
</template>

<script>
import SubHeader from "./frontoffice/SubHeader";
import Header from "./frontoffice/Header";
import Footer from "./frontoffice/Footer";
export default {
  components: { Header, Footer, SubHeader },
  data() {
    return {
      email: "",
      password: "",
      alert: false,
      message: "",
      user: null
    };
  },
  created() {
    this.user = localStorage.getItem("user-ourbook")
      ? JSON.parse(localStorage.getItem("user-ourbook"))
      : null;
  },
  methods: {
    Login() {
      if (this.email != "" && this.password != "") {
        let data = { username: this.email, password: this.password };
        fetch("http://localhost:3000/api/auth", {
          method: "post",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(data)
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
              localStorage.setItem("user-ourbook", JSON.stringify(myUser));
              window.location.reload();
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
        this.message = "Ingresa usuario y contraseña";
        setTimeout(() => {
          this.alert = false;
        }, 2000);
      }
    }
  }
};
</script>

<style>
</style>
