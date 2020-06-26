<?php
    
    $um   =   $_POST['number1'];
    $dois   =   $_POST['number2'];;
    

    function calcular($um_num,$dois_num){
        $resultado = ($um_num+$dois_num);
        $resultado_alt = ($resultado*$um_num);
        return $resultado_alt;
    }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Primeira Questão</title>
  <?php
    include "_includes/header.php";
    ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php
    include "_includes/menuesq.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Questão 1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>1. Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Questão 1</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calcular" id="form_calcular" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="distancia" class="col-sm-2 col-form-label">Número 1</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="number1" name="number1" placeholder="Ex.: 80" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">Número 2</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="number2" name="number2" placeholder="Ex.: 55" required>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    <!--<button onclick="mediaA()" type="button" class="btn btn-primary">Calcular</button>-->

                    <button type="submit" class="btn btn-info">Calcular</button>
                    <button type="reset" class="btn btn-default float-right">Cancelar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>

            <?php echo "O Resultado É: ".calcular($um,$dois).".";?>
    
    
    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include "_includes/footer.php";
  ?>


</body>
</html>