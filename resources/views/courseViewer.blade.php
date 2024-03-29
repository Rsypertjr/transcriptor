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
			var courseScores = {book1:"",book2:"",book3:"",book4:"",book5:"",book6:"",
								book7:"",book8:"",book9:"",book10:""};  
			
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

								  $.ajaxSetup({
										headers: {
											'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
										}
									});
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

								$.ajaxSetup({
										headers: {
											'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
										}
									});
								$.post( "/checkStudent", {"studentAttr":studentAttr},function(data){
									alert(JSON.stringify(data));
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
					
					/// Event and Function for Book Submit
					$('#bookSubmit').on('mousedown',function(){			
                        
						doBookSubmit(null,null);
						
					});


				      function doBookSubmit(rebuild = null,bkCount=null){						
					

						if(rebuild == 'yes')
							noBooks = bkCount;

						 	//Get test values		
						$('#bookSubmit').css('display','block');
						$('#studentName').prop('disabled',true);
						$('#gradeLevel').prop('disabled',true);
						$('#courseName').prop('disabled',true);
						
						var bookScore = {studentName:"",gradeLevel:"",courseName:"",
								selfTest1:0,selfTest2:0,selfTest3:0,selfTest4:0,selfTest5:0,finalTest:0,rebuild:''};
								
						bookScore.studentName = $('#studentName').val();
						bookScore.gradeLevel = $('#gradeLevel').val();
						bookScore.courseName = $('#courseName').val();
						bookScore.selfTest1 = $('#selfTest1').val();
						bookScore.selfTest2 = $('#selfTest2').val();
						bookScore.selfTest3 = $('#selfTest3').val();
						bookScore.selfTest4 = $('#selfTest4').val();
						bookScore.selfTest5 = $('#selfTest5').val();
						bookScore.finalTest = $('#finalTest').val(); 
						if(rebuild != null)
							bookScore.rebuild = rebuild;
						else
							bookScore.rebuild = null;
												
						switch(noBooks)	{
							case 1:
								courseScores.book1 = bookScore;
								break;
							case 2:
							    courseScores.book2  = bookScore;
								break;
							case 3:
								courseScores.book3  = bookScore;
								break;
							case 4:
								courseScores.book4  = bookScore;
								break;
							case 5:
							    courseScores.book5  = bookScore;
								break;
							case 6:
								courseScores.book6  = bookScore;
								break;
							case 7:
								courseScores.book7  = bookScore;
								break;
							case 8:
								courseScores.book8  = bookScore;
								break;
							case 9:	
								courseScores.book9  = bookScore;
								break;
							case 10:
								courseScores.book10  = bookScore;
								break;
							default:
								;
						}
							
			
						
						noSelfTests++;
						json = JSON.stringify(courseScores);
						
                        // Reset inputs						
						$('#selfTest1').val(0);
						$('#selfTest2').val(0);
						$('#selfTest3').val(0);
						$('#selfTest4').val(0);
						$('#selfTest5').val(0);
						$('#finalTest').val(0);  

						if(rebuild == 'yes')
							noBooks = bkCount;
						else
							++noBooks;  // count # of books


						$.ajaxSetup({
								headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								}
							});

						console.log(json);
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
							
							//$.post( "/course", {"testScores":json});
							
							
						}
						else{
							$('#bookSubmit').css('display','block').text('Submit Book '+(noBooks).toString()+' Score');
							$('#stLabel').text('Input Self Tests Scores Below for Book '+noBooks.toString());						
							$('#bkScore').css('display','none');
						}
						return;
					}
				
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
				$.ajaxSetup({
								headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								}
							});		
				$.post("/getStudent",{"studentAttr":studentAttr},function(data){
							
					console.log(data.book1.studentName);
					// Select Course for Self Test editing
					doCourses(data,testNo);
					
				},"json");
				
			});	

           // Clear and Recreate Database from Json Text files
			$('#renewDatabase').on('mousedown', function(){
				
				$.ajaxSetup({
								headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								}
							});
				$.post("/renewDatabase",function(data){
		
					var courseScorez = JSON.parse(JSON.stringify(data));	
					courseScorez = courseScorez.courseScores;				

					$.post( "/clearDatabase");  // Remove databases rows

				    console.log(courseScorez);
                    if(courseScorez.length > 0){
						courseScorez.forEach(function(course){
								var result = Object.keys(course).map(function (key,index) { 							
										return [index, course[key]]; 
									}); 
								course = result;

							

								course.forEach(function(book){
									//alert(JSON.stringify(book[0]));

									
									$('#studentName').val(book[1].studentName.replace('.',''));
									$('#courseName').val(book[1].courseName);
									$('#gradeLevel').val(book[1].gradeLevel);
									$('#selfTest1').val(book[1].selfTest1);
									$('#selfTest2').val(book[1].selfTest2);
									$('#selfTest3').val(book[1].selfTest3);
									$('#selfTest4').val(book[1].selfTest4);
									$('#selfTest5').val(book[1].selfTest5);
								    $('#finalTest').val(book[1].finalTest);

									doBookSubmit('yes',parseInt(book[0])+1);
									
									
								});
						});
						
					}
					//alert(JSON.stringify(data));					
				},"json");
				
			});	


		
		  function doCourses(data,testNo){				  
				var book = '';
					if(testNo <= 10){
							switch(testNo){
								case 1:
									book = data.book1;
									break;
								case 2:
									book = data.book2;
									break;
								case 3:
									book = data.book3;
									break;
								case 4:
									book = data.book4;
									break;
								case 5:
									book = data.book5;
									break;
								case 6:
									book = data.book6;
									break;
								case 7:
								    book = data.book7;
									book = data.book7;
									book = data.course7;
									break;
								case 8:
									book = data.book8;
									break;
								case 9:
									book = data.book9;
									break;
								case 10:
									book = data.book10;
									break;
								default:
								;
							}
							
							$('#bkScore, #reportCard, #editRecord, #checkRecord').css('display','none');
							$('#stScores').css('display','block')
								  .append('<button type="button" id="editJSON" class="btn btn-default">Save Edit</button>');
							$('#selfTest1').val(book.selfTest1);
							$('#selfTest2').val(book.selfTest2);
							$('#selfTest3').val(book.selfTest3);
							$('#selfTest4').val(book.selfTest4);
							$('#selfTest5').val(book.selfTest5);
							$('#finalTest').val(book.finalTest);								
							
							$('#editJSON').on('mousedown',{testNo:testNo},function(event){  //Choose to Edit								
									if(testNo < 11){
										//alert(event.data.testNo);
										switch(testNo){  //Input edited value
										case 1:
											if(!(data.book1.studentName))
												data.book1 = $.parseJSON('{"studentName":"","gradeLevel":"","courseName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book1.selfTest1 = $('#selfTest1').val();
											data.book1.selfTest2 = $('#selfTest2').val();
											data.book1.selfTest3 = $('#selfTest3').val();
											data.book1.selfTest4 = $('#selfTest4').val();
											data.book1.selfTest5 = $('#selfTest5').val();
											data.book1.finalTest = $('#finalTest').val();
											book = data.book1;
											break;
										case 2:
											if(!(data.book2.studentName))
												data.book2 = $.parseJSON('{"studentName":"","gradeLevel":"","bookName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book2.selfTest1 = $('#selfTest1').val();
											data.book2.selfTest2 = $('#selfTest2').val();
											data.book2.selfTest3 = $('#selfTest3').val();
											data.book2.selfTest4 = $('#selfTest4').val();
											data.book2.selfTest5 = $('#selfTest5').val();
											data.book2.finalTest = $('#finalTest').val();
											book = data.book2;
											break;
										case 3:
											if(!(data.book3.studentName))
												data.book3 = $.parseJSON('{"studentName":"","gradeLevel":"","bookName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book3.selfTest1 = $('#selfTest1').val();
											data.book3.selfTest2 = $('#selfTest2').val();
											data.book3.selfTest3 = $('#selfTest3').val();
											data.book3.selfTest4 = $('#selfTest4').val();
											data.book3.selfTest5 = $('#selfTest5').val();
											data.book3.finalTest = $('#finalTest').val();
											book = data.book3;
											break;
										case 4:
											if(!(data.book4.studentName))
												data.book4 = $.parseJSON('{"studentName":"","gradeLevel":"","bookName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book4.selfTest1 = $('#selfTest1').val();
											data.book4.selfTest2 = $('#selfTest2').val();
											data.book4.selfTest3 = $('#selfTest3').val();
											data.book4.selfTest4 = $('#selfTest4').val();
											data.book4.selfTest5 = $('#selfTest5').val();
											data.book4.finalTest = $('#finalTest').val();
											book = data.book4;
											break;
										case 5:
											if(!(data.book5.studentName))
												data.book5 = $.parseJSON('{"studentName":"","gradeLevel":"","bookName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book5.selfTest1 = $('#selfTest1').val();
											data.book5.selfTest2 = $('#selfTest2').val();
											data.book5.selfTest3 = $('#selfTest3').val();
											data.book5.selfTest4 = $('#selfTest4').val();
											data.book5.selfTest5 = $('#selfTest5').val();
											data.book5.finalTest = $('#finalTest').val();
											book = data.book5;
											break;
										case 6:
											if(!(data.book6.studentName))
												data.book6 = $.parseJSON('{"studentName":"","gradeLevel":"","bookName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book6.selfTest1 = $('#selfTest1').val();
											data.book6.selfTest2 = $('#selfTest2').val();
											data.book6.selfTest3 = $('#selfTest3').val();
											data.book6.selfTest4 = $('#selfTest4').val();
											data.book6.selfTest5 = $('#selfTest5').val();
											data.book6.finalTest = $('#finalTest').val();
											book = data.book6;
											break;
										case 7:
											if(!(data.book7.studentName))
												data.book7 = $.parseJSON('{"studentName":"","gradeLevel":"","bookName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book7.selfTest1 = $('#selfTest1').val();
											data.book7.selfTest2 = $('#selfTest2').val();
											data.book7.selfTest3 = $('#selfTest3').val();
											data.book7.selfTest4 = $('#selfTest4').val();
											data.book7.selfTest5 = $('#selfTest5').val();
											data.book7.finalTest = $('#finalTest').val();
											book = data.book7;
											break;
										case 8:
											if(!(data.book8.studentName))
												data.book8 = $.parseJSON('{"studentName":"","gradeLevel":"","bookName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book8.selfTest1 = $('#selfTest1').val();
											data.book8.selfTest2 = $('#selfTest2').val();
											data.book8.selfTest3 = $('#selfTest3').val();
											data.book8.selfTest4 = $('#selfTest4').val();
											data.book8.selfTest5 = $('#selfTest5').val();
											data.book8.finalTest = $('#finalTest').val();
											book = data.book8;
											break;
										case 9:
											if(!(data.book9.studentName))
												data.book9 = $.parseJSON('{"studentName":"","gradeLevel":"","bookName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book9.selfTest1 = $('#selfTest1').val();
											data.book9.selfTest2 = $('#selfTest2').val();
											data.book9.selfTest3 = $('#selfTest3').val();
											data.book9.selfTest4 = $('#selfTest4').val();
											data.book9.selfTest5 = $('#selfTest5').val();
											data.book9.finalTest = $('#finalTest').val();
											book = data.book9;
											break;
										case 10:
											if(!(data.book10.studentName))
												data.book10 = $.parseJSON('{"studentName":"","gradeLevel":"","bookName":"","selfTest1":"","selfTest2":"","selfTest3":"","selfTest4":"","selfTest5":"","finalTest":""}');
											data.book10.selfTest1 = $('#selfTest1').val();
											data.book10.selfTest2 = $('#selfTest2').val();
											data.book10.selfTest3 = $('#selfTest3').val();
											data.book10.selfTest4 = $('#selfTest4').val();
											data.book10.selfTest5 = $('#selfTest5').val();
											data.book10.finalTest = $('#finalTest').val();
											book = data.book10;
											break;
										default:
										;
									}

									// Store values of last edited book
									book.studentName = $('#studentName').val();
									book.gradeLevel = $('#gradeLevel').val();
									book.bookName = $('#courseName').val();
									book.selfTest1 = $('#selfTest1').val();
									book.selfTest2 = $('#selfTest2').val();
									book.selfTest3 = $('#selfTest3').val();
									book.selfTest4 = $('#selfTest4').val();
									book.selfTest5 = $('#selfTest5').val();
									book.finalTest = $('#finalTest').val();
									
									// Prepare to get Prefill edit values for next book of course
									++testNo;  //Get next book in switch statement
									if(testNo <= 10){
										$('#stLabel').text('Input Self Tests Scores Below for Book '+testNo.toString());						
							
										switch(testNo){  //Used for pre-loading
											case 1:
												book = data.book1;
												break;
											case 2:
												book = data.book2;
												break;
											case 3:
												book = data.book3;
												break;
											case 4:
												book = data.book4;
												break;
											case 5:
												book = data.book5;
												break;
											case 6:
												book = data.book6;
												break;
											case 7:
												book = data.book7;
												break;
											case 8:
												book = data.book8;
												break;
											case 9:
												book = data.book9;
												break;
											case 10:
												book = data.book10;
												break;
											default:
											;
										}
										//Preload next book value
										$('#selfTest1').val(book.selfTest1);
										$('#selfTest2').val(book.selfTest2);
										$('#selfTest3').val(book.selfTest3);
										$('#selfTest4').val(book.selfTest4);
										$('#selfTest5').val(book.selfTest5);
										$('#finalTest').val(book.finalTest);
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
                                       // alert(json);			

									   	$.ajaxSetup({
												headers: {
													'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
												}
											});						
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

			#renewDatabase {
				position:relative;
				float:right;
			}
			
		</style>
		
      
    </head>
    <body>      
		<div class="container">
			<h2 style="position:relative;width:auto;margin-left:25%">Home School Transcript Generator</h2>
			<button  type="button" id="renewDatabase" class="btn btn-default">Renew Database Record</button>
		</div>
	   
        <div class="content">
				    
					<div id="courseContainer" class="container">
						<form id="courseForm" action="/course" method="post">
							{!! csrf_field() !!}
							<h2  id="newStudentHdr">Input New Student and Course</h2> 
							<div class="form-group">
								<label for="studentName">Student Name</label>
								<input type="text" class="form-control courseInput" id="studentName" name="studentName" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="gradeLevel">Grade</label>
								<input type="number" step="any" class="form-control courseInput" id="gradeLevel" name="gradeLevel" placeholder="Grade">
							</div>
							<div class="form-group">
								<label for="courseName">Course Name</label>
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

