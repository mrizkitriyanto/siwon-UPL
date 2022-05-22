<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'title'
    ];

    /**
     * Get the workout associated with the category.
     */
    public function workout()
    {
        return $this->hasMany(Workout::class, 'category_id');
    }
}
