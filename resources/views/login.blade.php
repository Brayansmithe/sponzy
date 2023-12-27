<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/c629837099.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="body">
  <div class="container-fluid ">
    <span class="w">Connexion</span>
    <button type="button" class="btn btn-primary">FR</button>
  </div>
  
  <div class="container-fluid contener">
    
    <form action="/login/traitement" method="post">
      @csrf

      <h2 class="w">Heureux de vous revoir</h2><br>
      <p class="t">Pour vous connectez, veuillez rempir le formulaire</p><br><br>
      <span><i class="fa-solid fa-phone black"></i></span><input type="number" name="num_tel" id="" placeholder="Numero de telephone" required><br><br>
      <span><i class="fa-solid fa-lock"></i></span><input type="password" name="mots_passe" id="" placeholder="Mot de passe" required><br><br>
      <input type="submit" value="Se connecter" class=""><br><br>

 

    </form>
    @if (session('status'))
      <a href="#" class="bottom-text-w3ls">{{session('status')}} </a>
    @endif
    <p class="w">Vous n'avez pas de compte ? <a href="/register">S'inscrire</a></p>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html>