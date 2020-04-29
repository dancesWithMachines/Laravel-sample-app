@extends('layout.app')

@section('tresc')
    <a class="btn btn-default" href="/">
        <h3>Wstecz</h3>
    </a>
    <form
    class="container"
    action="{{action('SklepikController@store')}}"
    method="POST">
    
        {{csrf_field()}}
    
        <div class="form-group">
            <label>Nazwa</label>
            <input type="text" name="nazwa" class="form-control">
        </div>
    
        <div class="form-group">
            <label>Cena</label>
            <input type="text" name="cena" class="form-control">
        </div>

        <div class="form-group">
            <label>Ilość</label>
            <input type="number" name="ilosc" class="form-control">
        </div>
    
        <div class="form-group">
            <label>Opis</label>
            <!--<input type="textarea" name="opis" class="form-control">-->
            <textarea rows="4" cols="50" name="opis" class="form-control">Tu wpisz opis</textarea>
        </div>

        <div class="form-group">
            <label>Zdjęcie (ścieżka lub adres)</label>
            <input type="text" name="zdjecie" class="form-control">
        </div>
    
        <div class="form-group">
            <button class="btn btn-success">Zapisz</button>
        </div>
    
    </form>


@endsection
