<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table=  'book_migration';

    protected $fillable=[
        'name',
        'pages',
        'IBN',
        'category',
        'publisher',
        'yearOfPublication',
        'user_id',
    ];

    public function user(){
        return $this->belongsTO(User::class);
    }
}
