<template lang="pug">
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
</template>

<script>
export default {
  data(){
    return{
      categorias: null,
    }
  },
  mounted(){
    this.listarCategorias();
  },
  methods:{
    listarCategorias() {
      fetch("http://localhost:3000/api/libros")
        .then(res => res.json())
        .then(res => {
          this.categorias = res.data;
          this.categorias = this.categorias.slice(0, 4);
        });
    },
  }
}
</script>

<style>

</style>
