@extends('layout.app')

@section('tresc')


<center><h1 class="px-4 py-4"><font face="Calibri">Internetowy katalog whisky</font></h1></center>
@if(count($produkty) > 0)
<center><table width="50%">
    @foreach($produkty as $sklepik)
    <tr>
    <td>
    <div class="card mb-4">
        <div class="card-body">
            <center>
            <a href="sklepik/{{$sklepik->id}}"><img src="{{ $sklepik->zdjecie }}" height="300px"/></a><br/>
            <font face="Calibri" size="5">{{ $sklepik->nazwa }}</font>
            <!--<br>
            Ilość: {{ $sklepik->ilosc }}szt.-->
            <br>
            Cena: {{ $sklepik->cena }}zł
            </center>
        </div>
    </div>
    </td>
    </tr>
    @endforeach
    </center></table>
@endif

@endsection
