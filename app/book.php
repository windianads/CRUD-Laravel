<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//kie isine migration book
class book extends Model
{
    protected $fillable =[
    	'nama_buku',
    	'harga'
    ];
}
