<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable= ['name_person', 'user_id', 'state' ,'document', 'district', 'cell_phone', 'problem_id', 'solution_id', 'mobility_id'];


    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }

    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }

    public function mobility()
    {
        return $this->belongsTo(Mobility::class);
    }
}
