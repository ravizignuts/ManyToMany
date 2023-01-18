<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Writer extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function book()
    {
        return $this->belongsToMany(Book::class,'book__writers','writer_id','book_id');
    }
}
