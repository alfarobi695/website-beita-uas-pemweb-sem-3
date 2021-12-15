<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviceapp extends Model
{
    use HasFactory;
    protected $table = 'serviceapp';
    protected $primaryKey ='id_serviceapp';
    public $timestamps = false;
    public function id_service(){
        return $this->
        belongsTo("App\Models\IdService","id_service");
    }
}
