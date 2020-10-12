<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
		
		echo json_encode(array('book1'=>$content->book1,'book2'=>$content->book2,
							'book3'=>$content->book3,'book4'=>$content->book4,
							'book5'=>$content->book5,'book6'=>$content->book6,
							'book7'=>$content->book7,'book8'=>$content->book8,
							'book9'=>$content->book9,'book10'=>$content->book10));	
	}
	
	public function clearDatabase(Request $request){
		Student::truncate();
		Course::truncate();
	}
	
	public function storeJSON(Request $request){	
		$jaySonObj = json_decode($request->input('jaySonObj'),true);
		$jaySonObj = (array)$jaySonObj;
		$studentName = $jaySonObj['book1']['studentName'];
		$gradeLevel = $jaySonObj['book1']['gradeLevel'];
		$courseName = $jaySonObj['book1']['courseName'];
		$rebuild = $jaySonObj['book1']['rebuild'];
		$student_id = 0;
		$course_id = 0;
		$created_at = 0;
	


		//Update Database
		$bookScore = array();
		$numBooks = 0;
		$bookScoreSum = 0;
		$bookCount = count($jaySonObj);
		
		//Check if Student and Course exists
		$checkStudent = Student::firstOrCreate(['name' =>  $studentName])->get()->toArray();
		if(count($checkStudent) <= 0)
			{
				$Student = new Student;
				$Student->name = $studentName;
				$Student->save();
				$student_id= $Student->id;

			}
		else {
			$check_Student = Student::where([
				'name' => $studentName
			])->get();
			$student_id = $check_Student[0]['id'];
		
		}
		$checkCourse = Course::where([
									  'gradelevel' => $gradeLevel,
									  'courseName' => $courseName,
									  'student_id' => $student_id,
									  'studentName' => $studentName])
							  ->get();
		if(count($checkCourse) <= 0)
		 {
			$Course = new Course;
			$Course->courseName = $courseName;
			$Course->studentName = $studentName;
			$Course->gradeLevel = $gradeLevel;
			$Course->student_id = $student_id;
			$Course->save();	
			$course_id = $Course->id;
			$created_at = $Course->created_at;
		 }
		 else{
			 $course_id = $checkCourse[0]['id'];
			 $created_at = $checkCourse[0]['created_at'];
		 }

	    
		$index = 1;
		foreach($jaySonObj as $book){
		
			$i = $index;
			$numSelfTest = 0;
			$selfTest1 = 0;
			$selfTest2 = 0;
			$selfTest3 = 0;
			$selfTest4 = 0;
			$selfTest5 = 0;
			$finalTestScore = 0;
			$selfTestSum = 0;

		/*	for($j=1;$j<=5;$j++){
				$selfTest = 'selfTest' . $j;
				if( $jaySonObj['book'.$i]->$selfTest> 0){
					$numSelfTest++;
					$selfTestSum += $jaySonObj['book'.$i]['selfTest'.$j];					
				}				
			}
			*/
			if(is_iterable($book) && count($book) > 0){
				foreach($book as $key => $value){
					
                    print_r($book);
					$str = $key;
					$pattern1 = "/selfTest1/i";
					$pattern2 = "/selfTest2/i";
					$pattern3 = "/selfTest3/i";
					$pattern4 = "/selfTest4/i";
					$pattern5 = "/selfTest5/i";
					$pattern6 = "/finalTest/i";

					if(preg_match($pattern1, $str)){
						if($value > 0)
							$numSelfTest++;
						$selfTest1 = intval($value);	
						$selfTestSum += intval($value);
					}
					else if(preg_match($pattern2, $str)){
						if($value > 0)
							$numSelfTest++;
						$selfTest2 = intval($value);	
						$selfTestSum += intval($value);
					} 
					else if (preg_match($pattern3, $str)) {
						if ($value > 0)
							$numSelfTest++;
						$selfTest3 = intval($value);
						$selfTestSum += intval($value);
					} 
					else if (preg_match($pattern4, $str) ) {
						if ($value > 0)
							$numSelfTest++;
						$selfTest4 = intval($value);
						$selfTestSum += intval($value);
					} 
					else if (preg_match($pattern5, $str) ) {
						if ($value > 0)
							$numSelfTest++;
						$selfTest5= intval($value);
						$selfTestSum += intval($value);
					} 
					else if (preg_match($pattern6, $str)) {
						$finalTestScore = intval($value);
					}
					
				}
			}
			/*
			$selfTest1 = $jaySonObj['book'.$i]['selfTest1'];
			$selfTest2 = $jaySonObj['book'.$i]['selfTest2'];
			$selfTest3 = $jaySonObj['book'.$i]['selfTest3'];
			$selfTest4 = $jaySonObj['book'.$i]['selfTest4'];
			$selfTest5 = $jaySonObj['book'.$i]['selfTest5'];
			$finalTestScore = $jaySonObj['book'.$i]['finalTest'];
			*/


			if($selfTestSum > 0){

				$bookScore[$index] = floatval($finalTestScore)*0.50 + (floatval($selfTestSum)/floatval($numSelfTest))*0.50;
				$numBooks++;

				$bookScoreSum += $bookScore[$i];
				Course::where([
					        'gradelevel' => $gradeLevel,
							'courseName' => $courseName,
							'student_id' => $student_id,
							'id' => $course_id,
							'studentName' => $studentName,
							'created_at' => $created_at
							])
					->update(['book'.$index.'score' => $bookScore[$index]]);
			}			
			$finalScore = 0;
			if($numBooks > 0)
				$finalScore = $bookScoreSum/$numBooks;
			Course::where([
				           'gradelevel' => $gradeLevel,
						   'courseName' => $courseName,
						   'student_id' => $student_id,
						   'id' => $course_id,
						   'studentName' => $studentName,
						   'created_at' => $created_at])
				  ->update(['finalScore' => $finalScore]);

			$index++;
		}
		// Update Student Record with Overall Grade Score
		$coursesPerGrade = Course::where(['studentName' => $studentName,
		                                   'gradeLevel' => $gradeLevel] )
								  ->get();
								  					  
		$gradeScores = array();	
		$ends = array('first','second','third','fourth','fifth','sixth','seventh','eighth','ninth','tenth','eleventh','twelfth');	
        $sumGradeScore = 0;		
		$gradeScores[$gradeLevel] = $ends[$gradeLevel-1].'GradeScore';
			
		foreach($coursesPerGrade as $course){
			$sumGradeScore += $course->finalScore;
		}					  
	    //Calculate Grade Scores over all courses and put in Student table
		Student::where(['name' => $studentName])
		  ->update([$gradeScores[$gradeLevel] => $sumGradeScore/count($coursesPerGrade)]);	
		
		if($rebuild == 'yes')
			return;
		else{
			$jsonString = json_encode($jaySonObj);
			$fileName = str_replace(' ', '', str_replace('.', '', str_replace('_', '', $studentName . "_" . $gradeLevel . "_" . $courseName))) . ".txt";			 
			$result = Storage::put($fileName, $jsonString);
			return view('courseViewer'); 
			}
		
	}
	 
	 public function checkStudent(Request $request){
		 $studentAttr = json_decode($request->input('studentAttr'),true);
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
				 $book = $testScores["book1"];
				 break;
				 case 2:
				 $book = $testScores["book2"];
				 break;
				 case 3:
				 $book = $testScores["book3"];
				 break; 
				 case 4:
				 $book = $testScores["book4"];
				 break; 
				 case 5:
				 $book = $testScores["book5"];
				 break; 
				 case 6:
				 $book = $testScores["book6"];
				 break;
				 case 7:
				 $book = $testScores["book7"];
				 break;
				 case 8:
				 $book = $testScores["book8"];
				 break; 
				 case 9:
				 $book = $testScores["book9"];
				 break; 
				 case 10:
				 $book = $testScores["book10"];
				 break; 
				 default:
				 ;
			 }
			 
			 $studentNames[$i] = $book["studentName"];
			 $studentName = $studentNames[$i];
			 $gradeLevels[$i] = $book["gradeLevel"];
			 $gradeLevel = $gradeLevels[$i];
			 $courseNames[$i] = $book["courseName"];
			 $selfTests1[$i] = $book["selfTest1"];
			 $selfTests2[$i] = $book["selfTest2"];
			 $selfTests3[$i] = $book["selfTest3"];
			 $selfTests4[$i] = $book["selfTest4"];
			 $selfTests5[$i] = $book["selfTest5"];
			 $finalTests[$i] = $book["finalTest"];
			 
			
			 
			 			 
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

	public function renewDatabase(Request $request){
		$path=  public_path('scores');
		//$path = base_path() . '/pdf/';
		$files = File::files($path);
		$courseScores = array();
		$bookScore = (object) array();
		

		for($i = 0;$i < count($files);$i++){
	
			$contents = File::get($files[$i]);
			$contents = json_decode($contents);
			$contents = (object) $contents;
			$courseScores[$i] = $contents;
		}
		echo json_encode(array("courseScores" => $courseScores));
	}
}
