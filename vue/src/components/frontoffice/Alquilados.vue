<template>
  <div>
    <Header></Header>
    <ParallaxPortada1></ParallaxPortada1>
    <SubHeader></SubHeader>
    <section class="bg-blanco py-1">
        <div class="container">
            <div class=" row  py-5">
                <h3 class="col-sm-12 color-primario negrita">Libros Alquilados</h3>
                <p class="col-sm-12">Esta es una lista de los libros que has adquirido.</p>
                <h5 class="col-sm-12 color-terciario">No olvides devolverlos en un buen estado.</h5>
                <table class="table col-sm-12 my-3">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Autor</th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Estado del libro alquilado">Estado</span></th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Fecha que empieza el alquiler">Inicio</span></th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Fecha que iremos a recoger el libro alquilado">Vencimiento</span></th>
                        <th scope="col"><span data-toggle="tooltip" data-placement="top" title="Estado del proceso de alquiler">Proceso</span></th>
                        <th scope="col"><span class="color-secundario" data-toggle="tooltip" data-placement="top" title="Precio por las semanas alquiladas">Precio</span> </th>
                        <th scope="col"><span class="color-terciario" data-toggle="tooltip" data-placement="top" title="Penalización por infringir las reglas de alquiler">Penalización</span></th>
                        <th scope="col"><span class="color-primario" data-toggle="tooltip" data-placement="top" title="Monto Final">Total</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Poesia Completa</td>
                        <td>Cesar Vallejos</td>
                        <td><i class="fas fa-star" data-toggle="tooltip" data-placement="top" title="Muy Bueno"></i></td>
                        <td>01/08/18</td>
                        <td>07/08/18</td>
                        <td><span class="badge badge-pill badge-primary">En Alquiler</span></td>
                        <td>s./ 25.00</td>
                        <td>s./ 0.00</td>
                        <td>s./ 25.00</td>
                        </tr>
                        
                    </tbody>
                    </table>
                
            </div>
        </div>
                
    </section>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from './Header'
import Footer from './Footer'
import SubHeader from './SubHeader'
import ParallaxPortada1 from './ParallaxPortada1'
export default {
  components:{Header,Footer,SubHeader,ParallaxPortada1}
}
</script>

<style>

</style>