<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intermediair extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function path()
    {
        return "/intermediairs/{$this->id}";
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function accountmanagers()
    {
        return $this->hasMany(Accountmanager::class);
    }

    public function clients()
    {
        return $this->hasMany(Customer::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
