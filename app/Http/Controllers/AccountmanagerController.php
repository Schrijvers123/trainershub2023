<?php

namespace App\Http\Controllers;

use App\Models\Accountmanager;
use Illuminate\Http\Request;

class AccountmanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        auth()->user()->accountmanagers;

        $accountmanagers = Accountmanager::query()
            ->select('accountmanagers.id', 'name', 'email', 'phone', 'companyname', 'statuses.title as status')
            ->join('users', 'users.id', '=', 'accountmanagers.user_id')
            ->join('intermediairs', 'intermediairs.id', '=', 'accountmanagers.intermediair_id')
            ->join('statuses', 'statuses.id', '=', 'accountmanagers.status_id')
            ->Paginate(5);


        return view('accountmanagers.index', ['accountmanagers' => $accountmanagers]);
    }
}
