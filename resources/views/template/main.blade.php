<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- laravel_foreing_key_exo_4
-Créez deux tables albums(id,nom,auteur,photo_id) et photos(id,url)
-Créez un système pour pouvoir créer des albums ,via un formulaire avec un input text pour le nom, un input text pour l'auteur, un input file pour la photo
- Quand on supprime un album cela supprime sa photo également
- Il est possible d'éditer la photo --}}

{{-- nav --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
    </div>
  </nav>
  @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>