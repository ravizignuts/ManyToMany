<?php

namespace App\Http\Controllers;
use App\Models\Writer;
use App\Models\Book;
use App\Models\Book_Writer;
use Illuminate\Http\Request;

class mainController extends Controller
{
public function Writer_Add(){
    // Writer::create([
    // 'name' => 'Ramesh'
    // ]);
    // Writer::create([
    // 'name' => 'Suresh'
    // ]);
    // Writer::create([
    // 'name' => 'Ravi'
    // ]);
    // Writer::create([
    // 'name' => 'Dinesh'
    // ]);
    $writer = new Writer();
    $writer->name='Ravi';
    $writer->save();
    $bookid = ['1','2'];
    $writer->book()->attach($bookid);
    return "Writer Added";
}
public function Book_Add(){
    // Book::create([
    // 'name' => 'Laravel'
    // ]);
    // Book::create([
    // 'name' => 'PHP'
    // ]);
    // Book::create([
    // 'name' => 'Node'
    // ]);
    // Book::create([
    // 'name' => 'JAVA'
    // ]);
    // foreach(Book::all() as $e)
    // {
    //     $e->delete();
    // }
    return "Book Added";
}

public function Book_Writer($uid,$rid){

}

}
