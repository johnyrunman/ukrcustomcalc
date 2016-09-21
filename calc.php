<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="calc/css/font-awesome.css">
  <title>Калькулятор</title>

  <!-- Bootstrap -->
  <link href="calc/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="calc/css/style.css">

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
        <div class="tabs">
          <ul class="nav nav-tabs" >
            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-calculator"></i> Калькулятор</a></li>
            <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-car"></i> Новий закон</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab-1">
              <br>
              <form action='calc/calc1.php' method='POST' name='calc' class="form-horizontal">
                <fieldset>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="tip">Тип автомобіля</label>
                    <div class="col-md-4">
                      <select id="tip" name="tip" class="form-control">
                        <optgroup label="Вантажні автомобілі">
                          <option value="0.02">до 5 тон менше 5 років</option>
                          <option value="0.8">до 5 тон від 5 до 8 років</option>
                          <option value="1">до 5 тон понад 8 років</option>

                          <option value="0.026">від 5 до 20 тон менше 5 років</option>
                          <option value="1.04">від 5 до 20 тон від 5 до 8 років</option>
                          <option value="1.3">від 5 до 20 тон понад 8 років</option>

                          <option value="0.033">понад 20 тон менше 5 років</option>
                          <option value="1.32">понад 20 тон від 5 до 8 років</option>
                          <option value="1.65">понад 20 тон понад 8 років</option>
                        </optgroup>
                        <optgroup label="Легкові дизель">
                          <option value="1.367">до 1,5 менше 5 років</option>
                          <option value="1.761">до 1,5 більше 5 років</option>
                          <option value="1.923">з 1,5 по 2,5 менше 5 років</option>
                          <option value="2.441">з 1,5 по 2,5 більше 5 років</option>
                          <option value="2.779">понад 2,5 менше 5 років</option>
                          <option value="4.715">понад 2,5 більше 5 років</option>
                        </optgroup>
                        <optgroup label="Легкові бензин">
                          <option value="1.094">до 1,0 менше 5 років</option>
                          <option value="1.438">до 1,0 більше 5 років</option>
                          <option value="1.367">від 1,0 до 1,5 менше 5 років</option>
                          <option value="1.761">від 1,0 до 1,5 більше 5 років</option>
                          <option value="1.643">від 1,5 до 2,2 менше 5 років</option>
                          <option value="2.441">від 1,5 до 2,2 більше 5 років</option>
                          <option value="2.213">від 2,2 до 3,0 менше 5 років</option>
                          <option value="4.985">від 2,2 до 3,0 більше 5 років</option>
                          <option value="3.329">понад 3,0 менше 5 років</option>
                          <option value="4.985">понад 3,0 більше 5 років</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="kurs">Курс євро</label>  
                    <div class="col-md-4">
                      <input id="kurs" name="kurs" type="text" placeholder="" class="form-control input-md">

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="cm3">Об'єм</label>  
                    <div class="col-md-4">
                      <input id="cm3" name="cm3" type="text" placeholder="" class="form-control input-md">

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="inv">Інвойс</label>  
                    <div class="col-md-4">
                      <input id="inv" name="inv" type="text" placeholder="" class="form-control input-md">

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                      <button id="submit" type="submit" class="btn btn-success">Рахувати</button>
                    </div>
                  </div>


                </fieldset>
              </form>
            </div>
            <div class="tab-pane fade" id="tab-2">
              <br>
              <form action='calc/calc1.php' method='POST' name='calc' class="form-horizontal">
                <fieldset>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="tip">Тип автомобіля</label>
                    <div class="col-md-4">
                      <select id="tip" name="tip" class="form-control">
                        <optgroup label="Легкові дизель">
                          <option value="0.103">до 1.5 нові</option>
                          <option value="0.103">до 1.5 менше 5 років</option>
                          <option value="0.103">до 1.5 понад 5 років</option>
                        </optgroup>
                        <optgroup label="------------">
                          <option value="0.327">від 1.5 до 2.5 нові</option>
                          <option value="0.327">від 1.5 до 2.5 менше 5 років</option>
                          <option value="0.327">від 1.5 до 2.5 понад 5 років</option>
                        </optgroup>
                        <optgroup label="------------">  
                          <option value="2.209">понад 2.5 нові</option>
                          <option value="2.209">понад 2.5 менше 5 років</option>
                          <option value="2.209">понад 2.5 понад 5 років</option>
                        </optgroup>

                        <optgroup label="Легкові бензин">
                          <option value="0.102">до 1.0 нові</option>
                          <option value="0.102">до 1.0 менше 5 років</option>
                          <option value="0.102">до 1.0 понад 5 років</option>
                        </optgroup>
                        <optgroup label="------------">
                          <option value="0.063">від 1.0 до 1.5 нові</option>
                          <option value="0.063">від 1.0 до 1.5 менше 5 років</option>
                          <option value="0.063">від 1.0 до 1.5 понад 5 років</option>
                        </optgroup>
                        <optgroup label="------------">
                          <option value="0.267">від 1.5 до 2.2 нові</option>
                          <option value="0.267">від 1.5 до 2.2 менше 5 років</option>
                          <option value="0.267">від 1.5 до 2.2 понад 5 років</option>
                        </optgroup>
                        <optgroup label="------------">
                          <option value="0.276">від 2.2 до 3.0 нові</option>
                          <option value="0.276">від 2.2 до 3.0 менше 5 років</option>
                          <option value="0.276">від 2.2 до 3.0 понад 5 років</option>
                        </optgroup>
                        <optgroup label="------------">  
                          <option value="2.209">понад 3.0 нові</option>
                          <option value="2.209">понад 3.0 менше 5 років</option>
                          <option value="2.209">понад 3.0 понад 5 років</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="kurs">Курс євро</label>  
                    <div class="col-md-4">
                      <input id="kurs" name="kurs" type="text" placeholder="" class="form-control input-md">

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="cm3">Об'єм</label>  
                    <div class="col-md-4">
                      <input id="cm3" name="cm3" type="text" placeholder="" class="form-control input-md">

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="inv">Інвойс</label>  
                    <div class="col-md-4">
                      <input id="inv" name="inv" type="text" placeholder="" class="form-control input-md">

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                      <button id="submit" type="submit" class="btn btn-success">Рахувати</button>
                    </div>
                  </div>


                </fieldset>
              </form>
              <div class="col-sm-12">
                <p><img src="calc/img/poroh.jpg" alt="" class="img-responsive"></p>
              </div>





            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="calc/js/bootstrap.js"></script>
</body>
</html>

