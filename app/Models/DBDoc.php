<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBDoc extends Model
{
    use HasFactory;

    protected $table = 'db_docs';
    protected $guarded = [];
}
