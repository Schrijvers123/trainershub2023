<?php

namespace App\Http\Controllers;

use App\Models\Accountmanager;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user()->intermediairs;
        dd($user);

        $clients = Client::select('clientname', 'intermediairs.companyname as intermediair')
            ->join('intermediairs', 'intermediairs.id', '=', 'clients.intermediair_id')
            ->orderby('clientname', 'ASC')
            ->orderby('intermediair', 'ASC')
            ->get();


        return view('clients.index', ['clients' => $clients]);
    }
}
