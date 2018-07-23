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
              template(v-for="cat in categorias")
                router-link(:to="{path:'/categoria/'+cat.id_categoria}").list-group-item.list-group-item-action {{cat.nombre}}
              
          .col-sm-9
            // Swiper
            .swiper-container
              .swiper-wrapper
                .swiper-slide(v-for="libro in libros.libros")
                  .row
                    .col-sm-12
                      .card.border-0
                        .card-body.d-flex.flex-column
                          .row
                            .col-sm-12.col-md-4
                              img.img-fluid(:src='libro.imagen', alt='Responsive image')
                            .col-sm-12.col-md-8
                              h3.color-secundario.negrita {{libro.titulo}} de {{libro.autor}}
                              h4.color-secundario.delgado Por {{libro.autor}}
                              router-link(:to="{path:'/libros/'+libro.id_libro}" tag="button").btn.btn-primary(type='button') Alquila este libro
                              h5.text-justify.py-3.delgado Edición, prólogo y notas de {{libro.autor}}
              // Add Pagination
              .swiper-pagination
              // Add Arrows
              .swiper-button-next
              .swiper-button-prev
    // ListadoCategoria
    // ListadoCategoria
    ParallaxCompartir
    ListadoCategorias
    // ListadoCategoria
    Footer
</template>

<script>
import Header from './Header'
import Footer from './Footer'
import SubHeader from './SubHeader'
import ListadoCategorias from './ListaCategorias'
import ParallaxPortada1 from './ParallaxPortada1'
import ParallaxCompartir from './ParallaxCompartir'
export default {
  components:{Header,Footer,SubHeader,ListadoCategorias,ParallaxPortada1,ParallaxCompartir},
  data(){
    return{
      categorias:null,
      libros:null
    }
  },
  mounted(){
    this.listarCategorias();
    this.listarPopulares();
  },
  methods:{
    listarCategorias(){
      fetch('http://localhost:3000/api/categoria')
      .then(res=>res.json())
      .then(res=>this.categorias=res.data)
    },
     listarPopulares() {
      fetch("http://localhost:3000/api/libros")
        .then(res => res.json())
        .then(res => {
          this.libros = res.data[0];
            this.libros.libros.map(lib=>{
              lib.imagen = `http://localhost:3000/libros/${lib.id_libro}.jpg`
            })

        });
    },
  }
}
</script>

<style>

</style>
