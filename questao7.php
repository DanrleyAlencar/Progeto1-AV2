<?php
    
    $num1    =   $_POST['numero1'];
    $num2    =   $_POST['numero2'];
    $j = 0;
    $soma = 0;

   for($i=1;$i<=100;$i++){
     $a[$i-1] = rand($num1,$num2);
   }

   for($i=1;$i<=100;$i++){

     if(($a[$i-1]%2) == 0){

        if($j <=9){
          $b[$j] = $a[$i-1];
          $soma = $soma + $b[$j];
        }
        $j++;
     }
   }
  
    
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sétima Questão</title>
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
            <h1 class="m-0 text-dark">Questão 7</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 7</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>7. Faça um algoritmo leia 100 números randômicos, calcule e mostre a soma dos 10 primeiros
            números pares. </h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Questão 7</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calcular" id="form_calcular" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="distancia" class="col-sm-2 col-form-label">Numero 1</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="numero1" name="numero1" placeholder="Informe um número Ex.: 1" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">Numero 2</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="numero2" name="numero2" placeholder="Informe um número Ex.: 100" required>
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
            
            <?php

             var_export($a);
             echo"<br>";
             echo"<br>";
             var_export ($b);
             echo"<br>";
             echo"<br>";
             echo"Soma É = ".$soma;
             echo"<br>";
            

            ?>

            
            
           
    
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