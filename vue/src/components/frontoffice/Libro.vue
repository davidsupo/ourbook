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
    section.bg-blanco.py-2
      .container.bg-oscuro
        .row.py-5
          .col-sm-12.col-md-3
            img.img-fluid(src='https://goo.gl/cYvfw8', alt='Responsive image')
          .col-sm-12.col-md-9
            .row
              .col-sm-12
                h2 Nombre del Libro
                h4 Nombre del Autor
              .col-sm-12
                h6.delgado Editorial: Nombre
                h6.delgado Temática: Nombre
                h6.delgado Editorial: Nombre
                h6.delgado Colección: Nombre
              .col-sm-12
                h6 Sipnosis
                p
                  | Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum omnis aut nam, minus nisi impedit ad debitis dolorum tenetur vero labore non facilis possimus. Modi deserunt numquam itaque sed nesciunt.
        .row.py-5
          .col-sm-12.col-md-3
            .row.bg-blanco
              .col-sm-12.py-3
                h3.text-black.text-center.delgado Estados del Libro a alquilar
          .col-sm-12.col-md-9.bg-secundario
            .row
              a.col-sm-12.col-md-4.py-3(href='#')
                h3.text-white.text-center.delgado
                  i.fas.fa-star
                  br
                  | Muy Bueno
                p.text-white Son libros recien comprados y con un tiempo de uso maximo de 6 meses
              a.col-sm-12.col-md-4.py-3.border-left(href='#')
                h3.text-white.text-center.delgado
                  i.fas.fa-star-half-alt
                  br
                  | Bueno
                p.text-white Son libros con un tiempo de uso maximo de 12 meses
              a.col-sm-12.col-md-4.py-3.border-left(href='#')
                h3.text-white.text-center.delgado
                  i.fas.fa-star-half
                  br
                  | Regular
                p.text-white Son libros con un tiempo de uso mayor de 12 meses
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
export default {
  components:{Header,Footer}
}
</script>

<style>

</style>
