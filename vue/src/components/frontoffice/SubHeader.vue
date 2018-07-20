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
                a.nav-link(href='#')
                  | Inicio 
                  span.sr-only (current)
              li.nav-item
                a.nav-link(href='#') Libros Alquilados
              li.nav-item
                a.nav-link(href='#') Libros Compartidos
              li.nav-item.dropdown
                a#navbarDropdownMenuLink.nav-link.dropdown-toggle(href='#', data-toggle='dropdown', aria-haspopup='true', aria-expanded='false')
                  | Mi cuenta
                .dropdown-menu(aria-labelledby='navbarDropdownMenuLink')
                  a.dropdown-item(href='#') Datos de Perfil
                  a.dropdown-item(href='#') Cerrar Sesión

</template>

<script>
export default {

}
</script>

<style>

</style>
