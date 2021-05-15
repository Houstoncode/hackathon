<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmTask extends Model
{
    use HasFactory;

    public function answers() {
        return $this->hasMany(Question::class, 'task_id', 'id');
    }
}
