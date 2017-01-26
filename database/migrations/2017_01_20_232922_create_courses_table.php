<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');	
            $table->integer('student_id');			
			$table->integer('gradeLevel');
			$table->string('courseName')->nullable();
			$table->string('studentName')->nullable();
			$table->float('book1Score')->nullable();
			$table->float('book2Score')->nullable();            
			$table->float('book3Score')->nullable();                      
			$table->float('book4Score')->nullable();                     
			$table->float('book5Score')->nullable();                      
			$table->float('book6Score')->nullable();                      
			$table->float('book7Score')->nullable();                      
			$table->float('book8Score')->nullable();                      
			$table->float('book9Score')->nullable();                      
			$table->float('book10Score')->nullable();			                    
			$table->float('finalScore')->nullable();  
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
