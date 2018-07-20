<template lang="pug">
  header
    .container
      nav.navbar-expand-lg.navbar-dark.bg-dark.d-sm-none.d-md-block(style='background:transparent!important;')
        .row.align-items-center.nav-superior
          router-link.col-md-2(to='/')
            img.img-fluid.logo-nav(src='img/logo2.png', alt='')
          button.navbar-toggler(type='button', data-toggle='collapse', data-target='#navbarTogglerDemo02', aria-controls='navbarTogglerDemo02', aria-expanded='false', aria-label='Toggle navigation')
            span.navbar-toggler-icon
          .col-md-2
            .row.justify-content-end.collapse.navbar-collapse
              ul.navbar-nav.mr-auto.mt-2.mt-lg-0
                li.nav-item.active
                  a.nav-link(href='#', data-toggle='tooltip', data-placement='bottom', title='GitHub')
                    span.icon-github
                li.nav-item.active
                  a.nav-link(href='#', data-toggle='tooltip', data-placement='bottom', title='Fan Page')
                    span.icon-facebook
                li.nav-item.active
                  a.nav-link(href='#', data-toggle='tooltip', data-placement='bottom', title='Twitter')
                    span.icon-twitter
                li.nav-item.active
                  a.nav-link(href='#', data-toggle='tooltip', data-placement='bottom', title='Martin Ampuero Web')
                    span.icon-youtube
          .col-md-8
            #navbarTogglerDemo02.row.justify-content-end.collapse.navbar-collapse
              ul.col.menu-superior.navbar-nav.mr-auto.mt-2.mt-lg-0.justify-content-end
                li.nav-item.active
                  router-link(to="/").nav-link
                    | Home 
                    span.sr-only (current)
                li.nav-item.active
                  a.nav-link(href='servicios.php') Nuestros Libros
                li.nav-item.active
                  a.nav-link(href='clientes.php') Foro
                li.nav-item.active
                  a.nav-link(href='contacto.php') Contácto
</template>

<script>
export default {

}
</script>

<style>

</style>
