<html>
    <head>
        <title>Pagina Contacto</title>
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
                            <li><a class="dropdown-item" href="blank.php">Halo</a></li>
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
        <div class="container-fluid">
            <form action="contacto.php">
                <div class="mb-1 mt-2">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <label for="comment">Comentarios:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                <button type="button" class="btn btn-outline-primary mt-1 mb-1">Enviar</button>
            </form>
            <a href="index.php"> Volver</a><br>
        </div>   
        <!--Footer-->
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-4 p-3"></div>
                <div class="col-4 p-3" style="color:red"> <strong>Mend @ toyhouse !</strong></div>
                <div class="col-4 p-3"></div>
            </div>
        </div>
    </body>
</html>
