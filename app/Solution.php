<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable= ['name_solution', 'problem_id'];

    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }


    public function polls()
    {
        return $this->hasMany(Poll::class);
    }

}
