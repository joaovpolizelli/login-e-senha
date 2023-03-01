<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <form action="validar.php" method="post">
                <div class="col">
                    <h1>Login</h1>
                </div>
        </div>
        <div class="col-6">
            <label class="form-label">Usuário:</label>
            <input name="usuario" class="form-control">
        </div>
        <div class="col-6">
            <label class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
        </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>