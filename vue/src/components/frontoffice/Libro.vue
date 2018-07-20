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
              .col-sm-12
                h2 Nombre del Libro
                h4 Nombre del Autor
              .col-sm-12
                h6.delgado Editorial: Nombre
                h6.delgado Categoría: Nombre
                h6.delgado Editorial: Nombre
                h6.delgado Fecha de Publicación: Nombre
              .col-sm-12
                h6 Sipnosis
                p
                  | Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum omnis aut nam, minus nisi impedit ad debitis dolorum tenetur vero labore non facilis possimus. Modi deserunt numquam itaque sed nesciunt.
        .row.py-5
          .col-sm-12.col-md-3.bg-terciario
            .row
              .col-sm-12.py-3.altura-igual
                h3.text-white.text-center.negrita Estados del Libro a alquilar
                p.text-white.text-center Para alquilar, primero elije una de estas tres opciónes
          .col-sm-12.col-md-9.bg-secundario.px-0
            .row
              a.col-sm-12.col-md-4.py-3.altura-igual.boton-estados(href='#')
                h3.text-white.text-center.delgado
                  i.fas.fa-star
                  i.fas.fa-star
                  br
                  | Muy Bueno
                p.text-white.text-center Son libros recien comprados y con un tiempo de uso maximo de 6 meses
              a.col-sm-12.col-md-4.py-3.border-left.altura-igual.boton-estados(href='#')
                h3.text-white.text-center.delgado
                  i.fas.fa-star-half-alt
                  br
                  | Bueno
                p.text-white.text-center Son libros con un tiempo de uso maximo de 12 meses
              a.col-sm-12.col-md-4.py-3.border-left.altura-igual.boton-estados(href='#')
                h3.text-white.text-center.delgado
                  i.fas.fa-star-half
                  br
                  | Regular
                p.text-white.text-center Son libros con un tiempo de uso mayor de 12 meses
    ListadoCategoria
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
