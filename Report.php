<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['id', 'title', 'description', 'datetime', 'status', 'project_id'];
    public function books()
    {
        return $this->hasMany(Book::class);
    }

}
