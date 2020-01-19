@extends('layout.app')

@section('tresc')
    <a class="btn btn-default" href="/">
        <h3>Wstecz</h3>
    </a>
    <form
    class="container"
    action="{{action('SklepikController@update', $sklepik->id)}}"
    method="POST">
    <input type="hidden" name="_method" value="PUT">
    
        {{csrf_field()}}
    
        <div class="form-group">
            <label>Nazwa</label>
            <input type="text" name="nazwa" class="form-control" value="{{$sklepik->nazwa}}">
        </div>
    
        <div class="form-group">
            <label>Cena</label>
            <input type="number" name="cena" class="form-control" value="{{$sklepik->cena}}">
        </div>

        <div class="form-group">
            <label>Ilość</label>
            <input type="number" name="ilosc" class="form-control" value="{{$sklepik->ilosc}}">
        </div>
    
        <div class="form-group">
            <label>Opis</label>
            <!--<input type="textarea" name="opis" class="form-control">-->
            <textarea rows="4" cols="50" name="opis" class="form-control">{{$sklepik->opis}}</textarea>
        </div>

        <div class="form-group">
            <label>Nowe zdjęcie (ścieżka lub adres)</label><br>
            <img src="{{ $sklepik->zdjecie }}" width=300/>           
            <input type="text" name="zdjecie" class="form-control" value="{{$sklepik->zdjecie}}">
        </div>
    
        <div class="form-group">
            <button class="btn btn-success">Zapisz</button>
        </div>   
    </form>

    <form class="container" method="POST" action="{{action('SklepikController@destroy', $sklepik->id)}}" onsubmit="return confirm('Na pewno chcesz usunąć ten produkt?');">
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="hidden" name="_method" value="Usuń">
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
    </form>


@endsection
