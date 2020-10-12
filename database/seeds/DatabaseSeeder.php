<?php
use Illuminate\Database\Seeder;
use App\Student;
use App\Course;
use Faker\ORM\Propel\Populator;
use Faker\ORM\Propel\Generator;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
		$faker = Faker\Factory::create();
        for($i = 0;$i < 3; $i++){
			$student = new Student;
			if($i == 0) $student->name = 'Ricky';
			else if($i == 1) $student->name = 'Matthew';
			else if($i == 2) $student->name = 'Micah';
			$student->save();
			for($glev = 1;$glev <= 12;$glev++){		
				for($j = 0;$j < 3;$j++){
					$course =  new Course;
					$course->studentName = $student->name;
					$course->gradeLevel = $glev;
					
					$students = array();
					$students = Student::where(['name' => $student->name])->get()->toArray();
					$course->student_id = $students[0]['id'];
					//echo $course->studentName;
					
					if($j == 0) $course->courseName = "Reading";
					else if($j == 1) $course->courseName = "Writing";
					else if($j == 2) $course->courseName = "Arithmetic";
					$scoreTotal = 0;
						
					for($k = 1;$k <= 10;$k++){
						$score = $faker->numberBetween($min = 70,$max=100);
						$scoreTotal += $score;
						//echo $scoreTotal;
						
						if($k == 1) $course->book1Score = $score;
						else if($k == 2) $course->book2Score = $score;
						else if($k == 3) $course->book3Score = $score;
						else if($k == 4) $course->book4Score = $score;
						else if($k == 5) $course->book5Score = $score;
						else if($k == 6) $course->book6Score = $score;
						else if($k == 7) $course->book7Score = $score;
						else if($k == 8) $course->book8Score = $score;
						else if($k == 9) $course->book9Score = $score;
						else if($k == 10) {
							$course->book10Score = $score;
							$course->finalScore = $scoreTotal/10.0;
							$course->save();
						}								
					}				
				}
				//Begin to Calculate Grade Scores over all courses and put in Student table
				$coursesPerGrade = Course::where(['studentName' => $student->name,
		                                          'gradeLevel' => $glev] )
								          ->get();
								  					  
				$gradeScores = array();	
				$ends = array('first','second','third','fourth','fifth','sixth','seventh','eighth','ninth','tenth','eleventh','twelfth');	
				$sumGradeScore = 0;		
				$gradeScores[$glev] = $ends[$glev-1].'GradeScore';
					
				foreach($coursesPerGrade as $course){
					//echo $gradeScores[$gradeLevel];
					$sumGradeScore += $course->finalScore;
					//echo $sumGradeScore;			
				}					  
				//Calculate Grade Scores over all courses and put in Student table
				Student::where(['name' => $student->name])
					   ->update([$gradeScores[$glev] => $sumGradeScore/count($coursesPerGrade)]);


								
					}		
		}
	}
}
