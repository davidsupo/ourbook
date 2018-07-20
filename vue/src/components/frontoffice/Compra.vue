<template lang="pug">
  div
    Header
    .parallax-ingresando.d-flex.align-items-stretch
      .bg-transparente-oscuro(style='width:100%;')
        .container.d-flex.align-items-stretch(style='width:100%; height:100%;')
          .row.d-flex.justify-content-center.align-self-center(style='width:100%;')
            .col-sm-8.d-flex.align-items-center
              .justify-content-center
                h1.col.text-white.negrita Encuentra tus libros Favoritos
                h4.col.text-white.delgado Una gran variedad para elegir y alquilar.
            .col-sm-4
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
    section.bg-blanco.py-1
      .container
        .row.d-flex.justify-content-center.my-3
          .col-md-12
            .row.introduccion
              .col-sm-12.col-md-12.mb-3
                h1.delgado Los más Populares
                .bg-primario.mb-3(style='width:5%; height:3px;')
              .col-sm-12.col-md-12
                .row
                  .col-sm-12.col-md-3.my-2
                    .card.border-0
                      a.card-body.d-flex.flex-column.p-0(href='#')
                        img.img-fluid.shadow.rounded(src='https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_poesia-completa_cesar-vallejo_201806061823.png', alt='Responsive image', style='width:100%')
                  .col-sm-12.col-md-3.my-2
                    .card.border-0
                      a.card-body.d-flex.flex-column.p-0(href='#')
                        img.img-fluid.shadow.rounded(src='https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_los-increibles-2-la-novela_disney_201805312002.png', alt='Responsive image', style='width:100%')
                  .col-sm-12.col-md-3.my-2
                    .card.border-0
                      a.card-body.d-flex.flex-column.p-0(href='#')
                        img.img-fluid.shadow.rounded(src='https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_gamedonia-escuela-de-gamers-2_elrubius_201805311923.png', alt='Responsive image', style='width:100%')
                  .col-sm-12.col-md-3.my-2
                    .card.border-0
                      a.card-body.d-flex.flex-column.p-0(href='#')
                        img.img-fluid.shadow.rounded(src='https://planetadelibrospe5.cdnstatics.com/usuaris/libros/fotos/275/tam_1/portada_jaque-mate-al-amor_rosa-maria-cifuentes-castaneda_201806060049.png', alt='Responsive image', style='width:100%')
          a.btn.btn-outline-danger.px-5(href='#') Ver más
    section.bg-oscuro.py-1
      .container
        .row.d-flex.justify-content-center.my-3
          .col-md-12
            .row.introduccion
              .col-sm-12.col-md-12.mb-3
                h1.delgado Novedades
                .bg-primario.mb-3(style='width:5%; height:3px;')
              .col-sm-12.col-md-12
                .row
                  .col-sm-12.col-md-3.my-2
                    .card.border-0
                      a.card-body.d-flex.flex-column.p-0(href='#')
                        img.img-fluid.shadow.rounded(src='https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_poesia-completa_cesar-vallejo_201806061823.png', alt='Responsive image', style='width:100%')
                  .col-sm-12.col-md-3.my-2
                    .card.border-0
                      a.card-body.d-flex.flex-column.p-0(href='#')
                        img.img-fluid.shadow.rounded(src='https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_los-increibles-2-la-novela_disney_201805312002.png', alt='Responsive image', style='width:100%')
                  .col-sm-12.col-md-3.my-2
                    .card.border-0
                      a.card-body.d-flex.flex-column.p-0(href='#')
                        img.img-fluid.shadow.rounded(src='https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_gamedonia-escuela-de-gamers-2_elrubius_201805311923.png', alt='Responsive image', style='width:100%')
                  .col-sm-12.col-md-3.my-2
                    .card.border-0
                      a.card-body.d-flex.flex-column.p-0(href='#')
                        img.img-fluid.shadow.rounded(src='https://planetadelibrospe5.cdnstatics.com/usuaris/libros/fotos/275/tam_1/portada_jaque-mate-al-amor_rosa-maria-cifuentes-castaneda_201806060049.png', alt='Responsive image', style='width:100%')
          a.btn.btn-outline-danger.px-5(href='#') Ver más
    .parallax-prestar.d-flex.align-items-stretch
      .bg-transparente-oscuro(style='width:100%;')
        .container.d-flex.align-items-stretch(style='width:100%; height:100%;')
          .row.d-flex.justify-content-center.align-self-center(style='width:100%;')
            .col-sm-8.d-flex.align-items-center
              .justify-content-center
                h1.col.text-white.negrita Tambien puedes poner a alquiler tus libros
                h4.col.text-white.delgado Comparte y recibe ganancias.
                a.btn.btn-success.ml-2.px-4(href='#') Comparte aquí
            .col-sm-4
    Footer 
</template>

<script>
import Header from './Header'
import Footer from './Footer'
import SubHeader from './SubHeader'
export default {
  components:{Header,Footer,SubHeader}
}
</script>

<style>

</style>
