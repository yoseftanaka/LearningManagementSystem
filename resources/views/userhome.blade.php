<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="{{ asset('css/siswaclasslist.css') }}" type="text/css" rel="stylesheet" />
</head>

<body>
	<div class="menu">
		<h3 id="h3_1">Welcome,</h3>
        <h4 id="h4_1">{{Auth::user()->name}}</h4>
		<h2 id="h2_1">siswa</h2>
		<a href="/user/uselesshome">Home</a>
		<a href="/user/home">Class</a>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">Logout</button>
		</form>
	</div>
	<div class="word">
		<h3 id="h3_2">Class List</h3>
			<div class="contain">
                    @if($haveclass==1)
                    <ul>
                            <li>
                                <span>
                                    {{$classes->course_name}}
                                </span>
                                    <h4>{{$classes->day_name}},</h4>
                                    <h4 >{{$classes->start_time}} - {{$classes->end_time}}</h4><br>
                                    <p class="pengajar">Pengajar<br>
                                        {{$classes->name}}</p>
                                    
                                    <a href="/view-class-detail/{{$classes->id}}"><button id="myBtn" class="btn"><i class="fas fa-align-justify"></i></button></a>
                                    
                            </li>
                        </ul>

                @else
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
                                    <a href="/register-class/{{$class->id}}/{{Auth::id()}}"><button>Register</button></a>
                                    
                            </li>
                        </ul>
                    @endforeach
                @endif
				
			</div>	
	</div>

<script src="{{ asset('js/pengajar.js') }}"></script>
	 
</body>
</html>