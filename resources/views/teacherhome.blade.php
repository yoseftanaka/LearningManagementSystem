{{-- <!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="/css/dashboardnew.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div class="menu">
                <h3 id="h3_1">Welcome,</h3>
                <h4 id="h4_1">{{ $name }}</h4>
                <h2 id="h2_1">Pengajar</h2>
                <a href="/teacher/uselesshome">Home</a>
                <a href="/teacher/home">Lecture Class</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        <div class="word">
            <h3 id="h3_2">Welcome</h3>
            <p id="p_1">Periode 2019 Term Even Semester</p>
        </div>
        <div>
            @foreach ($classes as $class)
            <p>
                Course :{{$class->course_name}}<br />Day :{{$class->day_name

                }}<br />Shift :{{$class->start_time}} - {{$class->end_time}}
            </p>
            <a href="/view-class-detail/{{$class->id}}"
                ><button>View class detail</button></a
            >
            @endforeach
        </div>
        <a href="/change-password"><button>change password</button></a>
    </body>
</html> --}}



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{asset('css/dashboardpengajar.css')}}" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
        <div class="menu">
                <h3 id="h3_1">Welcome,</h3>
                <h4 id="h4_1">{{ Auth::user()->name }}</h4>
                <h2 id="h2_1">Pengajar</h2>
                <a href="/teacher/uselesshome">Home</a>
                <a href="/teacher/home">Lecture Class</a>
                <form action="/logout" method="POST">
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
                                
                                
                                <a href="/view-class-detail/{{$class->id}}"><button id="myBtn" class="btn"><i class="fas fa-align-justify"></i></button></a>
                                
                                
                        </li>
                    </ul>
                @endforeach
				
			</div>	
	</div>

<script src="./js/pengajar.js"></script>
	 
</body>
</html>