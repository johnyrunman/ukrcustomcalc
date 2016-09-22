<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Прорахунок</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
<?php
$stavka = $_POST['tip'];
$kurs = $_POST['kurs'];
$cm3 = $_POST['cm3'];
$inv = $_POST['inv'];
$a = $kurs * $inv;
$b = ($kurs * $inv) * 0.1;
$c = $cm3 * $stavka * $kurs;
$d = (($kurs * $inv) + (($kurs * $inv) * 0.1) + ($cm3 * $stavka * $kurs)) * 0.2;
$e = $b + $c + $d;

echo " <legend>Розрахунок платежів</legend>


<form class='form-horizontal'>
<fieldset>


<div class='form-group'>
  <label class='col-md-4 control-label' for='kurs'>Курс</label>  
  <div class='col-md-4'>
  <input name='kurs' type='text' class='form-control input-md' value='". $kurs ."'> 
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='cm3'>Об'эм</label>  
  <div class='col-md-4'>
  <input name='cm3' type='text' class='form-control input-md' value='". $cm3 ."'> 
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='inv'>Інвойс</label>  
  <div class='col-md-4'>
  <input name='inv' type='text' class='form-control input-md' value='". $inv ."'> 
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='stavka'>Ставка</label>  
  <div class='col-md-4'>
  <input name='stavka' type='text' class='form-control input-md' value='". $stavka ."'> 
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='z'>Нараховується з:</label>  
  <div class='col-md-4'>
  <input name='z' type='text' class='form-control input-md' value='". round($a,2) ."'> 
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='10'>Збір 10% </label>  
  <div class='col-md-4'>
  <input name='10' type='text' class='form-control input-md' value='". round($b,2) ."'> 
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='akciz'>Акциз:</label>  
  <div class='col-md-4'>
  <input name='akciz' type='text' class='form-control input-md' value='". round($c,2) ."'> 
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='pdv'>ПДВ:</label>  
  <div class='col-md-4'>
  <input name='pdv' type='text' class='form-control input-md' value='". round($d,2) ."'> 
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='singlebutton'>До сплати</label>
  <div class='col-md-4'>
    <a id='do' href='#' class='btn btn-danger btn-block disabled'><i class='fa fa-shopping-cart'></i> " . " ". round($e,2) ." </a>   
  </div>
</div>
<div class='form-group'>
  <label class='col-md-4 control-label' for='singlebutton'></label>
  <div class='col-md-4'>
    <a href='../calc.php' class='btn btn-success btn-block'><i class='fa fa-arrow-left'></i> Повернутися назад</a>  
  </div>
</div>
</fieldset>
</form>
";
?>

		</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>

