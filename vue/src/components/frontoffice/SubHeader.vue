<template lang="pug">
  section.bg-primario.sticky-top
    .container
      .row.py-2
        nav.col-sm-12.navbar.navbar-expand-lg.navbar-dark
          a.navbar-brand(href='#') Daniel S Mendez
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
                  router-link.dropdown-item(to='/') Cerrar Sesión

</template>

<script>
export default {

}
</script>

<style>

</style>
