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
			var courseScore = {studentName:"",gradeLevel:"",courseName:"",
								selfTest1:0,selfTest2:0,selfTest3:0,selfTest4:0,selfTest5:0,finalTest:0};
			
			var courseScores = {course1:"",course2:"",course3:"",course4:"",course5:"",course6:"",
								course7:"",course8:"",course9:"",course10:""};
								
			jQuery(document).ready(function() {
			        $('#bkScore').css('display','block').text("Calculate Book "+noBooks.toString()+" Score");
			       
					
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
						  else{
								  $('#stLabel').text('Input Self Tests Scores Below for Book '+noBooks.toString());						
									
								  $('#newStudentHdr').css('display','none');
								  $('#reportCard').css('display','none');
								  $('#stScores').css('display','block');   
								  $('#bookSubmit').css('top','1em');
								  $(this).css('display','none');
								  $('#bookSubmit').css('display','block').text("Submit Book "+(noBooks).toString()+" Score");
						  }
					});
					
					
					$('#bookSubmit').on('mousedown',function(){						
						
						//alert(noBooks);
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
							courseScores.course1 = courseScore;
							break;
							case 2:
							courseScores.course2 = courseScore;
							break;
							case 3:
							courseScores.course3 = courseScore;
							break;
							case 4:
							courseScores.course4 = courseScore;
							break;
							case 5:
							courseScores.course5 = courseScore;
							break;
							case 6:
							courseScores.course6 = courseScore;
							break;
							case 7:
							courseScores.course7 = courseScore;
							break;
							case 8:
							courseScores.course8 = courseScore;
							break;
							case 9:
							courseScores.course9 = courseScore;
							break;
							case 10:
							courseScores.course10 = courseScore;
							break;
							default:
							;
						}
							
					    $('#selfTest1').val(0);
						$('#selfTest2').val(0);
						$('#selfTest3').val(0);
						$('#selfTest4').val(0);
						$('#selfTest5').val(0);
						$('#finalTest').val(0);  
						
						noSelfTests++;
						//alert(noSelfTests.toString());
						++noBooks;
						if(noBooks == 11){
							json = JSON.stringify(courseScores);
							//alert(json);
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
			
			#bkScore, #reportCard{
				position:relative;
				float:left;
				width:20%;
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

