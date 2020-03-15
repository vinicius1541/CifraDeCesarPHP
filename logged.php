<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php
include('verifyLogin.php');
?>

<div class="d-flex flex-row-reverse bd-highlight">
    <div class="p-2 bd-highlight">
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
    </div>
    <div class=" p-2 bd-highlight">
        <h2 class="usuario"><?php echo $_SESSION['usuario']; ?></h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <form class="form-signin" action="criptografar.php" method="POST">
                        <h5 class="card-title text-center">Cifra de Cesar</h5>
                        <div class="form-label-group">
                            <input name="cifra" type="text" id="cifraCesar" class="form-control" placeholder="Digite algo para codificar" autocomplete="off" required autofocus>
                            <label for="cifraCesar">Digite algo para codificar</label>
                        </div>
                        <button class="my-btn btn btn-lg btn-primary btn-block text-uppercase" type="submit">Criptografar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>