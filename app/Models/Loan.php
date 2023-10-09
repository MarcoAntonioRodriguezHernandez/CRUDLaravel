<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function people()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }
}