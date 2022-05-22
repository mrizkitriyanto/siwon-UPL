<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    /**
     * The attributes that are guarded from mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [
        'id'
    ];
}
