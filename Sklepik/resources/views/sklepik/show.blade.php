@extends('layout.app')

@section('tresc')
    <a class="btn btn-default" href="/">
        <h3>Wstecz</h3>
    </a>
        <h1>
        <center>
            <a href="sklepik/{{$sklepik->id}}">
                {{ $sklepik->nazwa }}
            </a>
        </center>
    </h1>
    <center><table ><tr>
    <td>Ilość: {{ $sklepik->ilosc }}szt.</td>
    <!--<td>Cena: {{ $sklepik->cena }}zł</td>-->

    </tr></table></center>
    <center><img src="{{ $sklepik->zdjecie }}" width=100%/></center>
    <hr>
    <p>{{$sklepik->opis}}</p>
    <br>
    @auth
    <a
        href="/sklepik/{{$sklepik->id}}/edit"
        class="btn btn-default">
        Edytuj
    </a>
    @endauth
@endsection
