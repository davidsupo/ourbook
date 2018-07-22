<template lang="pug">
  div
    Header
    ParallaxPortada1
    SubHeader
    section.bg-blanco.py-1
      .container
        .row.d-flex.justify-content-center.my-3
          .col-md-12
            template(v-if="categoria")
              .row.introduccion
                .col-sm-12.col-md-12.mb-3
                  h1.delgado {{categoria.categoria}}
                  .bg-primario.mb-3(style='width:5%; height:3px;')
                .col-sm-12.col-md-12
                  .row
                    .col-sm-12.col-md-3.my-2(v-for="libro in categoria.libros")
                      .card.border-0
                        router-link(:to="{path: '/libros/' + libro.id_libro}").card-body.d-flex.flex-column.p-0
                          img.img-fluid.shadow.rounded(src='https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_poesia-completa_cesar-vallejo_201806061823.png', alt='Responsive image', style='width:100%')
            template(v-else)
              .row.introduccion.my-5
                h3 NO HAY LIBROS EN ESTA CATEGORIA
    ParallaxCompartir
    Footer
</template>

<script>
import Header from './Header'
import Footer from './Footer'
import SubHeader from './SubHeader'
import ParallaxPortada1 from './ParallaxPortada1'
import ParallaxCompartir from './ParallaxCompartir'
export default {
  components:{Header,Footer,SubHeader,ParallaxPortada1,ParallaxCompartir},
  props:['id'],
  data(){
    return{
      categoria:null
    }
  },
  watch:{
    id(){
      this.obtenerCategoria();
    }
  },
  mounted(){
    this.obtenerCategoria();
  },
  methods:{
    obtenerCategoria(){
      fetch('http://localhost:3000/api/libros/categoria/'+this.id)
      .then(res=>res.json())
      .then(res=>{
        if(res.success && res.data!=null){
          this.categoria = res.data[0];
        }
      });
    }
  }
}
</script>

<style>

</style>
