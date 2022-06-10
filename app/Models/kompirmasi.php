<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kompirmasi extends Model
{ 
     use HasFactory;
    protected $table = 'kompirmasi';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}