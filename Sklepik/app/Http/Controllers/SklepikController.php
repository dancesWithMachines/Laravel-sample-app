<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sklepik;

class SklepikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produkty = Sklepik::orderBy('id','desc')->get();
        return view('sklepik.index')->with('produkty', $produkty);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sklepik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
      'nazwa' => 'required',
      'cena' => 'required',
      'ilosc' => 'required',
      'zdjecie' => 'required'
    ]);

    // Stworzenie celu
    $sklepik = new sklepik;
    $sklepik->nazwa = $request->input('nazwa');
    $sklepik->cena = $request->input('cena');
    $sklepik->ilosc = $request->input('ilosc');
    $sklepik->opis = $request->input('opis');
    $sklepik->zdjecie = $request->input('zdjecie');

    $sklepik->save();

    return redirect('/')->with('success', 'Produkt dodany!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sklepik = Sklepik::find($id);
        return view('sklepik.show')->with('sklepik',$sklepik);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sklepik = Sklepik::find($id);
        return view('sklepik.edit')->with('sklepik', $sklepik);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sklepik = Sklepik::find($id);
        $sklepik->nazwa = $request->input('nazwa');
        $sklepik->cena = $request->input('cena');
        $sklepik->ilosc = $request->input('ilosc');
        $sklepik->opis = $request->input('opis');
        $sklepik->zdjecie = $request->input('zdjecie');

        $sklepik->save();

        return redirect('/')->with('success', 'Zaktualizowano infromacje o produkcie!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sklepik = Sklepik::find($id);
        $sklepik->delete();

        return redirect('/')->with('success', 'Usunięto produkt');
    }
    public function __construct(){
        $this->middleware('auth', ['only' => 'create','edit']);
    }
}
