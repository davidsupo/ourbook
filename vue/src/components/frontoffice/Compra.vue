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
                .col-sm-12.border-bottom
                  h2 {{libro.titulo}}
                  h4 {{libro.autor}}
                  h4
                    | Estado del libro: 
                    span.badge.badge-pill.badge-primary {{libro.estado}}
                  h2.delgado Precio de alquiler por semana: S/ {{libro.precio_semana}}
                .col-sm-12.py-3
                  h4 Verifica tus Datos
                  form.row(@submit.prevent="Alquilar()")
                    .col-sm-12.col-md-6.py-3
                      label(for='ruc') Nombre
                      input#disabledInput.form-control(v-model="user.nombres" disabled='')
                    .col-sm-12.col-md-6.py-3
                      label(for='razon') Apellidos
                      input#disabledInput.form-control(v-model="user.apellidos" disabled='')
                    .col-sm-12.col-md-6.py-3
                      label(for='direccion') Dirección
                      input.form-control(v-model="direccion" required)
                    .col-sm-12.col-md-6.py-3
                      label(for='ciudad') Ciudad
                      input.form-control(v-model="ciudad" required)
                    .col-sm-12.col-md-6.py-3
                      label(for='persona') Celular para contactarte
                      input.form-control(v-model="celular" required)
                    .col-sm-12.col-md-6.py-3
                      label(for='persona') Fecha de Inicio
                      input#date1.form-control(type="date" v-model="inicio" @change="Fechas()")
                    .col-sm-12.col-md-6.py-3
                      label(for='correo') Número de semanas de alquiler
                      select(v-model="semanas" @change="Fechas()").form-control
                        option(value="7") 1 semana
                        option(value="14") 2 semanas
                        option(value="21") 3 semanas
                        option(value="28") 4 semanas
                    .col-sm-12.col-md-6.py-3
                      label(for='persona') Fecha de Fin
                      input#date2.form-control(type="date"  disabled='')
                    .col-sm-12.col-md-12.py-3
                      h2.delgado Precio de alquiler total: {{Math.round(libro.precio_semana * (semanas/7) * 100)/100}} Soles
                    .col-sm-12.col-md-12.py-3
                      button.btn.btn-success(type='submit') Alquilar Libro
    
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
import Header from "./Header";
import Footer from "./Footer";
import SubHeader from "./SubHeader";
import ParallaxPortada1 from "./ParallaxPortada1";
import ParallaxCompartir from "./ParallaxCompartir";
export default {
  props: ["id"],
  components: {
    Header,
    Footer,
    SubHeader,
    ParallaxPortada1,
    ParallaxCompartir
  },
  data() {
    return {
      categorias: null,
      user: null,
      semanas: 7,
      direccion: "",
      ciudad: "",
      celular: "",
      inicio: "",
      fin: "",
      total: 0,
      libro:null,
    };
  },
  watch: {
    id() {}
  },
  created() {
    this.obtenerLibro();
    this.listarCategorias();
    this.user = JSON.parse(localStorage.getItem("user-ourbook"));
  },
  methods: {
    obtenerLibro(){
      fetch('http://localhost:3000/api/libros/ejemplar/'+this.id)
      .then(res=>res.json())
      .then(res=>{
        this.libro=res.data;
        if(this.libro.uso == 1){
          this.libro.estado= 'Muy Bueno'
          this.libro.precio_semana= Math.round(this.libro.precio * 0.08 * 100)/100
        }else if(this.libro.uso==2){
          this.libro.estado='Bueno' 
          this.libro.precio_semana= Math.round(this.libro.precio * 0.06 * 100)/100          
        }else{
          this.libro.estado='Regular' 
          this.libro.precio_semana= Math.round(this.libro.precio * 0.05 * 100)/100          
        }
      })
    },
    listarCategorias() {
      fetch("http://localhost:3000/api/libros")
        .then(res => res.json())
        .then(res => {
          this.categorias = res.data;
          this.categorias = this.categorias.slice(0, 4);
        });
    },
    Alquilar() {
      let data= {
        direccion:this.direccion,
        ciudad:this.ciudad,
        celular:this.celular,
        telefono:this.celular,
        fecha_inicio:this.inicio,
        fecha_fin:document.getElementById("date2").value,
        ejemplar:this.id,
        usuario:`${this.user.id}`,
        precio:`${Math.round(this.libro.precio_semana * (this.semanas/7) * 100)/100}`
      }
      fetch('http://localhost:3000/api/libro/alquilar',{
        method:'post',
        headers:{'Content-Type':'application/json'},
        body: JSON.stringify(data)
      })
      .then(res=>res.json())
      .then(res=>{
        if(res.success){
          this.$router.replace('/alquilados');
        }else{

        }
      });
    },
    Fechas() {
      var days = this.semanas;
      var date = new Date(this.inicio);
      date.setDate(date.getDate() + parseInt(days));
      document.getElementById("date2").valueAsDate = date;
    }
  }
};
</script>

<style>
</style>
