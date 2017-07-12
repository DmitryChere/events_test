<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function create($data)
    {
        $this->type_code = strip_tags($data['event']);
        $this->template_id = strip_tags($data['template']);
        return $this->save() ? true : false;
    }

    public function type()
    {
        return $this->hasOne('App\Type', 'code', 'type_code');
    }
}
