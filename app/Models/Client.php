<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function path()
    {
        return "/clients/{$this->id}";
    }

    public function intermediair()
    {
        return $this->belongsTo(Intermediair::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
