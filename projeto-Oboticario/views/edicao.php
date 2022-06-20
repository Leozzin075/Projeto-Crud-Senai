<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
  

<div class="container-fluid form-aluno">
<h1>Editar Produto</h1>
<form class="row g-3" method="post" action="">
  <div class="col-md-6">
    <label  class="form-label">Nome do Produto</label>
    <input type="text" class="form-control" name="nome" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Codigo do Produto</label>
    <input type="text" class="form-control" name="codigoBarra" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Quantidade</label>
    <input type="number" class="form-control" name="qntd" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Fornecedor</label>
    <input type="text" class="form-control" name="fornecedor" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Valor</label>
    <input type="number" class="form-control" name="valor" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Custo</label>
    <input type="number" class="form-control" name="custo" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
<?php
include "_scripts/functions.php";

if(!empty($_POST['valor'])){

  if(editar($_POST)){
    ?>
    <script language='javascript'>
    Swal.fire({
    title: 'Salvo com sucesso meu patrão.',
    width: 600,
    padding: '3em',
    color: '#716add',
    background: '#fff url(/images/trees.png)',
    backdrop: `
      rgba(0,0,123,0.4)
      url("https://i.gifer.com/origin/51/518532f622d962be53e2e1f8989263a8_w200.gif")
      left top
      no-repeat
    `
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
          window.location.href="Consulta.php";
      } else{
        window.location.href="Consulta.php";
      }
      })
  </script>
  <?php } else{?>
  
  <script language='javascript'>
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Amigão, ce já fez o cadastro pae!',
    backdrop: `
      rgba(0,0,123,0.4)
      url("https://i.gifer.com/origin/51/518532f622d962be53e2e1f8989263a8_w200.gif")
      left top
      no-repeat
    `
  
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
        window.location.href="Consulta.php";
    }
    })
  
  </script>
     <?php 
  };
}

?>
</body>
</html>