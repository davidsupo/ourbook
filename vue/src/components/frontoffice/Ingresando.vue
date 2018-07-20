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
    section.bg-blanco.py-1
      .container
        .row.d-flex.justify-content-center.py-5
          .col-sm-3.p-0
            .list-group
              a.list-group-item.list-group-item-action.active(href='#')
                | Categorías
              a.list-group-item.list-group-item-action(href='#') Clasicos
              a.list-group-item.list-group-item-action(href='#') BetSellers
              a.list-group-item.list-group-item-action(href='#') Top Autores
              a.list-group-item.list-group-item-action(href='#') Top Autores
              a.list-group-item.list-group-item-action.disabled(href='#') Biografías
          .col-sm-9
            // Swiper
            .swiper-container
              .swiper-wrapper
                .swiper-slide
                  .row
                    .col-sm-12
                      .card.border-0
                        .card-body.d-flex.flex-column
                          .row
                            .col-sm-12.col-md-4
                              img.img-fluid(src='https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/m_libros/poesia-completa_9786124379055_3d.png', alt='Responsive image')
                            .col-sm-12.col-md-8
                              h3.color-secundario.negrita Poesia completa de Cesar Vallejos
                              h4.color-secundario.delgado Por Cesar Vallejos
                              button.btn.btn-primary(type='button') Alquila este libro
                              h5.text-justify.py-3.delgado Edición, prólogo y notas de Ricardo González Vigil
                .swiper-slide
                  .row
                    .col-sm-12
                      .card.border-0
                        .card-body.d-flex.flex-column
                          .row
                            .col-sm-12.col-md-4
                              img.img-fluid(src='https://planetadelibrospe5.cdnstatics.com/usuaris/libros/fotos/275/m_libros/la-chica-del-cumpleanos_9788490665206_3d.png', alt='Responsive image')
                            .col-sm-12.col-md-8
                              h3.color-secundario.negrita La chica del cumpleaños
                              h4.color-secundario.delgado Por Haruki Murakami
                              button.btn.btn-primary(type='button') Alquila este libro
                              h5.text-justify.py-3.delgado
                                | El misterio y lo cotidiano confluyen en un bellísimo relato del célebre escritor japonés Haruki Murakami.
                .swiper-slide
                  .row
                    .col-sm-12
                      .card.border-0
                        .card-body.d-flex.flex-column
                          .row
                            .col-sm-12.col-md-4
                              img.img-fluid(src='https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/m_libros/273988_diario-del-fin-del-mundo_9789584268716_3d.png', alt='Responsive image')
                            .col-sm-12.col-md-8
                              h3.color-secundario.negrita Diario del fin del mundo
                              h4.color-secundario.delgado Por Mario Mendoza
                              button.btn.btn-primary(type='button') Alquila este libro
                              h5.text-justify.py-3.delgado
                                | Una novela que pretende descifrar nuestra época y anticipar el temible tiempo que se nos avecina.
              // Add Pagination
              .swiper-pagination
              // Add Arrows
              .swiper-button-next
              .swiper-button-prev
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
    section.bg-blanco.py-1
      .container
        .row.d-flex.justify-content-center.my-3
          .col-md-12
            .row.introduccion
              .col-sm-12.col-md-12.mb-3
                h1.delgado BetSellers
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
                h1.delgado Comics
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
