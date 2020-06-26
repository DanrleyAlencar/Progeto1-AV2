<?php
    
    $pri_val   =   $_POST['val1'];
    $seg_val   =   $_POST['val2'];
    $ter_val   =   $_POST['val3'];;
    

    function calcular($pri_val,$seg_val,$ter_val){
        $soma = ($pri_val+$seg_val+$ter_val);
        $media = ($soma/3);
        return $media;
    }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>segunda Questão</title>
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
            <h1 class="m-0 text-dark">Questão 2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>2. Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na
            variável média e exiba para o usuário o resultado.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Questão 2</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calcular" id="form_calcular" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="distancia" class="col-sm-2 col-form-label">Valor 1</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="val1" name="val1" placeholder="Ex.: 80" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">Valor 2</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="val2" name="val2" placeholder="Ex.: 20" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">Valor 3</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="val3" name="val3" placeholder="Ex.: 50" required>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Calcular</button>
                    <button type="reset" class="btn btn-default float-right">Cancelar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <br><br>
            <?php echo "---------------------"?><br>
            <?php echo ('A Média É: '.calcular($pri_val,$seg_val,$ter_val,2).'.');?><br>
            <?php echo "---------------------"?><br>

    
    
    
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