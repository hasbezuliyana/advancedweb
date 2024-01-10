<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Manager extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['id', 'name', 'contact'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

}
