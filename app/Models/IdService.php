<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdService extends Model
{
    use HasFactory;
    protected $table = 'id_service';
    protected $primarykey = 'id_service';

    public function serviceapp(){
        return $this->
        hasMany("App\Models\Serviceapp","id_service");
    }
}
