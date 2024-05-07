<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['type', 'name', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
