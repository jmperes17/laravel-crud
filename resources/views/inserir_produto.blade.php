<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inserir produto</title>
</head>

<body>
    <div class="d-flex justify-content-center">
        <form action="insere_novo_produto" method="post">
            <div class="form-group">
                <label for="nome_produto">Nome do produto</label>
                <input type="text" class="form-control" name="nome_produto" id="nome_produto" aria-describedby="emailHelp" placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="quantidade" min="1">
            </div>
            <br>
            <div>
                <input type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>