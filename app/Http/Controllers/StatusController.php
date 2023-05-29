<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function show(Status $status)
    {
        return view('statuses.show', compact('status'));
    }
}
