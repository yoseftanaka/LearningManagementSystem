{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action = "/store-course" method="POST">
        @csrf
        <input type="text" name="course_name" placeholder="course name">
        <button type="submit">Submit</button>
    </form>
</body>
</html> --}}


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{asset('css/dashboardadminadd.css')}}" type="text/css" rel="stylesheet">
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
        <form action = "/store-course" method="POST">
            @csrf
			<p>Course Name</p>
			<input type="text" name="course_name" id="courseName" placeholder="Input Class Name"><br>
			<input type="submit" name="" value="Add New Course">
		</form>
	</div>


	 
</body>
</html>