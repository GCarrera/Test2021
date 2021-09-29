<!doctype html>
<html lang="en">
    <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="Boostrap/img/Imagen01.png">
    <link rel="stylesheet" type="text/css" href="Boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Boostrap/css/Styles01.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Patria</title>

    </head>
    <body>
        <header>
            <nav class="navbar bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="Boostrap/img/Imagen01.png" 
                        width="80px" 
                        height="80px">
                        <span class="titulo">PATRIA</span>
                    </a>
                    <a class="nav-link text-danger" href="#">PERSONA</a>
                    <a class="nav-link text-danger" href="#">INSTITUCION</a>
                    <a class="nav-link text-danger" href="#">ADMINISTRACION PUBLICA</a>
                    <button class="btn btn-lg boton text-light" type="submit">  Registro
                    </button>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div id="carouselExampleCaptions" 
                class="carousel slide" 
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" 
                        data-bs-target="#carouselExampleCaptions" 
                        data-bs-slide-to="0" 
                        class="active" 
                        aria-current="true" 
                        aria-label="Slide 1">                        
                    </button>
                    <button type="button" 
                        data-bs-target="#carouselExampleCaptions" 
                        data-bs-slide-to="1" 
                        aria-label="Slide 2">
                    </button>
                    <button type="button" 
                        data-bs-target="#carouselExampleCaptions" 
                        data-bs-slide-to="2" 
                        aria-label="Slide 3">
                    </button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Boostrap/img/Prueba01.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Boostrap/img/Prueba02.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Boostrap/img/Prueba03.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" 
                    type="button" 
                    data-bs-target="#carouselExampleCaptions"  
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next"  
                        type="button" 
                        data-bs-target="#carouselExampleCaptions" 
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        

    <script src="Boostrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>