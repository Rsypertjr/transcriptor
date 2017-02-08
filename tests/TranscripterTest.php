<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TranscripterTest extends TestCase
{
	use DatabaseMigrations;
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
  	
	
	
	public function testTranscriptReport()
	{
		 $this->seed('DatabaseSeeder');
		 $faker = Faker\Factory::create();
		 $this->visit('/cinp')
			  ->see('Input New Student and Course')			  
			  ->post('/report',['studentName' => 'Ricky'])
		      ->seePageIs('/report')
			  ->see('Ricky')  //verify transcript
			  ->see('Transcript for Ricky');
	}
	
public function testStudentInput()
	{		
	     $testScores = array();
		 $this->visit('/cinp')
			  ->see('Input New Student and Course')
			  ->type('Ricky','studentName')
			  ->type('1','gradeLevel')
			  ->type('Math','courseName')
			  ->click('bkScTag')
			  ->see('0');
			  
		  $this->see('Input Final Test Score Below')
			  ->type('88','selfTest1')
			  ->type('92','selfTest2')
			  ->type('83','selfTest3')
			  ->type('95','selfTest4') 
			  ->type('96','selfTest5')
			  ->type('92','finalTest')
			  ->click('bkSubTag')
			  ->see('0');
	}
	
	
}
