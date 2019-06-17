
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{asset('css/dashboardadmin.css')}}" type="text/css" rel="stylesheet">
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
	<div class="word">
		<h3 id="h3_2">Welcome</h3>
		<p id="p_1">Periode 2019 Term Even Semester</p>
	</div>


	 
</body>
</html>