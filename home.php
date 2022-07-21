<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.jpg">
    <title>Universal Studios Florida | Home</title>

    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="css/estilos_home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="funciones_navbar.js"></script>
</head>

<body id="home" style="background-image: url(img/bg.png)" class="background">
    <?php include 'inc/navbar.php'; ?>

    <h1 class="title text-md-center mt-5 mb-5 pb-5">WELCOME TO UNIVERSAL STUDIOS FLORIDA!</h1>
    <main class="container container-fluid mb-5 pb-5">
        <div class="row container container-fluid mb-5 pb-5">
            <div class="col-md-4 grid pb-5">
            <article>
                <img src="img/cards_1.png" alt="Attractions photo">
                <div class="text">
                    <h3>Attractions</h3>
                    <p>Enjoy all kind of attractions and rides all over the park.</p>
                    <a style="text-decoration: none" href="attractions.html" class="text-center">
                        <p class="button text-center">LEARN MORE</p>
                    </a>
                </div>
            </article>
                </div>
            <div class="col-md-4 grid pb-5">
            <article>
                <img src="img/cards_2.png" alt="Hotels photo">
                <div class="text">
                    <h3>Hotels</h3>
                    <p>Rest on the best hotels and enjoy their incredible accomodations.</p>
                    <a style="text-decoration: none" href="packs.html" class="text-center">
                        <p class="button text-center">LEARN MORE</p>
                    </a>
                </div>
            </article>
            </div>
            <div class="col-md-4 grid pb-5">
            <article>
                <img src="img/cards_3.png" alt="Location photo">
                <div class="text">
                    <h3>Location</h3>
                    <p>Get to know the exact location and the park's map so you won't get lost.</p>
                    <a style="text-decoration: none" href="location.html" class="text-center">
                        <p class="button text-center">LEARN MORE</p>
                    </a>
                </div>
            </article>
        </div>
        </div>
        <a id="carrusel">
                <div class="row">
                <div class="col-md-12">
                    <h2 class="title2 text-md-center pt-5 mt-5">PHOTO GALLERY OF THE PARK</h2>
                    </div>
                </div>
                    

                
                <div class="container pt-5 pb-5 mb-5">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/carrusel1.jpg" alt="1" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="img/carrusel2.jpg" alt="2" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="img/carrusel3.jpg" alt="3" style="width:100%;">
                            </div>
                            <div class="item">
                                <img src="img/carrusel4.jpg" alt="4" style="width:100%;">
                            </div>
                        </div>

                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </a>
    </main>
    <?php include 'inc/footer.php'; ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/funciones_navbar.js"></script>


</body>

</html>
