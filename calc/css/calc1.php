<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
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

echo " <div class='forma' style='float:left; margin-right:20px;'><form>
<fieldset>
  <legend>Розрахунки</legend>
  <label for='kurs'>Курс</label>
  <input type='text' name='kurs' size='30' value='". $kurs ."'/><br />
  <label for='cm3'>Об'эм</label>
  <input type='text' name='cm3' size='30' value='".$cm3."'/><br />
  <label for='inv'>Інвойс</label>
  <input type='text' name='inv' size='30' value='".$inv."'/><br />
  <label for='stavka'>Ставка</label>
  <input type='text' name='stavka' size='30' value='".$stavka."'/><br /><br>
  <label for='z'>Нараховується з:</label>
  <input type='text' name='z' size='30' value='".round($a,2)."'/><br />
  <label for='10'>Збір 10%:</label>
  <input type='text' name='10' size='30' value='".round($b,2)."'/><br />
  <label for='akciz'>Акциз:</label>
  <input type='text' name='akciz' size='30' value='".round($c,2)."'/><br />
  <label for='pdv'>ПДВ:</label>
  <input type='text' name='pdv' size='30' value='".round($d,2)."'/><br /><br><br>
  <b><label for='do'>До сплати:</label>
  <input style='font-weight:bold' type='text' name='do' size='30' value='".round($e,2)."'/><br /></b>

</fieldset>
</form>
</div>

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

