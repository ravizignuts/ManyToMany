<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Writer;
class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function writer()
    {
        return $this->belongsToMany(Writer::class,'book__writers','book_id','writer_id');
    }
}

