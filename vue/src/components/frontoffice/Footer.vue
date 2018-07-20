<template lang="pug">
  footer.row.bg-azul-oscuro
    .container.footer
      .row
        .col-sm-12.col-md-3
          img.col-sm-12.responsive-img(src='img/logo.png', alt='', style='margin: 20px; width: 80%;')
          .col-sm-12
            .row.justify-content-end.collapse.navbar-collapse
              ul.row.iconos-footer
                li.col-sm-3.nav-item.active
                  a.text-white(href='#', data-toggle='tooltip', data-placement='bottom', title='GitHub')
                    span.icon-github
                li.col-sm-3.nav-item.active
                  a.text-white(href='#', data-toggle='tooltip', data-placement='bottom', title='Fan Page')
                    span.icon-facebook
                li.col-sm-3.nav-item.active
                  a.text-white(href='#', data-toggle='tooltip', data-placement='bottom', title='Twitter')
                    span.icon-twitter
                li.col-sm-3.nav-item.active
                  a.text-white(href='#', data-toggle='tooltip', data-placement='bottom', title='Martin Ampuero Web')
                    span.icon-embed2
        .col-sm-12.col-md-4
          h4.text-white.negrita Nuestros Datos
          p.text-secondary(style='font-weight: 200;')
            span.icon-phone
            |  Central: (076) 368464 / (076) 343339
          p.text-secondary(style='font-weight: 200;')
            span.icon-whatsapp
            |  99880 5440
          p.text-secondary(style='font-weight: 200;')
            span.icon-mobile2
            |  RPM # 530581
          p.text-secondary(style='font-weight: 200;')
            span.icon-mobile2
            |  RPC:  95977 9998
          p.text-secondary(style='font-weight: 200;')
            span.icon-mail
            |  reservas@portaldelmarques.com
          p.text-secondary(style='font-weight: 200;')
            span.icon-home
            |  Jr. Del Comercio 644 - Cajamarca - Perú
        .col-sm-12.col-md-2
          h4.text-white.negrita Enlaces
          div(style='font-weight: 200;')
            a.color-enlace-oscuros(href='') Home
          div(style='font-weight: 200;')
            a.color-enlace-oscuros(href='') Nosotros
          div(style='font-weight: 200;')
            a.color-enlace-oscuros(href='') Nuestros Servicios
          div(style='font-weight: 200;')
            a.color-enlace-oscuros(href='') Nuestros Clientes
          div(style='font-weight: 200;')
            a.color-enlace-oscuros(href='') Contácto
        .col-sm-12.col-md-3
          h4.text-white.negrita Consultas
          form
            .form-group
              label.color-oscuro(for='exampleInputEmail1') Correo Electrónico
              input#exampleInputEmail1.form-control(type='email', aria-describedby='emailHelp', placeholder='Email')
              small#emailHelp.form-text.text-muted Nos pondremos en contácto
            button.btn.btn-primary(type='submit') Enviar
    .container
      .row.py-3
        span.col-sm-6.text-secondary Copyright © 2017 All Rights Reserved
        a.col-sm-6.text-right.grey-text.text-lighten-4.right(href='#') Inicio
</template>

<script>
export default {

}
</script>

<style>

</style>
