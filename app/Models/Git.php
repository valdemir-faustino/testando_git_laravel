<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Git extends Model
{
    protected $fillable=
    [
        "email",
    ];

    protected $table = "contatos";
}