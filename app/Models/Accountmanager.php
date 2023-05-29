<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Accountmanager extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function path()
    {
        return "/accountmanagers/{$this->id}";
    }

    public function intermediair()
    {
        return $this->belongsTo(Intermediair::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
