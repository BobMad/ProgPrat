<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Pescador;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PescadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Endereco $endereco): View|Factory|Application
    {
        $pescadores = Pescador::query()->get();

       $enderecos = Endereco::all();

        return view('pescador.index')->with('pescadores', $pescadores)
            ->with('enderecos', $enderecos);
    }

}
