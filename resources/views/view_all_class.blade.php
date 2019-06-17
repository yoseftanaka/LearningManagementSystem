
<!DOCTYPE>
<html>
<head>
	<title></title>
	<link href="{{asset('css/adminclasslist.css')}}" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
		<h3 id="h3_2">Class List</h3>
			<div class="contain">
                    @foreach ($classes as $class)
                    <ul>
                            <li>
                                <span>
                                    {{$class->course_name}}
                                </span>
                                    <h4>{{$class->day_name}},</h4>
                                    <h4 >{{$class->start_time}} - {{$class->end_time}}</h4><br>
                                    <p class="pengajar">Pengajar<br>
                                        {{$class->name}}</p>
                                    
                                    <a href="/view-class-detail/{{$class->id}}"><button id="myBtn" class="btn"><i class="fas fa-align-justify"></i></button></a>
                                    
                            </li>
                        </ul>
                    @endforeach
                    
			</div>	
	</div>
	<script src="{{asset('js/admin.js')}}"></script>
</body>
</html>