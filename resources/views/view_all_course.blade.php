
<!DOCTYPE hmtl>
<html>
<head>
	<title></title>
	<link href="{{asset('css/dashboardadminedit&del.css')}}" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
        <div class="menu">
                <h3 id="h3_1">Welcome,</h3>
                <h4 id="h4_1">Learning Management System</h4>
                <h2 id="h2_1">Admin</h2>
                <a href="/uselesshome">Home</a>
                <a href="/add-course">Add Course</a>
                <a href="/view-all-course">View Course</a>
                <a href="/add-class">Add Class</a>
                <a href="/view-all-class">View Class</a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
	<div class="container">
    <h3>Course List</h3>
    @foreach ($courses as $course)
    <div class="Course">
			<p>{{$course->course_name}} <a href="/delete-course/{{$course->id}}"><button id="myBtn" class="btnadd"><button id="btnDel_1" class="btndel"><i class="material-icons" >delete</i></button></button></a> </p>
		</div> 
    @endforeach
		
		

</div>


<script src="./js/dashboardadmin.js"></script>	 
</body>
</html>