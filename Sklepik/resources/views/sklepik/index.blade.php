@extends('layout.app')

@section('tresc')


<h1 class="px-4 py-4">Internetowy sklepik z alkoholami</h1>
@if(count($produkty) > 0)
    @foreach($produkty as $sklepik)
    <div class="card mb-3">
        <div class="card-body">
            <table>
                <tr>
                    <td>
                        <a href="sklepik/{{$sklepik->id}}"><img src="{{ $sklepik->zdjecie }}" width=100/></a>
                    </td>
                    <td>
                        <font size="5"><a href="sklepik/{{$sklepik->id}}">{{ $sklepik->nazwa }}</font></a>
                        <!--<br>
                        Ilość: {{ $sklepik->ilosc }}szt.-->
                        <br>
                        Cena: {{ $sklepik->cena }}zł
                    </td>
                </tr>
            </table>
        </div>
    </div>
    @endforeach
@endif

@endsection
