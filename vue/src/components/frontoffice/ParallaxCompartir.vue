<template lang='pug'>
    .parallax-prestar.d-flex.align-items-stretch
      .bg-transparente-oscuro(style='width:100%;')
        .container.d-flex.align-items-stretch(style='width:100%; height:100%;')
          .row.d-flex.justify-content-center.align-self-center(style='width:100%;')
            .col-sm-8.d-flex.align-items-center
              .justify-content-center
                h1.col.text-white.negrita Tambien puedes poner a alquiler tus libros
                h4.col.text-white.delgado Comparte y recibe ganancias.
                template(v-if="user")
                  router-link.btn.btn-success.ml-2.px-4(to="/compartir") Comparte aquí
            .col-sm-4
</template>

<script>
export default {
  data(){
    return{
      user:null
    }
  },
  mounted(){
    this.user = localStorage.getItem('user-ourbook')? JSON.parse(localStorage.getItem('user-ourbook')) : null;
  }
}
</script>

<style>

</style>
