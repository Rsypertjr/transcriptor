<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response;
class TranscripterTest extends TestCase
{
	//use DatabaseMigrations;
	//use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
  	
	
/*	
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
	*/
public function testStudentInput()
	{		
	     $testScores = array();
		 $faker = Faker\Factory::create();
		 //create course data to be posted
		 for($i=1;$i<=10;$i++){
			 $testScoreArr = array('studentName' => 'RickySypert',
								   'gradeLevel' => '1',
								   'courseName' => 'Math',
								   'selfTest1' => $faker->numberBetween($min = 70,$max=100),
								   'selfTest2' => $faker->numberBetween($min = 70,$max=100),
								   'selfTest3' => $faker->numberBetween($min = 70,$max=100),
								   'selfTest4' => $faker->numberBetween($min = 70,$max=100),
								   'selfTest5' => $faker->numberBetween($min = 70,$max=100),
								   'finalTest' => $faker->numberBetween($min = 70,$max=100));
			 $testScores['course'.$i] = $testScoreArr;
			 }
		     $post_data = json_encode($testScores,JSON_FORCE_OBJECT); 
			 
			 
		 $this->visit('/cinp')
			  ->see('Input New Student and Course');
		//Test Self Test Score input to database	  
		 $response = $this->call('POST','/course',['testScores' => $post_data]); 
		 $this->assertEquals(200, $response->status());
		 $this->seeInDatabase('students',['name' => 'RickySypert']);
		 $this->seeInDatabase('courses',['studentName' => 'RickySypert']);
		
	}
	
	
}
