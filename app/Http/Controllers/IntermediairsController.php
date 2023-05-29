<?php

namespace App\Http\Controllers;

use App\Models\Accountmanager;
use App\Models\Client;
use App\Models\Customer;
use App\Models\Intermediair;
use Illuminate\Http\Request;

class IntermediairsController extends Controller
{
    public function index()
    {
        $this->authorize('manage intermediairs');

        $intermediairs = Intermediair::query()
            ->with('status')
            ->orderBy('companyname')
            ->Paginate(5);

        return view('intermediairs.index', ['intermediairs' => $intermediairs]);
    }

    /**
     * Show the form for creating a new intermediairs.
     */
    public function create()
    {
        $this->authorize('manage intermediairs');

        return view('intermediairs.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Intermediair $intermediair, Accountmanager $accountmanagers, Client $clients)
    {
        $this->authorize('manage intermediairs');

        $accountmanagers = Accountmanager::query()
            ->select('accountmanagers.id', 'name', 'email', 'phone')
            ->join('users', 'users.id', '=', 'accountmanagers.user_id')
            ->where('intermediair_id', '=', $intermediair->id)
            ->get();

        $clients = Client::query()
            ->select('clients.id', 'clientname')
            ->join('users', 'users.id', '=', 'clients.owner_id')
            ->where('intermediair_id', '=', $intermediair->id)
            ->get();

        $customers = Customer::query()
            ->select('customers.id', 'customername', 'client_id', 'clients.clientname')
            ->join('users', 'users.id', '=', 'customers.owner_id')
            ->join('clients', 'clients.id', '=', 'customers.client_id')
            ->where('customers.intermediair_id', '=', $intermediair->id)
            ->get();


        return view('intermediairs.show', compact('intermediair', 'accountmanagers', 'clients', 'customers'));
    }
}
