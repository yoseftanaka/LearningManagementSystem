<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Course :{{$class->course_name}}<br>Lecturer :{{$class->name}}<br>Day :{{$class->day_name}}<br>Shift :{{$class->start_time}} - {{$class->end_time}}</p>
    <p>Member Regitered</p>
    @foreach ($members as $member)
<p>{{$member->name}}</p>
    @endforeach
</body>
</html>