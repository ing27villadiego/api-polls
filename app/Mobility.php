<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobility extends Model
{
    protected $fillable=['name_mobility'];

    public function polls()
    {
        return $this->has(Poll::class);
    }
}
