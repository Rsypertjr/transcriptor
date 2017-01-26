<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('students', function (Blueprint $table) {
            $table->increments('id')->unique();
			$table->string('name')->unique();			
            $table->float('firstGradeScore')->nullable();
            $table->float('secondGradeScore')->nullable();
			$table->float('thirdGradeScore')->nullable();
			$table->float('fourthGradeScore')->nullable();
			$table->float('fifthGradeScore')->nullable();
			$table->float('sixthGradeScore')->nullable();			
			$table->float('seventhGradeScore')->nullable();			
			$table->float('eighthGradeScore')->nullable();
			$table->float('ninthGradeScore')->nullable();
			$table->float('tenthGradeScore')->nullable();
			$table->float('eleventhGradeScore')->nullable();
			$table->float('twelfthGradeScore')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
