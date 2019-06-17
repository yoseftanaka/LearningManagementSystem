<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is admin</h1>
    <div>
        <h3>Available course</h3>
    @foreach ($courses as $course)
<div>{{$course->course_name}}</div>
    @endforeach
    </div>
    <div>
        <h3>available class</h3>
        @foreach ($classes as $class)
    <p>Course :{{$class->course_name}}<br>Lecturer :{{$class->name}}<br>Day :{{$class->day_name}}<br>Shift :{{$class->start_time}} - {{$class->end_time}}</p>
    <a href="/view-class-detail/{{$class->id}}"><button>View class detail</button></a>
        @endforeach
    </div>
    <a href="/add-course"><button>Add course</button></a>
    <a href="/add-class"><button>Add class</button></a>
    <a href="/change-password"><button>change password</button></a>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>