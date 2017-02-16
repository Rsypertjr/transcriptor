<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Course;
use App\Student;
use App\GradeLevel;
use Knp\Snappy\Pdf;



class CourseController extends Controller
{	
	public function getStudent(Request $request){		
		$studentAttr = json_decode($request->input('studentAttr'),true);
		$studentName = $studentAttr['studentName'];
		$grade = $studentAttr['gradeLevel'];
		$course = $studentAttr['courseName'];		
		
		$fileName = str_replace(' ','',str_replace('.','',str_replace('_','',$studentName."_".$grade."_".$course))).".txt";
		//echo $fileName;
		$filePath = storage_path('app/'.$fileName);
		$fileContent = file_get_contents($filePath);
		$content = json_decode($fileContent);
		
		echo json_encode(array('course1'=>$content->course1,'course2'=>$content->course2,
							'course3'=>$content->course3,'course4'=>$content->course4,
							'course5'=>$content->course5,'course6'=>$content->course6,
							'course7'=>$content->course7,'course8'=>$content->course8,
							'course9'=>$content->course9,'course10'=>$content->course10));	
	}
	
	
	public function storeJSON(Request $request){	
	
		$jaySonObj = json_decode($request->input('jaySonObj'),true);
		$studentName = $jaySonObj['course1']['studentName'];
		$grade = $jaySonObj['course1']['gradeLevel'];
		$course = $jaySonObj['course1']['courseName'];
		
		//print_r($jaySonObj);
		$jsonString = json_encode($jaySonObj);
		$fileName = str_replace(' ','',str_replace('.','',str_replace('_','',$studentName."_".$grade."_".$course))).".txt";
		echo $fileName;
		//if(file_exists($filePath)) {
		//	unlink($filePath);
		// }
		 
		$result = Storage::put($fileName, $jsonString);
		echo $result;
		echo $jsonString;
		return view('courseViewer');
		
	}
	 
	 public function checkStudent(Request $request){
		 $studentAttr = json_decode($request->input('studentAttr'),true);
		 //print_r($studentAttr);
		 $studentName = $studentAttr['studentName'];
		 $grade = $studentAttr['gradeLevel'];
		 $course = $studentAttr['courseName'];
		 
		 $checkCourse = Course::where(['gradelevel' => $grade,
									   'courseName' => $course,
									   'studentName' => $studentName])
								  ->get();								  
		 
		 $fileName = str_replace(' ','',str_replace('.','',str_replace('_','',$studentName."_".$grade."_".$course))).".txt";
		 $filePath = storage_path('app/'.$fileName);
		 //echo $filePath;
		 //echo file_exists($filePath);
		 $noRecord = false;
	     //echo count($checkCourse);				  
		 if(count($checkCourse) > 0)
		 {
			 $isDbRecord = true;
			 $isFileRecord = false;			
			 echo json_encode(array('noRecord' => $noRecord,'isDbRecord'=>$isDbRecord,'isFileRecord'=>$isFileRecord,'studentAttr'=>$studentAttr));
		  }
		 else if(file_exists($filePath)) {
			 $isDbRecord = false;
			 $isFileRecord = true;
			 echo json_encode(array('noRecord' => $noRecord,'isDbRecord'=>$isDbRecord,'isFileRecord'=>$isFileRecord,'studentAttr'=>$studentAttr));			
		 }
		 else {
			 $noRecord = true;
			 echo json_encode(array('noRecord' => $noRecord,'studentAttr'=>$studentAttr));
		 }	
	 }
	 
	
	
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
		 $selfTests1 = array();
		 $selfTests2 = array();
		 $selfTests3 = array();
		 $selfTests4 = array();
		 $selfTests5 = array();
		 $finalTests = array();
		 $bookScore = array();
		 $testScores = json_decode($request->input('testScores'),true);
		 print_r($testScores);
		 $sumScores = 0;
		 $stval = 1;
		 for($i=$stval;$i<=10;$i++){
			
			 //$testScoresArr = explode(",",$testScores[$i][0]);
			 switch($i){
				 case 1:
				 $course = $testScores["course1"];
				 break;
				 case 2:
				 $course = $testScores["course2"];
				 break;
				 case 3:
				 $course = $testScores["course3"];
				 break; 
				 case 4:
				 $course = $testScores["course4"];
				 break; 
				 case 5:
				 $course = $testScores["course5"];
				 break; 
				 case 6:
				 $course = $testScores["course6"];
				 break;
				 case 7:
				 $course = $testScores["course7"];
				 break;
				 case 8:
				 $course = $testScores["course8"];
				 break; 
				 case 9:
				 $course = $testScores["course9"];
				 break; 
				 case 10:
				 $course = $testScores["course10"];
				 break; 
				 default:
				 ;
			 }
			 
			 $studentNames[$i] = $course["studentName"];
			 $studentName = $studentNames[$i];
			 $gradeLevels[$i] = $course["gradeLevel"];
			 $gradeLevel = $gradeLevels[$i];
			 $courseNames[$i] = $course["courseName"];
			 $selfTests1[$i] = $course["selfTest1"];
			 $selfTests2[$i] = $course["selfTest2"];
			 $selfTests3[$i] = $course["selfTest3"];
			 $selfTests4[$i] = $course["selfTest4"];
			 $selfTests5[$i] = $course["selfTest5"];
			 $finalTests[$i] = $course["finalTest"];
			 
			
			 
			 			 
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
		$gradeScores[$gradeLevel] = $ends[$gradeLevel-1].'GradeScore';
			
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
		 
		 
		 $filename=$studentName."_"."Transcript";
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
