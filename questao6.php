<?php
    
    $preco    =   $_POST['valor'];
    $item     =   $_POST['produto'];;

   function Produto($item){
        $pro = $item;
        return $pro;
    }

    function pre($preco){
        $val_pro = $preco;
        return $val_pro;
    }

    function calcular($preco){
        $val_desconto = ($preco*0.07);
        $val_final = ($preco-$val_desconto);
        return $val_final;
    }

    function cal($preco){
        $val_desconto = ($preco*0.07);
        return $val_desconto;
    }
    
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sexta Questão</title>
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
            <h1 class="m-0 text-dark">Questão 6</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Questão 6</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>6. Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo
            para o usuário o valor original, o valor do desconto e o valor com o desconto.</h2>
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Questão 6</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_calcular" id="form_calcular" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="distancia" class="col-sm-2 col-form-label">Produto</label>
                        <div class="col-sm-10">
                        <input type="text" min="1" class="form-control" id="produto" name="produto" placeholder="Informe o Produto" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">Preço</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="valor" name="valor" placeholder="Informe o Valor" required>
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

            <?php echo "Produto : ".Produto($item).".";?><br>
            <?php echo "Valor do Produto : R$ ".pre($preco).".";?><br>
            <?php echo "Valor com Desconto: R$ ".calcular($preco).".";?><br>
            <?php echo "Teve Desconto de : R$ ".cal($preco).".";?>

            
           
    
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