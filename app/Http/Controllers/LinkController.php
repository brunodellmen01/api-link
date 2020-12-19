<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    private $link;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Link $link)
    {
        $this->link = $link;
    }

    public function index()
    {
        return $this->link->paginate(5);
    }

    public function show($link)
    {
        return $this->link->find($link);
    }

    public function store(Request $request)
    {
        $this->link->create($request->all());

        return response()->json(['data' => ['message' => 'Registrado com sucesso']]);
    }

    public function update($link, Request $request)
    {
        $link = $this->link->find($link);

        $link->update($request->all());

        return response()->json(['data' => ['message' => 'Atualizado com sucesso']]);
    }

    public function destroy($link)
    {
        $link = $this->link->find($link);

        $link->delete();

        return response()->json(['data' => ['message' => 'Deletado com sucesso']]);
    }
    
}
