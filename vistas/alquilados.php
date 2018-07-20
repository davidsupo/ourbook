<?php include 'header.php';?>

        <div class="parallax-ingresando d-flex align-items-stretch">
                <div class="bg-transparente-oscuro " style="width:100%;">
                    <div class="container d-flex align-items-stretch" style="width:100%; height:100%;">
                        <div class="row d-flex justify-content-center align-self-center " style="width:100%;">
                            <div class="col-sm-8  d-flex align-items-center">
                                <div class="justify-content-center ">
                                    <h1 class="col  text-white negrita ">Encuentra tus libros Favoritos</h1>
                                    <h4 class="col  text-white delgado">Una gran variedad para elegir y alquilar.</h4>
                                
                                </div>
                            </div>
                            <div class="col-sm-4 ">

                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <?php include 'sub-header.php';?>

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
                            <th scope="col">Estado</th>
                            <th scope="col">Inicio</th>
                            <th scope="col">Vencimiento</th>
                            <th scope="col">Proceso</th>
                            <th scope="col"><span class="color-secundario">Precio</span> </th>
                            <th scope="col"><span class="color-terciario">Penalización</span></th>
                            <th scope="col"><span class="color-primario">Total</span></th>
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


<?php include 'footer.php';?>