<?php

// VendaController
namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        return Venda::all();
    }

    public function store(Request $request)
    {
        $venda = Venda::create($request->all());
        return response()->json($venda, 201);
    }

    public function show(Venda $venda)
    {
        return $venda;
    }

    public function update(Request $request, Venda $venda)
    {
        $venda->update($request->all());
        return response()->json($venda, 200);
    }

    public function destroy(Venda $venda)
    {
        $venda->delete();
        return response()->json(null, 204);
    }
}
