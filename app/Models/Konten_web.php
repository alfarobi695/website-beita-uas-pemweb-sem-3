<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten_web extends Model
{
    use HasFactory;
    protected $table = 'konten_web';
    protected $primaryKey = 'id_konten';

    public $timestamps = false;}
