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

        <section class="bg-blanco py-2">
            <div class="container bg-oscuro">
                <div class=" row  py-5">
                    <div class="col-sm-12 col-md-3">
                        <img src="https://goo.gl/cYvfw8" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <div class="row">
                            <div class="col-sm-12 border-bottom">
                                <h2>Compatir tus libros es muy Sencillo</h2>
                                <h4>Obtendras ganancias por compartir con los demas</h4>
                            </div>
                            <div class="col-sm-12 py-3">
                                <h4>Verifica tus Datos</h4>
                                <form class="row">
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="ruc">Nombre</label>
                                        <input class="form-control" id="disabledInput" type="text" placeholder="Daniel" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="razon">Apellidos</label>
                                        <input class="form-control" id="disabledInput" type="text" placeholder="Sanchez Méndez" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="direccion">Dirección</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="ciudad">Ciudad</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Celular para contactarte</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Teléfono para contactarte</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Nombre del Libro</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Autor</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Editorial</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Precio de Compra</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Tiempo de uso</label>
                                        <select class="form-control">
                                            <option>0 - 6 meses</option>
                                            <option>6 - 12 meses</option>
                                            <option>12 meses a más</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="ruc">Porcentaje de Ganancia</label>
                                        <input class="form-control" id="disabledInput" type="text" placeholder="15%" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Fecha de Inicio</label>
                                        <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control">
                                    </div>

                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="correo">Número de meses a compartir</label>
                                        <select class="form-control">
                                            <option>1 mes</option>
                                            <option>2 meses</option>
                                            <option>3 meses</option>
                                            <option>4 meses</option>
                                            <option>5 meses</option>
                                            <option>6 meses</option>
                                            <option>7 meses</option>
                                            <option>8 meses</option>
                                            <option>9 meses</option>
                                            <option>10 meses</option>
                                            <option>11 meses</option>
                                            <option>12 meses</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Fecha de Fin</label>
                                        <input class="form-control" id="disabledInput" type="text" placeholder="18/08/2018" disabled>
                                    </div>          
                                    <div class="col-sm-12 col-md-12 py-3">
                                        <button type="submit" class="btn btn-success">Compatir Libro</button>
                                    </div>
                                </form>
                                
                            </div>

                        </div>
                    </div>
                    
                </div>


            </div>
                    
        </section>


<?php include 'footer.php';?>