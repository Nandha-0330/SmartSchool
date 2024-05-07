<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('courseName');
            $table->string('imagePath');
            $table->text('boxInfo');
            $table->string('detailImagePath');
            $table->text('highlightContent');
            $table->string('heading');
            $table->text('details1');
            $table->text('details2');
            $table->date('startDate');
            $table->integer('yearsOld');
            $table->integer('classSize');
            $table->integer('carryTime');
            $table->string('coursesDuration');
            $table->string('classTime');
            $table->decimal('fee', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
