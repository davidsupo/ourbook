<template lang="pug">
  div
    Header
    ParallaxPortada1
    SubHeader
    section.bg-blanco.py-2
      .container.bg-oscuro
        .row.py-5
          .col-sm-12.col-md-3
            img.img-fluid(src='https://goo.gl/cYvfw8', alt='Responsive image')
          .col-sm-12.col-md-9
            .row
              .col-sm-12.border-bottom
                h2 Nombre del Libro
                h4 Nombre del Autor
                h4
                  | Estado del libro: 
                  span.badge.badge-pill.badge-primary Muy Bueno
                h2.delgado Precio de alquiler por semana: s/25.00
              .col-sm-12.py-3
                h4 Verifica tus Datos
                form.row
                  .col-sm-12.col-md-6.py-3
                    label(for='ruc') Nombre
                    input#disabledInput.form-control(type='text', placeholder='Daniel', disabled='')
                  .col-sm-12.col-md-6.py-3
                    label(for='razon') Apellidos
                    input#disabledInput.form-control(type='text', placeholder='Sanchez Méndez', disabled='')
                  .col-sm-12.col-md-6.py-3
                    label(for='direccion') Dirección
                    input.form-control(type='text', placeholder='')
                  .col-sm-12.col-md-6.py-3
                    label(for='ciudad') Ciudad
                    input.form-control(type='text', placeholder='')
                  .col-sm-12.col-md-6.py-3
                    label(for='persona') Celular para contactarte
                    input.form-control(type='text', placeholder='')
                  .col-sm-12.col-md-6.py-3
                    label(for='persona') Fecha de Inicio
                    input.form-control(type='date', name='bday', min='1000-01-01', max='3000-12-31')
                  .col-sm-12.col-md-6.py-3
                    label(for='correo') Número de semanas de alquiler
                    select.form-control
                      option 1 semana
                      option 2 semanas
                      option 3 semanas
                      option 4 semanas
                  .col-sm-12.col-md-6.py-3
                    label(for='persona') Fecha de Fin
                    input#disabledInput.form-control(type='text', placeholder='18/08/2018', disabled='')
                  .col-sm-12.col-md-12.py-3
                    h2.delgado Precio de alquiler total: s/.50.00
                  .col-sm-12.col-md-12.py-3
                    button.btn.btn-success(type='submit') Alquilar Libro
    
    ListadoCategoria
    ParallaxCompartir
    Footer 
</template>

<script>
import Header from './Header'
import Footer from './Footer'
import SubHeader from './SubHeader'
import ListadoCategoria from './ListadoCategoria'
import ParallaxPortada1 from './ParallaxPortada1'
import ParallaxCompartir from './ParallaxCompartir'
export default {
  components:{Header,Footer,SubHeader,ListadoCategoria,ParallaxPortada1,ParallaxCompartir}
}
</script>

<style>

</style>
