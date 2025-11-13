<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🎬</text></svg>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>MovieMind</title>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div style="width: 60px;">
                    <img src="{{asset('images/portada.jpg')}}" alt="" width="40px">
                </div>
                <a class="navbar-brand" href="#">MovieMind</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Favoritos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">+ Vistos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Estrenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">TV Directo</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Acción</a></li>
                                <li><a class="dropdown-item" href="#">Animación</a></li>
                                <li><a class="dropdown-item" href="#">Aventuras</a></li>
                                <li><a class="dropdown-item" href="#">Ciencia ficción</a></li>
                                <li><a class="dropdown-item" href="#">Comedia</a></li>
                                <li><a class="dropdown-item" href="#">Crimen</a></li>
                                <li><a class="dropdown-item" href="#">Cristianos</a></li>
                                <li><a class="dropdown-item" href="#">Documentales</a></li>
                                <li><a class="dropdown-item" href="#">Drama</a></li>
                                <li><a class="dropdown-item" href="#">Educativo</a></li>
                                <li><a class="dropdown-item" href="#">Historia</a></li>
                            </ul>
                        </li>
                    </ul>
                <div class="d-flex">
                    <button class="btn btn-outline-success" type="submit">Iniciar Sesión</button>
                </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <center>
                <h1 class="michroma-regular">MovieMind</h1>
                <button class="btn-facebook btn btn-primary"><i class="bi bi-spotify"></i></button>

                <form class="d-flex sform">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </center>
        </div>

        <div class="container">
            <div class="row">
                <section class="regular slider">
                    <div>
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.gHXLbyOVA8Nu4Z44JjVjCgHaFj%3Fpid%3DApi&f=1&ipt=29f4443b79cd92968aea5b7649dbdb3de4e1fe369eb6a58e33811be958eb3508&ipo=images">
                    </div>
                    <div>
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.essxtZ4rgK1yApIAjQLdmAHaEK%3Fpid%3DApi&f=1&ipt=25f94cd83b242e264ea272271bdac9701a3e943652c0328edf3ef662962ae981&ipo=images">
                    </div>
                    <div>
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.oF4Dy1I0_Rw86gk0LtmPUQHaE7%3Fpid%3DApi&f=1&ipt=d78421a3117268cb8a2f89d2f9b9ee7a40eec792bbe7da75a50ec6107bd8541a&ipo=images">
                    </div>
                    <div>
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.gHXLbyOVA8Nu4Z44JjVjCgHaFj%3Fpid%3DApi&f=1&ipt=29f4443b79cd92968aea5b7649dbdb3de4e1fe369eb6a58e33811be958eb3508&ipo=images">
                    </div>
                    <div>
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.essxtZ4rgK1yApIAjQLdmAHaEK%3Fpid%3DApi&f=1&ipt=25f94cd83b242e264ea272271bdac9701a3e943652c0328edf3ef662962ae981&ipo=images">
                    </div>
                    <div>
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.oF4Dy1I0_Rw86gk0LtmPUQHaE7%3Fpid%3DApi&f=1&ipt=d78421a3117268cb8a2f89d2f9b9ee7a40eec792bbe7da75a50ec6107bd8541a&ipo=images">
                    </div>
                </section>
            </div>
        </div>

    <script src="https://kenwheeler.github.io/slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {
        
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>