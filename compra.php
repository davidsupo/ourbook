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
                                <h2>Nombre del Libro</h2>
                                <h4>Nombre del Autor</h4>
                                <h4>Estado del libro: <span class="badge badge-pill badge-primary">Muy Bueno</span></h4>
                                
                                <h2 class="delgado">Precio de alquiler por semana: s/25.00</h2>
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
                                        <label for="persona">Fecha de Inicio</label>
                                        <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="correo">Número de semanas de alquiler</label>
                                        <select class="form-control">
                                            <option>1 semana</option>
                                            <option>2 semanas</option>
                                            <option>3 semanas</option>
                                            <option>4 semanas</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 py-3">
                                        <label for="persona">Fecha de Fin</label>
                                        <input class="form-control" id="disabledInput" type="text" placeholder="18/08/2018" disabled>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-12 py-3">
                                       <h2 class="delgado">Precio de alquiler total: s/.50.00</h2>
                                       
                                    </div>
                                    
                                    
                                    <div class="col-sm-12 col-md-12 py-3">
                                        <button type="submit" class="btn btn-success">Alquilar Libro</button>
                                    </div>
                                </form>
                                
                            </div>

                        </div>
                    </div>
                    
                </div>


            </div>
                    
        </section>

        <section class="bg-blanco py-1">
            <div class="container">
                <div class=" row d-flex justify-content-center my-3">
                    <div class="col-md-12">
                        <div class="row introduccion">

                            <div class="col-sm-12 col-md-12 mb-3">
                                <h1 class="delgado">Los más Populares</h1>
                                <div class="bg-primario mb-3" style="width:5%; height:3px;"></div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 my-2">
                                        <div class="card  border-0">
                                            <a class="card-body d-flex flex-column p-0" href="#" >
                                                <img src="https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_poesia-completa_cesar-vallejo_201806061823.png" class="img-fluid shadow rounded" alt="Responsive image" style="width:100%">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3 my-2">
                                        <div class="card  border-0">
                                            <a class="card-body d-flex flex-column p-0" href="#" >
                                                <img src="https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_los-increibles-2-la-novela_disney_201805312002.png" class="img-fluid shadow rounded" alt="Responsive image" style="width:100%">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3 my-2">
                                        <div class="card  border-0">
                                            <a class="card-body d-flex flex-column p-0" href="#" >
                                                <img src="https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_gamedonia-escuela-de-gamers-2_elrubius_201805311923.png" class="img-fluid shadow rounded" alt="Responsive image" style="width:100%">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3 my-2">
                                        <div class="card  border-0">
                                            <a class="card-body d-flex flex-column p-0" href="#" >
                                                <img src="https://planetadelibrospe5.cdnstatics.com/usuaris/libros/fotos/275/tam_1/portada_jaque-mate-al-amor_rosa-maria-cifuentes-castaneda_201806060049.png" class="img-fluid shadow rounded" alt="Responsive image" style="width:100%">
                                            </a>
                                        </div>
                                    </div>

                                    

                                    

                                    
                                </div>  
                            </div>  
                        </div>
                        
                    </div>
                    <a href="#"  class="btn btn-outline-danger px-5">Ver más</a>
                </div>
                
            </div>
                    
        </section>
        
        <section class="bg-oscuro py-1">
            <div class="container">
                <div class=" row d-flex justify-content-center my-3">
                    <div class="col-md-12">
                        <div class="row introduccion">

                            <div class="col-sm-12 col-md-12 mb-3">
                                <h1 class="delgado">Novedades</h1>
                                <div class="bg-primario mb-3" style="width:5%; height:3px;"></div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 my-2">
                                        <div class="card  border-0">
                                            <a class="card-body d-flex flex-column p-0" href="#" >
                                                <img src="https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_poesia-completa_cesar-vallejo_201806061823.png" class="img-fluid shadow rounded" alt="Responsive image" style="width:100%">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3 my-2">
                                        <div class="card  border-0">
                                            <a class="card-body d-flex flex-column p-0" href="#" >
                                                <img src="https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_los-increibles-2-la-novela_disney_201805312002.png" class="img-fluid shadow rounded" alt="Responsive image" style="width:100%">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3 my-2">
                                        <div class="card  border-0">
                                            <a class="card-body d-flex flex-column p-0" href="#" >
                                                <img src="https://planetadelibrospe4.cdnstatics.com/usuaris/libros/fotos/274/tam_1/portada_gamedonia-escuela-de-gamers-2_elrubius_201805311923.png" class="img-fluid shadow rounded" alt="Responsive image" style="width:100%">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3 my-2">
                                        <div class="card  border-0">
                                            <a class="card-body d-flex flex-column p-0" href="#" >
                                                <img src="https://planetadelibrospe5.cdnstatics.com/usuaris/libros/fotos/275/tam_1/portada_jaque-mate-al-amor_rosa-maria-cifuentes-castaneda_201806060049.png" class="img-fluid shadow rounded" alt="Responsive image" style="width:100%">
                                            </a>
                                        </div>
                                    </div>

                                    

                                    

                                    
                                </div>  
                            </div>  
                        </div>
                        
                    </div>
                    <a href="#"  class="btn btn-outline-danger px-5">Ver más</a>
                </div>
                
            </div>
                    
        </section>


        <div class="parallax-prestar d-flex align-items-stretch">
                <div class="bg-transparente-oscuro " style="width:100%;">
                    <div class="container d-flex align-items-stretch" style="width:100%; height:100%;">
                        <div class="row d-flex justify-content-center align-self-center " style="width:100%;">
                            <div class="col-sm-8  d-flex align-items-center">
                                <div class="justify-content-center ">
                                    <h1 class="col  text-white negrita ">Tambien puedes poner a alquiler tus libros</h1>
                                    <h4 class="col  text-white delgado">Comparte y recibe ganancias.</h4>
                                    <a href="#" class="btn btn-success ml-2 px-4">Comparte aquí</a>
                                </div>
                            </div>
                            <div class="col-sm-4 ">

                            </div>
                        </div>
                    </div>
                </div>
        </div>

<?php include 'footer.php';?>