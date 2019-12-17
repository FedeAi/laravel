<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignement extends Model
{
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
