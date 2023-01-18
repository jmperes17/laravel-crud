@if(Auth::guest())
<script>window.location = "/";</script>
@endif
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Estoque</title>
</head>

<body>
  <div class="d-flex justify-content-center">
    <table class="table table-striped" style="width: 100%; text-align:center; align-items:center;">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome do produto</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Data do cadastro</th>
          <th scope="col">Atualizado em</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($listaEstoque as $estoque)
        <tr>
          <td>{{$estoque->id;}}</td>
          <td>{{$estoque->nome_produto;}}</td>
          <td>{{$estoque->quantidade;}}</td>
          <td>{{$estoque->created_at;}}</td>
          <td>{{$estoque->updated_at;}}</td>
          <td><a href="/estoque/editar/<?= $estoque->id; ?>" class="btn btn-success">Editar</a></td>
          <td><a href="/estoque/excluir/<?= $estoque->id; ?>" class="btn btn-danger">Excluir</td>
        </tr>

      </tbody>
      @endforeach
    </table>
  </div>

  <div>
    <a href="estoque/inserir_produto" class="btn btn-primary">Inserir produto</a>
    <a href="logout" class="btn btn-danger">Logout</a>
  </div>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>