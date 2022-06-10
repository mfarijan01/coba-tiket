<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesmesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
