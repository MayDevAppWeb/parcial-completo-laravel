<?php

namespace App\Http\Controllers;

use App\Models\Carreras;
use App\Models\Registros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $registro = DB::table('tb_registros')
        ->join('tb_carreras', 'tb_registros.carrera_id', '=', 'tb_carreras.id')
        ->select('tb_registros.*', 'tb_carreras.nom_car')
        ->get();
        return view('registro.index', ['registro'=>$registro]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $carreras = Carreras::pluck('nom_car', 'id');
        return view('registro.new', compact( 'carreras'));
        // return redirect()->route('dashboard' ,compact( 'carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $registro = new Registros();
        $registro -> documento = $request -> documento;
        $registro -> name = $request -> name;
        $registro -> last_name = $request -> apellido;
        $registro -> carrera_id = $request -> carrera_id;
        $registro -> number = $request -> telefono;
        $registro -> email = $request -> email;
        $registro->save();

       return redirect()->route('registro.index');
        // return view('dashboard', ['registro' =>$registro]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
