@extends('layout.app')

@section('tresc')
    <a class="btn btn-default" href="/">
        <h3>Wstecz</h3>
    </a>
        <h1>
        <center><font face="Tahoma">
                {{ $sklepik->nazwa }}
        </font></center>
    </h1>
    <center><table ><tr>
    <td>Cena: {{ $sklepik->cena }}zł</td>

    </tr></table></center>
    <center><img src="{{ $sklepik->zdjecie }}"/></center>
    <hr>
    <font face="Tahoma" size="3"><center><p>{{$sklepik->opis}}</p></center></font>
    <br>
    @auth
    <a
        href="/sklepik/{{$sklepik->id}}/edit"
        class="btn btn-default">
        Edytuj
    </a>
    @endauth
@endsection
