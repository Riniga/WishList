<? 
    #include("../../xampp/langsettings.php");
    session_start();
    if($_SESSION['loggedin'] == TRUE) { header('location: wishList.php'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Privat önskelistaapplikation för oss att att få möjlghet att enbart köpa nödvändiga saker till varandra.">
    <title>Julklappsönskelistan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" >
    <link rel="stylesheet" href="assets/styles/site.css" media="screen">
</head>
<body>
    <main role="main">

        <div class="jumbotron">
            <div class="container">
                <div class="page-header col-sm-10">
                    <h1 class="display-2">Julklapp</h1>
                    <p>för Nisses-Gagnér m.fl.</p>
                </div>
            </div>
        </div>

        <div class="container" id="Login">
            <h2>Inloggning</h2>

            <form  action=validate.php method=post>
                <div class="row">
                    <label for="name" class="col-md-2 col-xs-4 ">Användarnamn:</label>
                    <input class="col-md-2 col-xs-4" type="text" size=30 name="namn" id="name" value=superman<?=$_SESSION['username'] ?>>
                </div>
                <div class="row">
                    <label for="pass"  class="col-md-2 col-xs-4">Lösenord:</label>
                    <input class="col-md-2 col-xs-4" type="password" size=30 name="pass" id="pass" value="b252bdb8">
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-8"> 
                        <div class="pull-right"> 
                            <input type="submit" value="Logga in" />
                            <a href="register.php"> Registrera</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <footer class="footer" >
            <div class="container">
                Julklappsönskelistan 2018
            </div>
        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
</body>
</html>