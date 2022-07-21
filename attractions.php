<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.jpg">
    <title>Universal Studios Florida | Attractions</title>

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
    <link href="css/estilos_attractions.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <script src="js/funciones_atracciones.js"></script>
</head>

<body id="attractions" style="background-image: url(img/bg.png)" class="background">

    <?php include 'inc/navbar.php'; ?>

    <main role="main" class="container bg">

        <div class="row mt-5 mb-5">
            <div class="col-md-12 text-center text">ENTER YOUR AGE AND WE'LL RECCOMEND YOU AN ATTRACTION</div>
        </div>
        <div class="row">

            <div class="col-md-4 mt-5 pt-5 mb-5 pb-5 pl-5">

                <form>
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" placeholder="Your name"><br><br>
                    <label for="age">Age:</label><br>
                    <input type="number" id="age"><br><br>
                    <label for="attractions">Attractions:</label><br>
                    <select name="attractions" id="attraction" disabled>
                        <option value="1">Despicable Me Minion Mayhem</option>
                        <option value="2">E.T. Adventure</option>
                        <option value="3">Revenge of the Mummy</option>
                        <option value="4">MEN IN BLACK Alien Attack</option>
                        <option value="5">Hollywood Rip Ride Rockit</option>
                    </select><br><br>
                    <label for="level">Level:</label>
                    <input type="range" class="slider" id="range" min="1" max="5" value="1" disabled><br>
                    <label for="attractions">Danger:</label><br>
                    <input type="color" class="color" id="color" value="#ffffff" disabled><br><br>
                    <input type="button" class="buttonenter" id="button" value="Submit">
                </form>
            </div>

            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <div class="image1" id="image1"></div>
                <div class="image2" id="image2"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 mb-5 text2" id="empty">
                <div class="col-md-4 mb-5 pb-5 text2" id="extra"></div>

            </div>
        </div>
    </main>
    <?php include 'inc/footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
