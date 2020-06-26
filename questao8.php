<?php
        
        $n1 = filter_input(INPUT_POST, "valor");
        $n2 = filter_input(INPUT_POST, "valor2");
        $op = filter_input(INPUT_POST, "operacao");
        
        if($n1  && $n2){
        switch($op){
            case "soma":
            $resultado = ($n1 + $n2);
            break;
            case "subtrair":
            $resultado = ($n1 - $n2);
            break;
            case "multiplicar":
            $resultado = ($n1 * $n2);
            break;
            case "dividir":
            $resultado = ($n1 / $n2);
            break;
          }
        }
        
        ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Oitava Questão</title>
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
            <h1 class="m-0 text-dark">Questão 8</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 8</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>8. Crie um algoritmo em que o usuário escolha uma operação (soma, subtração, multiplicação ou
            divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em
            cada um dos números</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Questão 8</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calcular" id="form_calcular" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="valor" class="col-sm-2 col-form-label">Preço</label>
                        <div class="col-sm-8">
                        <input type="number" min="1" class="form-control" id="valor" name="valor" placeholder="Ex.: R$ 100" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="valor2" class="col-sm-2 col-form-label">Preço</label>
                        <div class="col-sm-8">
                        <input type="number" min="1" class="form-control" id="valor2" name="valor2" placeholder="Ex.: R$ 10" required>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Operação</label>
                        <select class ="custom-select" name="operacao">
                          <option value="soma">Somar</option>
                          <option value="subtrair">Subtrair</option>
                          <option value="multiplicar">Multiplicar</option>
                          <option value="dividir">Divisão</option>                          
                        </select>
                      </div>
                    </div>
                   
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Calcular</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>

            
            <p>Resultado: <?php echo $resultado;?></p>

            

            
           
    
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