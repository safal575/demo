<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petrolum extends Model
{
    use HasFactory;
    protected $table = "petrolums";
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'year','petroleum_product','sale','country',
    ];
    public $timestamp = null;

}
