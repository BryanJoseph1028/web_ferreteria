<?php
    
    include("session.php");
    $query = mysqli_query($conn, "CALL seleccionar6Random()");
    $arrayProductos = array();
    $numrows = mysqli_num_rows($query);
    if ($numrows!=0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $arrayProductos[] = ["id" => $row['idProducto'],
                                "nombre" => $row['nombreProducto'],
                                "descripcion" => $row['descripcionProducto'],
                                "precio" => $row['precioProducto'],
                                "foto" => $row['fotoProducto']];
        } 
    }
    mysqli_next_result($conn);

    $carpetaImagenes = "../BD/Images/";
?>
<!DOCTYPE html> 
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ferretería Online</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/554db7ace5.js"></script>

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php //Para que sea el mismo toolbar en todas las páginas
        include("toolbar.php");
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div> -->
            <div class="col-md-1"></div>

            <div class="col-md-10">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/slide1.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/slide2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/slide3.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                <h2>Productos aleatorios</h1><br>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src=<?php echo "\"" . $carpetaImagenes . $arrayProductos[0]["foto"] . "\""; ?> alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php 
                                    echo "₡" . $arrayProductos[0]["precio"]; 
                                ?></h4><br>
                                <h4><a href="#"><?php 
                                    echo $arrayProductos[0]["nombre"]; 
                                ?></a></h4>
                                <p><?php 
                                    echo $arrayProductos[0]["descripcion"]; 
                                ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src=<?php echo "\"" . $carpetaImagenes . $arrayProductos[1]["foto"] . "\""; ?> alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php 
                                    echo "₡" . $arrayProductos[1]["precio"]; 
                                ?></h4><br>
                                <h4><a href="#"><?php 
                                    echo $arrayProductos[1]["nombre"]; 
                                ?></a></h4>
                                <p><?php 
                                    echo $arrayProductos[1]["descripcion"]; 
                                ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src=<?php echo "\"" . $carpetaImagenes . $arrayProductos[2]["foto"] . "\""; ?> alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php 
                                    echo "₡" . $arrayProductos[2]["precio"]; 
                                ?></h4><br>
                                <h4><a href="#"><?php 
                                    echo $arrayProductos[2]["nombre"]; 
                                ?></a></h4>
                                <p><?php 
                                    echo $arrayProductos[2]["descripcion"]; 
                                ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src=<?php echo "\"" . $carpetaImagenes . $arrayProductos[3]["foto"] . "\""; ?> alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php 
                                    echo "₡" . $arrayProductos[3]["precio"]; 
                                ?></h4><br>
                                <h4><a href="#"><?php 
                                    echo $arrayProductos[3]["nombre"]; 
                                ?></a></h4>
                                <p><?php 
                                    echo $arrayProductos[3]["descripcion"]; 
                                ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src=<?php echo "\"" . $carpetaImagenes . $arrayProductos[4]["foto"] . "\""; ?> alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php 
                                    echo "₡" . $arrayProductos[4]["precio"]; 
                                ?></h4><br>
                                <h4><a href="#"><?php 
                                    echo $arrayProductos[4]["nombre"]; 
                                ?></a></h4>
                                <p><?php 
                                    echo $arrayProductos[4]["descripcion"]; 
                                ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src=<?php echo "\"" . $carpetaImagenes . $arrayProductos[5]["foto"] . "\""; ?> alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php 
                                    echo "₡" . $arrayProductos[5]["precio"]; 
                                ?></h4><br>
                                <h4><a href="#"><?php 
                                    echo $arrayProductos[5]["nombre"]; 
                                ?></a></h4>
                                <p><?php 
                                    echo $arrayProductos[5]["descripcion"]; 
                                ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">8 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-6">
                    <a href="#" data-toggle="modal" data-target="#loginEmpleado">
                    <i class="fa fa-user" aria-hidden="true"></i> Iniciar sesión (empleado)</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Ferretería Online 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <div class="portfolio-modal modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>Iniciar sesión</h2>
                                    <form role="form" action="login.php" method="POST" class="registration-form">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                                <label>Usuario</label>
                                                <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required data-validation-required-message="Por favor ingrese su usuario.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" id="contrasena" required data-validation-required-message="Por favor ingrese su contraseña.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="modal-footer text-center">
                                            <div class = "container">
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                                                    <input name = "submit" type = "submit" class="btn btn-primary" value = "Iniciar sesión">
                                                </div>  
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="loginEmpleado" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>Iniciar sesión (empleado)</h2>
                                    <form role="form" action="admin/login.php" method="POST" class="registration-form">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                                <label>Usuario</label>
                                                <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required data-validation-required-message="Por favor ingrese su usuario.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" id="contrasena" required data-validation-required-message="Por favor ingrese su contraseña.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="modal-footer text-center">
                                            <div class = "container">
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                                                    <input name = "submit" type = "submit" class="btn btn-primary" value = "Iniciar sesión">
                                                </div>  
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
