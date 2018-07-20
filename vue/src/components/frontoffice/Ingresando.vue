<template lang="pug">
  div
    Header
    ParallaxPortada1
    SubHeader
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
    ListadoCategoria
    ListadoCategoria
    ParallaxCompartir
    ListadoCategoria
    ListadoCategoria
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
