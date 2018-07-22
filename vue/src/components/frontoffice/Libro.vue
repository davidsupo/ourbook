<template lang="pug">
  div
    Header
    ParallaxPortada1
    SubHeader
    section.bg-blanco.py-2
      template(v-if="libro")
        .container.bg-oscuro
          .row.py-5
            .col-sm-12.col-md-3
              img.img-fluid(src='https://goo.gl/cYvfw8', alt='Responsive image')
            .col-sm-12.col-md-9
              .row
                .col-sm-12
                  h2 {{libro.titulo}}
                  h4 {{libro.autor}}
                .col-sm-12
                  h6.delgado Editorial: {{libro.editorial}}
                  h6.delgado Categoría: {{libro.categorias.substr(0,libro.categorias.length-1)}}
                  h6.delgado Fecha de Publicación: {{libro.fecha_publicacion.substr(0,10)}}
                .col-sm-12
                  h6 Sipnosis
                  p
                    | {{libro.sinopsis}}
          .row.py-5
            .col-sm-12.col-md-3.bg-terciario
              .row
                .col-sm-12.py-3.altura-igual
                  h3.text-white.text-center.negrita Estados del Libro a alquilar
                  p.text-white.text-center Para alquilar, primero elije una de estas tres opciónes
            .col-sm-12.col-md-9.bg-secundario.px-0
              .row
                router-link.col-sm-12.col-md-4.py-3.altura-igual.boton-estados(:to="{path:'/compra/'+libro.muybueno.id_ejemplar}" v-if="libro.muybuenos.length>0")
                  h3.text-white.text-center.delgado
                    i.fas.fa-star
                    i.fas.fa-star
                    br
                    | Muy Bueno
                  p.text-white.text-center Son libros recien comprados y con un tiempo de uso maximo de 6 meses
                router-link.col-sm-12.col-md-4.py-3.border-left.altura-igual.boton-estados(:to="{path:'/compra/'+libro.bueno.id_ejemplar}" v-if="libro.buenos.length>0")
                  h3.text-white.text-center.delgado
                    i.fas.fa-star-half-alt
                    br
                    | Bueno
                  p.text-white.text-center Son libros con un tiempo de uso maximo de 12 meses
                router-link.col-sm-12.col-md-4.py-3.border-left.altura-igual.boton-estados(:to="{path:'/compra/'+libro.regular.id_ejemplar}" v-if="libro.regulares.length>0")
                  h3.text-white.text-center.delgado
                    i.fas.fa-star-half
                    br
                    | Regular
                  p.text-white.text-center Son libros con un tiempo de uso mayor de 12 meses
      template(v-else)
        .container.bg-oscuro
          .row.py-5
            h3.text-center NO SE ENCONTRO EL LIBRO
    section.bg-blanco.py-1
      .container
        .row.d-flex.justify-content-center.my-3(v-for="categoria in categorias")
          .col-md-12
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
    ParallaxCompartir
    Footer
  
</template>

<script>
import Header from './Header'
import Footer from './Footer'
import SubHeader from './SubHeader'
// import ListadoCategoria from './ListadoCategoria'
import ParallaxPortada1 from './ParallaxPortada1'
import ParallaxCompartir from './ParallaxCompartir'
export default {
  props:['id'],
  components:{Header,Footer,SubHeader,ParallaxPortada1,ParallaxCompartir},
  data(){
    return{
      libro:null,
      categorias:null,
    }
  },
  watch:{
    id(){
      this.listarCategorias();
    }
  },
  mounted(){
    this.listarCategorias();
  },
  methods:{
    listarCategorias(){
      fetch('http://localhost:3000/api/libros')
      .then(res=>res.json())
      .then(res=>{
        this.categorias=res.data;
        let textCategorias = '';
        this.categorias.map(cat=>{
          cat.libros.map(el=>{
            if(el.id_libro==this.id){
              this.libro=el;
              textCategorias += `${cat.categoria},`
            }
          })
        })
        if(this.libro!=null){
          this.libro.categorias = textCategorias;
          let muyBueno =[],
              bueno=[],
              regulares=[];
          this.libro.ejemplares.map(el=>{
            if(el.uso==1){
              muyBueno.push(el)
            }else if(el.uso==2){
              bueno.push(el);
            }else{
              regulares.push(el);
            }
          })
          this.libro.muybuenos = muyBueno;
          this.libro.muybueno = muyBueno[Math.floor(Math.random() * muyBueno.length)]
          this.libro.buenos = bueno;
          this.libro.bueno = bueno[Math.floor(Math.random() * bueno.length)]
          this.libro.regulares = regulares;
          this.libro.regular = regulares[Math.floor(Math.random() * regulares.length)]
        }
        this.categorias = this.categorias.slice(0,4);
      })
    }
  }
}
</script>

<style>

</style>
