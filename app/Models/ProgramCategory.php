<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
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

    /**
     * Get the program associated with the category.
     */
    public function programs()
    {
        return $this->hasMany(Program::class, 'category_id');
    }
}
