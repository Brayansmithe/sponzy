{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <script src="https://kit.fontawesome.com/c629837099.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body> --}}

  @extends('layout/contains')

    @section('titrePage')
        Moyen de Retrait
    @endsection

    @section('contain') 


  <div class="container-fluid ">
    <span class="w ">Enregistrement</span>
    <button type="button" class="btn btn-primary">FR</button>
  </div>

  @if (session('status'))

    <div class="alert alert-success">
      {{session('status')}}
    </div>

  @endif

  @csrf
  <form action="/register/traitement" method="POST">
    @csrf
    <div class="container-fluid contener">
      <h2 class="w">Créer un compte</h2><br>
      <p class="t">Pour vous enregistrer, veuillez rempir le formulaire suivant</p><br><br>
    <span><i class="fa-solid fa-phone black"></i></span><input type="number" name="num_tel" id="in1" placeholder="Numero de telephone" required><br><br>

    @if ($errors->has('num_tel'))
     
      <div class="alert alert-success">
         <p>{{ $errors->first('num_tel') }}</p>
      </div>
    @endif

      <span><i class="fa-solid fa-lock"></i></span><input type="password" name="mots_passe" id="" placeholder="Mot de passe" required><br><br>
{{--         <span><i class="fa-solid fa-lock"></i></span><input type="password" name="" id="" placeholder="Confirme mot de passe" required><br><br>--}}     
   <span><i class="fa-solid fa-user-plus"></i></span><input type="number" name="code_parainage" id="" placeholder="Code de parainage" required><br><br>
    <input type="submit" value="S'enregistrer" class=""><br><br>



    <div class="footer"><p class="w">Vous avez déjà un compte ? <a href="/login">Connexion</a></p></div>
    </div>
  </form>

   @endsection


{{-- </body>
</html> --}}