<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;
use App\Course;
use App\Student;
use App\GradeLevel;
use Knp\Snappy\Pdf;



class CourseController extends Controller
{
     public function addCourse(Request $request){
		 $testScores = array();
		 $testScoresArr = array();
		 $gradeLev = array();
		 $students = array();
		 $studentNames = array();
		 $studentName = '';
		 $gradeLevels = array();
		 $gradeLevel = '';
		 $courseNames = array();
		 $bookNumbers = array();
		 $selfTests1 = array();
		 $selfTests2 = array();
		 $selfTests3 = array();
		 $selfTests4 = array();
		 $selfTests5 = array();
		 $finalTests = array();
		 $bookScore = array();
		 $testScores = $request->input('testScores');
		 $sumScores = 0;
		 $stval = 9;
		 //echo count($testScores);
		 for($i=$stval;$i<=10;$i++){
			
			 $testScoresArr = explode(",",$testScores[$i][0]);
			 $studentNames[$i] = $testScoresArr[0];
			 $studentName = $studentNames[$i];
			 $gradeLevels[$i] = $testScoresArr[1];
			 $gradeLevel = $gradeLevels[$i];
			 $courseNames[$i] = $testScoresArr[2];
			 $bookNumbers[$i] = $testScoresArr[3];
			 $selfTests1[$i] = $testScoresArr[4];
			 $selfTests2[$i] = $testScoresArr[5];
			 $selfTests3[$i] = $testScoresArr[6];
			 $selfTests4[$i] = $testScoresArr[7];
			 $selfTests5[$i] = $testScoresArr[8];
			 $finalTests[$i] = $testScoresArr[9];
			 
			
			 
			 			 
			 $checkStudent = Student::firstOrCreate(['name' =>  $studentNames[$i]])->get()->toArray();
			 if(count($checkStudent) <= 0)
				{
					$Student = new Student;
					$Student->id = 1;
					$Student->name = $studentNames[$i];
					$Student->save();
				}
			else
				$studentId = $checkStudent[0]['id'];
			
				
				
			/* $GradeLevel = new GradeLevel;	
						 
			 $courseName = $courseNames[$i];
			 //echo $courseName;
			 //$GradeLevel->gradeLevel = $gradeLevels[$i];
			 $gradeLev = Course::where('student_id',$studentId)
									->where('courseName',$courseName)
									->get()->toArray();		

			 print_r($gradeLev[0]['gradeLevel']);									
			 //$GradeLevel->student_id = (int)$gradeLev[0]['id'];
			// $GradeLevel->save();
			 */
			 
			 
			 $checkCourse = Course::where(['gradelevel' => $gradeLevels[$i],
										  'courseName' => $courseNames[$i],
										  'studentName' => $studentNames[$i]])
								  ->get();
			 if(count($checkCourse) <= 0)
			 {
				$Course = new Course;
				$Course->courseName = $courseNames[$i];
				$Course->studentName = $studentNames[$i];
				$Course->gradeLevel = $gradeLevels[$i];
				$Course->student_id = $studentId;
				$Course->save();	
			 }
			
			
			$numSelfTest = 0;	
			$selfTestSum = 0;
			$selfTest1 = $selfTests1[$i];
			//echo $selfTest1;
			if($selfTest1 > 0) {
				$numSelfTest++;
				$selfTestSum += $selfTest1;
			}
			$selfTest2 = $selfTests2[$i];
			//echo $selfTest2;
			if($selfTest2 > 0) {
				$numSelfTest++;
				$selfTestSum += $selfTest2;
			}
			$selfTest3 = $selfTests3[$i];
			if($selfTest3 > 0) {
				$numSelfTest++;
				$selfTestSum += $selfTest3;
			}
			$selfTest4 = $selfTests4[$i];
			if($selfTest4 > 0) {
				$numSelfTest++;
				$selfTestSum += $selfTest4;
			}
			$selfTest5 = $selfTests5[$i];
			if($selfTest5 > 0) {
				$numSelfTest++; 
				$selfTestSum += $selfTest5;
			}
			
			$finalTestScore =  $finalTests[$i];
			//echo $selfTestSum;
			$whichBook = 'book'.(string)$i.'Score';
			//echo $whichBook;

			
			
			$bookScore[$i] = floatval($finalTestScore)*0.50 + (floatval($selfTestSum)/floatval($numSelfTest))*0.50;
			
			//Calculate Final Score progressively
			for($j=$stval;$j<=$i;$j++){
				$sumScores += $bookScore[$j];				
			}
			
			$finalScore = $sumScores/count($bookScore);
			$sumScores = 0;
			//echo $bookScore;
			$checkCourse = Course::where(['gradelevel' => $gradeLevels[$i],
										  'courseName' => $courseNames[$i],
										  'studentName' => $studentNames[$i]])
								 ->update([$whichBook => $bookScore[$i],
								           'finalScore' => $finalScore]);
			
		 } 		 
        //Begin to Calculate Grade Scores over all courses and put in Student table
		 $coursesPerGrade = Course::where(['studentName' => $studentName,
		                                   'gradeLevel' => $gradeLevel] )
								  ->get();
								  					  
		$gradeScores = array();	
		$ends = array('first','second','third','fourth','fifth','sixth','seventh','eighth','ninth','tenth','eleventh','twelfth');	
        $sumGradeScore = 0;		
		$gradeScores[$gradeLevel] = $ends[$gradeLevel].'GradeScore';
			
		foreach($coursesPerGrade as $course){
			
			
			//echo $gradeScores[$gradeLevel];
			$sumGradeScore += $course->finalScore;
			//echo $sumGradeScore;			
		}					  
		//Calculate Grade Scores over all courses and put in Student table
        Student::where(['name' => $studentName])
			  ->update([$gradeScores[$gradeLevel] => $sumGradeScore/count($coursesPerGrade)]);



		
		 return view('courseViewer');
	 }
	 
	 public function reportCard(Request $request){
		 $studentName = $request->input('studentName');
		 $courses = Course::where('studentName',$studentName)
						  ->orderBy('gradeLevel','asc')->get();
			
         $students = Student::where('name',$studentName)->get();
		 if(count($courses) <= 0)
			 return view('courseViewer');
		 elseif(count($courses)> 0)
			 return view('reportCard',compact('courses','students'),['name' => $studentName]);
	 }
	 
	 public function createPDF(Request $request){
		 $attributes = json_decode($request->input('courseAttributes'));
		 $page = $request->input('data');
		 //print_r($page);
		 $courseName = $attributes->courseName;
		 $grade = $attributes->gradeLevel;
		 $studentName = $attributes->studentName;
		 
		 
		 $filename=$studentName."_"."Grade".$grade;
		 $myProjectDirectory = base_path();
         $filePath = $myProjectDirectory.'/pdf/'.$filename.'.pdf';
		 //Delete current file before storing new one
		 //Storage::delete('/pdf/'.$filename.'.pdf');
		 //Storage::delete($filePath);
		 
		 $path = base_path() .'/pdf/'.$filename.'.pdf';
		 if(file_exists($path)) {
			unlink($path);
		 }
		 
		 $snappy = new Pdf($myProjectDirectory . '/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
		 header('Content-Type: application/pdf');		 
         header('Content-Disposition: attachment; filename="file.pdf"');
		 $snappy->generateFromHtml($page,$filePath);
				  
	 }
}
