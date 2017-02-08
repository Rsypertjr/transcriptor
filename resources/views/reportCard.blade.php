<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Student Transcript</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>	
			jQuery(document).ready(function() {
				$('#createPDF').on('submit',function(e){
					e.preventDefault();
					$('#pdfSubmit, #retFront').css('display','none');
					
					
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});			
					
				    var htm_l = $('html').html();
					var courseAttributes = $('#courseAttributes').val();
					//alert(courseAttributes);
					$.ajax({
						url: "/createPDF",
						type: "POST",
						data: {							
							'data': htm_l,
							'courseAttributes': courseAttributes
							
						}, success: function(response) {
							$('#pdfSubmit, #retFront').css('display','block');
						}
					});
				});
				
				
				$('#retFront').on('mousedown',function(){
					$('form#returnFront').submit();
				});
			
			});
		</script>
        <style>
			#pdfSubmit {
				position:relative;
				float:left;
				margin-left:27.5%;
				font-size:1.5em;
				width:auto;
				top:0.25em;
			}
			
			#retFront{
				position:relative;
				float:left;
				width:auto;
				margin-left:3%;
				top:0.25em;				
				font-size:1.5em;
			}
		</style>
    </head>
    <body>      

		<h2 style="position:relative;width:auto;margin-left:35%">Transcript for {!! $name !!}</h2>
	   
        <div class="content">
				@if (count($courses) > 0)
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="panel panel-success">
								<div class="panel-heading">Alpha and Omega HomeSchool Courses</div>						
									<!-- Table -->
									<table class="table table-bordered table-striped">
										<tr>
											<th>Student Name</th>
											<th>GradeLevel</th>								
											<th>Course Name</th>								
											<th>Grade</th>
										</tr>
									  @foreach($courses as $course)
										<tr>
											<td>{{ $course->studentName}}</td>
											<td>{{ $course->gradeLevel }}</td>
											<td>{{ $course->courseName }}</td>
											<td>{{ $course->finalScore }}</td>
										</tr>
									  @endforeach
									</table>				
								</div>
							</div>
						</div>
					</div>
				@endif

				@if (count($students) > 0)
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="panel panel-success">
								<div class="panel-heading">Final Grades</div>						
									<!-- Table -->
									<table class="table table-bordered table-striped">
										<tr>
											<th>Student Name</th>
											<th>1st Grade</th>								
											<th>2nd Grade</th>	
											<th>3rd Grade</th>
											<th>4th Grade</th>
											<th>5th Grade</th>								
											<th>6th Grade</th>	
											<th>7th Grade</th>
											<th>8th Grade</th>
											<th>9th Grade</th>		
											<th>10th Grade</th>	
											<th>11th Grade</th>
											<th>12th Grade</th>
										</tr>
									  @foreach($students as $student)
										<tr>
										    <td>{{ $student->name}}</td>
											<td>{{ $student->firstGradeScore}}</td>
											<td>{{ $student->secondGradeScore}}</td>
											<td>{{ $student->thirdGradeScore}}</td>
											<td>{{ $student->fourthGradeScore}}</td>
											<td>{{ $student->fifthGradeScore}}</td>
											<td>{{ $student->sixthGradeScore}}</td>
											<td>{{ $student->seventhGradeScore}}</td>
											<td>{{ $student->eighthGradeScore}}</td>
											<td>{{ $student->ninthGradeScore}}</td>
											<td>{{ $student->tenthGradeScore}}</td>
											<td>{{ $student->eleventhGradeScore}}</td>
											<td>{{ $student->twelfthGradeScore}}</td>
										</tr>
									  @endforeach
									</table>				
								</div>
							</div>
						</div>
					</div>
				@endif
				
				<form id="createPDF" action="/createPDF" method="post">
						{!! csrf_field() !!}
						@foreach($courses as $course)
							<input type="hidden" id="courseAttributes" name="courseAttributes" value="{{$course}}"></input>
						    @break;
						@endforeach
						<button id="pdfSubmit" type="submit" class="btn btn-default">Generate PDF of Transcript</button>
				        <button id="retFront" type="button" class="btn btn-default">Return to Front</button>
			
				</form>	
				<form id="returnFront" action="/cinp" method="get">
					{!! csrf_field() !!}	
				</form>
				
			
        </div>

    </body>
</html>

