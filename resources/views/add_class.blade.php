{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
    </head>
    <body>
        <form action="/store-class" method="post">
            @csrf
            <select name="course">
                @foreach ($courses as $course)
                <option
                    value="{{$course->id}}"
                    >{{$course->course_name}}</option
                >
                @endforeach
            </select>
            <select name="lecturer">
                @foreach ($lecturers as $lecturer)
                <option value="{{$lecturer->id}}">{{$lecturer->name}}</option>
                @endforeach
            </select>
            <select name="day">
                @foreach ($days as $day)
                <option value="{{$day->id}}">{{$day->day_name}}</option>
                @endforeach
            </select>
            <select name="shift">
                @foreach ($shifts as $shift)
                <option value="{{$shift->id}}"
                    >{{$shift->start_time}} - {{$shift->end_time}}</option
                >
                @endforeach
            </select>
            <button type="submit">Create class</button>
        </form>
    </body>
</html> --}}



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!DOCTYPE>
<html>
<head>
	<title></title>
	<link href="{{asset('css/adminclass.css')}}" type="text/css" rel="stylesheet">
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
        <form action="/store-class" method="post">
            @csrf
			<table>
				<tr>
					<td>
						Course 
					</td>
					<td>
						<select name="course" id="course">
                                @foreach ($courses as $course)
                                <option
                                    value="{{$course->id}}"
                                    >{{$course->course_name}}</option
                                >
                                @endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>Mentor</td>
					<td>
					<select name="lecturer" id="mentor">
                            @foreach ($lecturers as $lecturer)
                            <option value="{{$lecturer->id}}">{{$lecturer->name}}</option>
                            @endforeach
					</select>
					</td>
				</tr>
				<tr>
					<td>Day</td>
					<td>
					<select name="day" id="day">
                            @foreach ($days as $day)
                            <option value="{{$day->id}}">{{$day->day_name}}</option>
                            @endforeach
					</select>
					</td>
				</tr>
				<tr>
					<td>Shift</td>
					<td>
					<select name="shift" id="shift">
                            @foreach ($shifts as $shift)
                            <option value="{{$shift->id}}"
                                >{{$shift->start_time}} - {{$shift->end_time}}</option
                            >
                            @endforeach
					</select>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="">
					</td>
				</tr>
			</table>
		</form>		
	</div>


	 
</body>
</html>

</body>
</html>