<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey = 'id';

    public function Berita1(){
        return $this->
        hasMany("App\Model\Berita","created_by");
    }
    public function Berita2(){
        return $this->
        hasMany("App\Models\Berita","updated_by");
    }
}