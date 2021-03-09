@extends('template.main')
@section('content')
<section class="container">
    <h1 class="text-center m-5">Créer un album</h1>
        {{-- message d'erreur --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/albums" method="POST">
        @csrf
        <label for="">Auteur: </label>
        <input type="text" name="auteur">
        <label for="">Nom: </label>
        <input type="text" name="nom">
        <label for="">Photo : </label>
        <input type="file" name="photo_id">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

</section>
<section class="container">
    <h1 class='text-center m-5'>Les albums: </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom </th>
            <th scope="col">Auteur</th>
            <th scope="col">Photo</th>
          </tr>
        </thead>
    @foreach ($DBAlbum as $item)
        
        <tbody>
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nom}}</td>
            <td>{{$item->auteur}}</td>
            <td>
                <img src="{{asset('$item->photos->photo')}}" alt="">
            </td>
          </tr>
        </tbody>
        @endforeach
    </table>
</section>
@endsection