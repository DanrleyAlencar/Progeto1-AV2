<?php
    
    $ano2015 = 1000;

    function pri_ano($ano2015){
      $ano2015 =  $ano2015;
      return $ano2015;
    }

    function ano2016($ano2015){
      $A2016 = ($ano2015*0.015);
      $resul2016 = ($ano2015+$A2016);
      return $resul2016;
    }

    function ano2017($resul2016){
      $perc  = (0.015*2);
      $valor = ( ($perc*1015) + 1015);
      return $valor;
    }

    function ano2018($ano2015){
      $perc = (0.03*2);
      $valor = ( ($perc*1045.45) + 1045.45);
      return $valor;
    }

    function ano2019($ano2015){
      $perc = (0.06*2);
      $valor = ( ($perc*1108.17) + 1108.17);
      return $valor;
    }

    function ano2020($ano2015){
      $perc = (0.12*2);
      $valor = ( ($perc*1241.15) + 1241.15);
      return $valor;
    }

    
    
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quinta Questão</title>
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
            <h1 class="m-0 text-dark">Questão 5</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 5</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                    <h2>5. Um funcionário recebe aumento salarial anualmente. Sabe-se que:<br>
            • Esse funcionário foi contratado em 2015, com salário inicial de R$1000,00;<br>
            • Em 2016 recebeu aumento de 1,5% sobre seu salário inicial;<br>
            • A partir de 2017 (inclusive), os aumentos salariais sempre corresponderam ao dobro do
            percentual do ano anterior. Exiba o salário atual desse funcionário.</h2>

                   
      </div>
<br><br>
            
            <?php echo "Salário inicial de R$".pri_ano($ano2015).".";?><br>
            <?php echo "Salário em 2016 de R$".ano2016($ano2015).".";?><br>
            <?php echo "Salário em 2017 de R$".ano2017($ano2015).".";?><br>
            <?php echo "Salário em 2018 de R$".ano2018($ano2015).".";?><br>
            <?php echo "Salário em 2019 de R$".ano2019($ano2015).".";?><br>
            <?php echo "Seu salário em 2020 É  R$".ano2020($ano2015).".";?><br>

            


            




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