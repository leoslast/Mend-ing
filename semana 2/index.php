<html>
    <head>
        <title>Pagina Principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Mend!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="mundost.php">Mundo Stickman</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Personajes</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="halo.php">Halo</a></li>
                                <li><a class="dropdown-item" href="blank.php">Toby</a></li>
                                <li><a class="dropdown-item" href="blank.php">Felix</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cameos.php">Cameos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>                       
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#myModal">Acceder</button>
            </div>
        </nav>
        <!--Container-->
        <div class="container-fluid mt-3" >
            <p style="text-align:center;"> Ermmm me concentre mas en la parte de cameos que el resto del sitio porque eso es lo que me da risa 
            y mis amigos son los mejores mwahahaha<br><br>Online me conocen como mend, por eso todo dice mend lol, tambien
            el rojo es mi color favorito, por eso los botones rojos<br><br>Ok el boton con dropdown solo funciona en index.php y no quiero
            arreglarlo por ahora, tal vez si descubro una forma de hacer el navbar sin necesidad de escribirlo cada vez por pagina xP</p>
        </div>
        <!--Footer-->
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-4 p-3"></div>
                <div class="col-4 p-3" style="color:red"> <strong>Mend @ toyhouse !</strong></div>
                <div class="col-4 p-3"></div>
            </div>
        </div>
        <!--Modal-->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        Ok tecnicamente el estilo de sitio que estoy haciendo no necesita el login pero añado esto para mostrar que lo hice
                        <form action="index.php">
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>                    
                    </div>
                    <!-- Modal footer -->
                </div>
            </div>
        </div>
    </body>
</html>
