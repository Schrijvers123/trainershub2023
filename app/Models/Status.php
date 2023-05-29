<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function path()
    {
        return "/status/{$this->id}";
    }

    public function intermediairs()
    {
        return $this->hasMany(Intermediair::class);
    }

}
