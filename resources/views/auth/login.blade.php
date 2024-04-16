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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">My App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index')}}">Usuários</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search" action="" method="GET">
        <button class="btn btn-success" type="submit">Login</button>
      </form>
    </div>
  </div>
</nav>
    <div class="row">
        <div class="col">
            <form action="{{ route('auth.login')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email </label>
                  <input name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Adicione seu e-mai por favor</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Senha</label>
                  <input name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
                </div>
                <button type="submit" class="btn btn-primary">Logar</button>
              </form>
        </div>
    </div>
</body>
</html>
