<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<meta name="_token" content="{!! csrf_token() !!}" /> -->
	    <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Transcriptor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link href="/css/app.css" rel="stylesheet">
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript">
		
		    $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		    var noSelfTests = 1;			
			var noBooks = 1;	
			var json = '';
			//var testNo = 1;
			var courseScore = {studentName:"",gradeLevel:"",courseName:"",
								selfTest1:0,selfTest2:0,selfTest3:0,selfTest4:0,selfTest5:0,finalTest:0};
			
			var courseScores = {course1:"",course2:"",course3:"",course4:"",course5:"",course6:"",
								course7:"",course8:"",course9:"",course10:""};
			var courses = [];					
			jQuery(document).ready(function() {
			        $('#bkScore').css('display','block').text("Calculate Book "+noBooks.toString()+" Score");
			        $('#editRecord').css('display','none');
				    $('#checkRecord').on('mousedown',function(){
						if($('#studentName').val() != '' && $('#gradeLevel').val() != ''
														 && $('#courseName').val() != '')
							{
								
								var studentAttr = {studentName:$('#studentName').val(),
												   gradeLevel:$('#gradeLevel').val(),
												   courseName: $('#courseName').val()};
												   
								studentAttr = JSON.stringify(studentAttr);
								//alert(studentAttr);
								$.post( "/checkStudent", {"studentAttr":studentAttr},function(data){
									 if(data.isDbRecord){
										$('#editRecord').text('Edit Record').css('display','block');
										alert("This is already matching a complete Student/Course record.  Click Edit button to see.");
									 }
									 else if(data.isFileRecord){
										 alert("This is matching an incomplete Student/Course record.  Do you want to continue?")
									     $('#editRecord').text('Continue?').css('display','block');
									 }
								},"json");			 
							}						 
					});								 
													 
								
				   
					
			        $('#finalTest, .selfTestScores, .courseInput').on('mousedown',function(){
						$(this).val('');
					});
			  
					$('#stScores').css('display','none'); 					
					$('#courseSubmit, #bookSubmit').css('display','none');
					$('#bkScore').on('mousedown',function(e){
						  if($('#studentName').val() == '')
						  {
							  alert("Need Student Name Input Please");
						  }
						  else if($('#gradeLevel').val() == '')
						  {
							  alert("Need Grade Input Please");
						  }
						  else if($('#courseName').val() == '')
						  {
							  alert("Need Course Name Input Please");
						  }		
						  else if($('#studentName').val() != '' && $('#gradeLevel').val() != ''
														 && $('#courseName').val() != '')
							{
								
								var studentAttr = {studentName:$('#studentName').val(),
												   gradeLevel:$('#gradeLevel').val(),
												   courseName: $('#courseName').val()};
												   
								studentAttr = JSON.stringify(studentAttr);
								//alert(studentAttr);
								$.post( "/checkStudent", {"studentAttr":studentAttr},function(data){
									 if(data.isDbRecord){
										$('#bkScore, #reportCard').css('display','none');
										$('#editRecord').text('Edit Record').css('display','block');
										//alert("This is already matching a complete Student/Course record.  Click Edit button to see.");
										
									 }
									 else if(data.isFileRecord){
										 alert("This is matching an incomplete Student/Course record.  Do you want to continue?")
									     $('#editRecord').text('Continue?').css('display','block');
									 }
									 else if(data.noRecord){
										  $('#stLabel').text('Input Self Tests Scores Below for Book '+noBooks.toString());						
											
										  $('#checkRecord, #editRecord, #bkScore').css('display','none');
										  $('#newStudentHdr').css('display','none');
										  $('#reportCard').css('display','none');
										  $('#stScores').css('display','block');   
										  $('#bookSubmit').css('top','1em');
										  $(this).css('display','none');
										  $('#bookSubmit').css('display','block').text("Submit Book "+(noBooks).toString()+" Score");
								  }
								},"json");			 
							}
						  
					});
					
					
					$('#bookSubmit').on('mousedown',function(){			
                        
                       	//Get test values		
						$('#bookSubmit').css('display','block');
						$('#studentName').prop('disabled',true);
						$('#gradeLevel').prop('disabled',true);
						$('#courseName').prop('disabled',true);
					
						courseScore.studentName = $('#studentName').val();
						courseScore.gradeLevel = $('#gradeLevel').val();
						courseScore.courseName = $('#courseName').val();
						courseScore.selfTest1 = $('#selfTest1').val();
						courseScore.selfTest2 = $('#selfTest2').val();
						courseScore.selfTest3 = $('#selfTest3').val();
						courseScore.selfTest4 = $('#selfTest4').val();
						courseScore.selfTest5 = $('#selfTest5').val();
						courseScore.finalTest = $('#finalTest').val(); 
											
						switch(noBooks)	{
							case 1:
								courseScores.course1 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							case 2:
								courseScores.course2 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							case 3:
								courseScores.course3 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							case 4:
								courseScores.course4 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							case 5:
								courseScores.course5 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							case 6:
								courseScores.course6 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							case 7:
								courseScores.course7 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							case 8:
								courseScores.course8 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							case 9:								
								courseScores.course9 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							case 10:
								courseScores.course10 = $.parseJSON('{studentName:"",gradeLevel:"",courseName:"",selfTest1:"0",selfTest2:"0",selfTest3:"0",selfTest4:"0",selfTest5:"0",finalTest:"0"}');
								break;
							default:
								;
						}
							
					
						
						noSelfTests++;
						json = JSON.stringify(courseScores);
						//alert(json);
						
                        // Reset inputs						
						$('#selfTest1').val(0);
						$('#selfTest2').val(0);
						$('#selfTest3').val(0);
						$('#selfTest4').val(0);
						$('#selfTest5').val(0);
						$('#finalTest').val(0);  
						++noBooks;  // count # of books
						$.post( "/storeJSF", {"jaySonObj":json});
						
						if(noBooks == 11){  // 10 books per subject
							
							$('#courseForm').append('<input type="hidden" name="testScoresJson" value="'+ json +'"></input>');
					    
							$('#stScores').css('display','none');  
							$('#bkScore').css('display','block');
							$('#reportCard').css('display','block');
                            $('#studentName').prop('disabled',false).val('');
						    $('#gradeLevel').prop('disabled',false).val('');
						    $('#courseName').prop('disabled',false).val('');                            
							$('#newStudentHdr').css('display','block');		
							$('#bookSubmit').css('display','none');	
						    //$('#courseForm').submit();
							
							$.post( "/course", {"testScores":json});
							
							
						}
						else{
							$('#bookSubmit').css('display','block').text('Submit Book '+(noBooks).toString()+' Score');
							$('#stLabel').text('Input Self Tests Scores Below for Book '+noBooks.toString());						
							$('#bkScore').css('display','none');
						}
						
					});
				
					$('#reportCard').on('mousedown',function(){
						var val = $('#studentName').val();
						if(val == '')
							alert("Sorry, You need a Student Name!")
						else{
								var val = $('#studentName').val();
							    $('#reportForm').append('<input type="hidden" name="studentName" value="'+val+'"></input>');
								$('#reportForm').submit();
								}
					});
				
				$('#editRecord').on('mousedown', function(){
					
					var studentAttr = {studentName:$('#studentName').val(),
									   gradeLevel:$('#gradeLevel').val(),
									   courseName: $('#courseName').val()};
												   
					studentAttr = JSON.stringify(studentAttr);
					//alert(studentAttr);	
                    var testNo = 1;					
					$.post("/getStudent",{"studentAttr":studentAttr},function(data){
											
						console.log(data.course1.studentName);
						// Select Course for Self Test editing
					    doCourses(data,testNo);
						
					},"json");
					
				});	
				
				  function doCourses(data,testNo){				  
						var course = '';
							if(testNo <= 10){
									switch(testNo){
										case 1:
											course = data.course1;
											break;
										case 2:
											course = data.course2;
											break;
										case 3:
											course = data.course3;
											break;
										case 4:
											course = data.course4;
											break;
										case 5:
											course = data.course5;
											break;
										case 6:
											course = data.course6;
											break;
										case 7:
											course = data.course7;
											break;
										case 8:
											course = data.course8;
											break;
										case 9:
											course = data.course9;
											break;
										case 10:
											course = data.course10;
											break;
										default:
										;
									}
									
									$('#bkScore, #reportCard, #editRecord, #checkRecord').css('display','none');
									$('#stScores').css('display','block')
										  .append('<button type="button" id="editJSON" class="btn btn-default">Save Edit</button>');
									$('#selfTest1').val(course.selfTest1);
									$('#selfTest2').val(course.selfTest2);
									$('#selfTest3').val(course.selfTest3);
									$('#selfTest4').val(course.selfTest4);
									$('#selfTest5').val(course.selfTest5);
									$('#finalTest').val(course.finalTest);								
									
									$('#editJSON').on('mousedown',{testNo:testNo},function(event){  //Choose to Edit								
											if(testNo < 11){
												//alert(event.data.testNo);
												switch(testNo){  //Input edited value
												case 1:
													if(!(data.course1.studentName))
														data.course1 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course1.selfTest1 = $('#selfTest1').val();
													data.course1.selfTest2 = $('#selfTest2').val();
													data.course1.selfTest3 = $('#selfTest3').val();
													data.course1.selfTest4 = $('#selfTest4').val();
													data.course1.selfTest5 = $('#selfTest5').val();
													data.course1.finalTest = $('#finalTest').val();
													course = data.course1;
													break;
												case 2:
													if(!(data.course2.studentName))
														data.course2 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course2.selfTest1 = $('#selfTest1').val();
													data.course2.selfTest2 = $('#selfTest2').val();
													data.course2.selfTest3 = $('#selfTest3').val();
													data.course2.selfTest4 = $('#selfTest4').val();
													data.course2.selfTest5 = $('#selfTest5').val();
													data.course2.finalTest = $('#finalTest').val();
													course = data.course2;
													break;
												case 3:
													if(!(data.course3.studentName))
														data.course3 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course3.selfTest1 = $('#selfTest1').val();
													data.course3.selfTest2 = $('#selfTest2').val();
													data.course3.selfTest3 = $('#selfTest3').val();
													data.course3.selfTest4 = $('#selfTest4').val();
													data.course3.selfTest5 = $('#selfTest5').val();
													data.course3.finalTest = $('#finalTest').val();
													course = data.course3;
													break;
												case 4:
													if(!(data.course4.studentName))
														data.course4 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course4.selfTest1 = $('#selfTest1').val();
													data.course4.selfTest2 = $('#selfTest2').val();
													data.course4.selfTest3 = $('#selfTest3').val();
													data.course4.selfTest4 = $('#selfTest4').val();
													data.course4.selfTest5 = $('#selfTest5').val();
													data.course4.finalTest = $('#finalTest').val();
													course = data.course4;
													break;
												case 5:
													if(!(data.course5.studentName))
														data.course5 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course5.selfTest1 = $('#selfTest1').val();
													data.course5.selfTest2 = $('#selfTest2').val();
													data.course5.selfTest3 = $('#selfTest3').val();
													data.course5.selfTest4 = $('#selfTest4').val();
													data.course5.selfTest5 = $('#selfTest5').val();
													data.course5.finalTest = $('#finalTest').val();
													course = data.course5;
													break;
												case 6:
													if(!(data.course6.studentName))
														data.course6 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course6.selfTest1 = $('#selfTest1').val();
													data.course6.selfTest2 = $('#selfTest2').val();
													data.course6.selfTest3 = $('#selfTest3').val();
													data.course6.selfTest4 = $('#selfTest4').val();
													data.course6.selfTest5 = $('#selfTest5').val();
													data.course6.finalTest = $('#finalTest').val();
													course = data.course6;
													break;
												case 7:
													if(!(data.course7.studentName))
														data.course7 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course7.selfTest1 = $('#selfTest1').val();
													data.course7.selfTest2 = $('#selfTest2').val();
													data.course7.selfTest3 = $('#selfTest3').val();
													data.course7.selfTest4 = $('#selfTest4').val();
													data.course7.selfTest5 = $('#selfTest5').val();
													data.course7.finalTest = $('#finalTest').val();
													course = data.course7;
													break;
												case 8:
													if(!(data.course8.studentName))
														data.course8 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course8.selfTest1 = $('#selfTest1').val();
													data.course8.selfTest2 = $('#selfTest2').val();
													data.course8.selfTest3 = $('#selfTest3').val();
													data.course8.selfTest4 = $('#selfTest4').val();
													data.course8.selfTest5 = $('#selfTest5').val();
													data.course8.finalTest = $('#finalTest').val();
													course = data.course8;
													break;
												case 9:
													if(!(data.course9.studentName))
														data.course9 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course9.selfTest1 = $('#selfTest1').val();
													data.course9.selfTest2 = $('#selfTest2').val();
													data.course9.selfTest3 = $('#selfTest3').val();
													data.course9.selfTest4 = $('#selfTest4').val();
													data.course9.selfTest5 = $('#selfTest5').val();
													data.course9.finalTest = $('#finalTest').val();
													course = data.course9;
													break;
												case 10:
													if(!(data.course10.studentName))
														data.course10 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
													data.course10.selfTest1 = $('#selfTest1').val();
													data.course10.selfTest2 = $('#selfTest2').val();
													data.course10.selfTest3 = $('#selfTest3').val();
													data.course10.selfTest4 = $('#selfTest4').val();
													data.course10.selfTest5 = $('#selfTest5').val();
													data.course10.finalTest = $('#finalTest').val();
													course = data.course10;
													break;
												default:
												;
											}

											// Store values of last edited book
											course.studentName = $('#studentName').val();
											course.gradeLevel = $('#gradeLevel').val();
											course.courseName = $('#courseName').val();
											course.selfTest1 = $('#selfTest1').val();
											course.selfTest2 = $('#selfTest2').val();
											course.selfTest3 = $('#selfTest3').val();
											course.selfTest4 = $('#selfTest4').val();
											course.selfTest5 = $('#selfTest5').val();
											course.finalTest = $('#finalTest').val();
											
											// Prepare to get Prefill edit values for next book of course
											++testNo;  //Get next book in switch statement
											if(testNo <= 10){
												$('#stLabel').text('Input Self Tests Scores Below for Book '+testNo.toString());						
									
												switch(testNo){  //Used for pre-loading
													case 1:
														course = data.course1;
														break;
													case 2:
														course = data.course2;
														break;
													case 3:
														course = data.course3;
														break;
													case 4:
														course = data.course4;
														break;
													case 5:
														course = data.course5;
														break;
													case 6:
														course = data.course6;
														break;
													case 7:
														course = data.course7;
														break;
													case 8:
														course = data.course8;
														break;
													case 9:
														course = data.course9;
														break;
													case 10:
														course = data.course10;
														break;
													default:
													;
												}
												//Preload next book value
												$('#selfTest1').val(course.selfTest1);
												$('#selfTest2').val(course.selfTest2);
												$('#selfTest3').val(course.selfTest3);
												$('#selfTest4').val(course.selfTest4);
												$('#selfTest5').val(course.selfTest5);
												$('#finalTest').val(course.finalTest);
											}
											
											if(testNo == 11){  //After last book
												
												$('#editJSON').css('display','none');
												$('#stScores').css('display','none');
												$('#bkScore, #reportCard, #checkRecord').css('display','block');
												$('#studentName').val('');
												$('#gradeLevel').val('');
												$('#courseName').val('');
												console.log(data);
												json = JSON.stringify(data);										
												$.post( "/storeJSF", {"jaySonObj":json},"json");
												location.reload(); //refresh variables
											}

										}
										

									});
							}
				  }
		
			});  
		</script>
		<style>
			#stScores, #stLabel, #fLabel{
				position:relative;
				width:100%;
			}
			#stLabel{font-size:1.5em}
			#stScores{top:2em}
			
			#fLabel{margin-top:1em}
			
			.selfTestScores, .finalTestScore{
				position:relative;
				float:left;
				width:20%;
			}
			
			#courseForm button{
				position:relative;
				margin-top:1em;
				float:left;								
			}
			
			#finalTest{
				position:relative;
				width:20%;
			}
			
			#bkScore, #reportCard, #editRecord, #checkRecord{
				position:relative;
				float:left;
				width:auto;
				margin-right:2em;
			}
			
		</style>
		
      
    </head>
    <body>      

		<h2 style="position:relative;width:auto;margin-left:25%">Home School Transcript Generator</h2>
	   
        <div class="content">
				    
					<div id="courseContainer" class="container">
						<form id="courseForm" action="/course" method="post">
							{!! csrf_field() !!}
							<h2 id="newStudentHdr">Input New Student and Course</h2>
							<div class="form-group">
								<label for="title">Student Name</label>
								<input type="text" class="form-control courseInput" id="studentName" name="studentName" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="title">Grade</label>
								<input type="number" step="any" class="form-control courseInput" id="gradeLevel" name="gradeLevel" placeholder="Grade">
							</div>
							<div class="form-group">
								<label for="title">Course Name</label>
								<input type="text" class="form-control courseInput" id="courseName" name="courseName" placeholder="Name of Course">
							</div>
							<div class="form-group">
								<button type="button" id="bkScore" class="btn btn-default">Calculate Book 1 Score</button>
								<button type="button" id="reportCard" class="btn btn-default">See Report Card</button>
							    <button type="button" id="checkRecord" class="btn btn-default">Check Student/Course Record</button>
							    <button type="button" id="editRecord" class="btn btn-default">Edit Record</button>
							
							
							</div>
							<div id="stScores" class="form-group">
								<label id="stLabel" for="title">Input Self Test Scores Below for Book 1</label>
								<input type="number" step="any" class="form-control selfTestScores" id="selfTest1" name="selfTest1" value="0" placeholder="Self Test #1">
							    <input type="number" step="any" class="form-control selfTestScores" id="selfTest2" name="selfTest2" value="0" placeholder="Self Test #2">
							    <input type="number" step="any" class="form-control selfTestScores" id="selfTest3" name="selfTest3" value="0" placeholder="Self Test #3">
							    <input type="number" step="any" class="form-control selfTestScores" id="selfTest4" name="selfTest4" value="0" placeholder="Self Test #4">
							    <input type="number" step="any" class="form-control selfTestScores" id="selfTest5" name="selfTest5" value="0" placeholder="Self Test #5">
							    
								<label id="fLabel" for="title">Input Final Test Score Below</label>
								<input type="number" step="any" class="form-control" id="finalTest" name="finalTest" value="0" placeholder="Final Test">
							
							</div>
							<button type="button" id="bookSubmit" class="btn btn-default">Submit Book Score</button>
							<button id="courseSubmit" type="submit" class="btn btn-default">Submit Course Score</button>
						</form>
						<form id="reportForm" action="/report" method="post">
						{!! csrf_field() !!}
						</form>
					 </div>	
				
			
        </div>
		
	
    </body>
</html>

