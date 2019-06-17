
<!DOCTYPE>
<html>
<head>
	<title></title>
	<link href="{{ asset('css/siswa.css') }}" type="text/css" rel="stylesheet">
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
		<h3 id="h3_2">Welcome</h3>
		<p id="p_1">Periode 2019 Term Even Semester</p>
	</div>


	 
</body>
</html>