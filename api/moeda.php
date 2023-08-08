<?php

$num1 = 0 ;
$calcular = 'be';
$resultado = 0;
$simbolo1 = '';
$simbolo2 = '';
if(isset($_GET['num1'],$_GET['calcular'])){
    $num1 = $_GET['num1'];
    $calcular = $_GET['calcular'];
}
    switch($calcular){
        case 'be':
            $resultado = number_format(($num1/5.30),2);
            $simbolo1 = 'Reais';
            $simbolo2 = 'Euros';
                break;
        case 'bu':
            $resultado = number_format(($num1/4.98),2);
            $simbolo1 = 'Reais';
            $simbolo2 = 'Dollares';
                break;
        case 'eb':
            $resultado = number_format(($num1*5.30),2);
            $simbolo1 = 'Euros';
            $simbolo2 = 'Reais';
                break;
        case 'eu':
            $resultado = number_format(($num1/0.80),2);
            $simbolo1 = 'Euros';
            $simbolo2 = 'Dollares';
            break;
        case 'ub':
            $resultado = number_format(($num1*4.98),2);
            $simbolo1 = 'Dollares';
            $simbolo2 = 'Reais';
                break;
        case 'ue':
            $resultado = number_format(($num1*0.80),2);
            $simbolo1 = 'Dollares';
            $simbolo2 = 'Euros';
                break;
    }

?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Calculator</title>
    <body>
        <?php $calcular ?>
        <!-- Logo -->
        <nav class="navbar navbar-expand-md navbar-dark bg-info">
            <a href="../Index.html" class="navbar-brand">
                <img src="../calculator/564429.png" style="width: 50px;">
                

            <p class="navbar-brand pt-4">CALCULATOR</p>
            </a>
        <!-- Hamburguer -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav -->
            <div class="collapse navbar-collapse mr-5" id="nav-target1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../Index.html" class="nav-link text-light">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="calculator.php" class="nav-link text-light">Calculadora</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Conversor</a>
                            <div class="dropdown-menu navbar-dark bg-info ">
                                <a href="moeda.php" class="dropdown-item bg-info text-light">Moeda</a>
                                <a href="time.php" class="dropdown-item bg-info text-light">Massa</a>
                                <a href="weather.php" class="dropdown-item bg-info text-light">Temperatura</a>
                                <a href="weight.php" class="dropdown-item bg-info text-light">Tempo</a>
                            </div>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="mt-5">
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="row justify-content-md-center">
                                <div></div>
                                <div class="col-12 mt-5">
                                    <h1> <?php echo $num1.' '. $simbolo1?></h1>
                                    <h1 class="display-4"> <?php echo $resultado.' '. $simbolo2 ?> </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 mt-4">
                            <div class="row">
                            <div class="col-4">
                                    <label for="num" class="form-label">Insira o primeiro valor</label>
                                    <input name="num1" required type="number" step="0.1" class="form-control col-10" id="num">
                                </div>
                                <div class="col-7">
                                    <label for="sel" class="form-label">Escolhar o metodo de conversão</label>
                                    <select class="form-control col-12" name="calcular" id="sel" required>
                                        <option value="be">BRL(Real) -> EUR(Euro)</option>
                                        <option value="bu">BRL(Real) -> USD(Dollar)</option>
                                        <option value="eb">EUR(Euro) -> BRL(Real)</option>
                                        <option value="eu">EUR(Euro) -> USD(Dollar)</option>
                                        <option value="ub">USD(Dollar) -> BRL(Real) </option>
                                        <option value="ue">USD(Dollar) -> EUR(Euro) </option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4">
                                        <div>
                                            <button type="submit" class="col-10 mt-2 mb-4 btn btn-primary">Calcular</button>
                                        </div>
                                        <div name="resultado" class="form-control col-10"><?php echo $resultado ?></div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
