<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'courseName', 'imagePath', 'boxInfo', 'detailImagePath', 'highlightContent',
        'heading', 'details1', 'details2', 'startDate', 'yearsOld', 'classSize',
        'carryTime', 'coursesDuration', 'classTime', 'fee',
    ];
}
