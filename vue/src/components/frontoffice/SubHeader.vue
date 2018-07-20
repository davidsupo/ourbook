<template lang="pug">
  section.bg-primario.sticky-top
    .container
      .row.py-2
        nav.col-sm-12.navbar.navbar-expand-lg.navbar-dark
          a.navbar-brand(href='#') {{user.nombres}}
          button.navbar-toggler(type='button', data-toggle='collapse', data-target='#navbarNavDropdown', aria-controls='navbarNavDropdown', aria-expanded='false', aria-label='Toggle navigation')
            span.navbar-toggler-icon
          #navbarNavDropdown.collapse.navbar-collapse
            ul.navbar-nav
              li.nav-item.active
                router-link.nav-link(to='/ingresando')
                  | Inicio 
                  span.sr-only (current)
              li.nav-item
                router-link.nav-link(to='/alquilados') Libros Alquilados
              li.nav-item
                router-link.nav-link(to='/compartir') Compartir
              li.nav-item
                router-link.nav-link(to='/compartidos') Libros Compartidos
              li.nav-item.dropdown
                a#navbarDropdownMenuLink.nav-link.dropdown-toggle(href='#', data-toggle='dropdown', aria-haspopup='true', aria-expanded='false')
                  | Mi cuenta
                .dropdown-menu(aria-labelledby='navbarDropdownMenuLink')
                  router-link.dropdown-item(to='/perfil') Datos de Perfil
                  router-link.dropdown-item(to='/perfil' v-if="user.tipo=='A'") Administración
                  .dropdown-item.cursor-pointer(@click="Logout()") Cerrar Sesión

</template>

<script>
export default {
  data(){
    return{
      user:null
    }
  },
  created(){
    this.user = localStorage.getItem("user-ourbook")
      ? JSON.parse(localStorage.getItem("user-ourbook"))
      : null;
  },
  methods:{
    Logout(){
      localStorage.removeItem('user-ourbook');
      this.$router.replace('/');
      window.location.reload();
    }
  }
}
</script>

<style>

</style>
