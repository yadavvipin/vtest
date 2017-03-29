<html>
<head>
	
	@if(is_array($number))
	@foreach($number as $n)
	<script src="http://mysms.springstrategies.in/API/WebSMS/Http/v1.0a/index.php?username=spring&password=123456&sender=SPRING&to={{$n}}&message={{$message}}&reqid=1&format=text&unique=1"></script>
	@endforeach
	@else
	<script src="http://mysms.springstrategies.in/API/WebSMS/Http/v1.0a/index.php?username=spring&password=123456&sender=SPRING&to={{$number}}&message={{$message}}&reqid=1&format=text&unique=1"></script>
	@endif
	<script>
		
	function redirectMe(){
		setTimeout(function(){
			window.location.href = "{{$backurl}}";
		},
			10000
		)
	}
	</script>
</head>
	<body onload="redirectMe()">
		{{$number}}
		<h1>
	Please wait while SMS are being sent...</h1>
		<center>
		<img src="https://d13yacurqjgara.cloudfront.net/users/503653/screenshots/3143656/fluid-loader.gif">
			</center>
	</body>
</html>