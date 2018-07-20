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
          form.row
            .col-sm-12.col-md-6.py-3
              label(for='ruc') Nombre
              input.form-control(type='text', placeholder='')
            .col-sm-12.col-md-6.py-3
              label(for='razon') Apellidos
              input.form-control(type='text', placeholder='')
            .col-sm-12.col-md-6.py-3
              label(for='direccion') Dirección
              input.form-control(type='text', placeholder='')
            .col-sm-12.col-md-6.py-3
              label(for='ciudad') Ciudad
              input.form-control(type='text', placeholder='')
            .col-sm-12.col-md-6.py-3
              label(for='persona') Celular
              input.form-control(type='text', placeholder='')
            .col-sm-12.col-md-6.py-3
              label(for='telefono') Teléfono
              input.form-control(type='text', placeholder='')
            .col-sm-12.col-md-6.py-3
              label(for='correo') Correo
              input#correo.form-control(type='email', aria-describedby='emailHelp', placeholder='')
            .col-sm-12.col-md-6.py-3
              label(for='correo') Contraseña
              input#correo.form-control(type='email', aria-describedby='emailHelp', placeholder='')
            .col-sm-12.col-md-6.py-3
              label(for='correo') Confirmar Contraseña
              input#correo.form-control(type='email', aria-describedby='emailHelp', placeholder='')
            .col-sm-12.col-md-12.py-3
              button.btn.btn-success(type='submit') Registrarse
    Footer  
</template>

<script>
import Header from './Header'
import Footer from './Footer'
export default {
  components:{Header,Footer}
}
</script>

<style>

</style>
