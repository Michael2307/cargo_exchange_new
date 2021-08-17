<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Points extends Model
{
    use HasFactory;

    protected $table = 'loads';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'date',
        'good',
    ];

    public static function find()
    {
    }

    public function loads(): HasOne
    {
        return $this->hasOne('App\Models\Loads');
    }
}
