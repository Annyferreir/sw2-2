<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Bem-vindo</title>
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <form class="row g-3" action="{{route('users.store')}}" method="POST">

      <div class="col-md-6">
        <label for="inputName" class="form-label">Nome</label>
        <input type="name" class="form-control" id="inputName" placeholder="Adignobaldo">
      </div>

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>

      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Criar</button>
      </div>
    </form>
</body>