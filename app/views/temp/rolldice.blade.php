<!doctype html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
</body>
    This is the random number you rolled: {{{$random}}}<br>
    Your guess was: {{{$guess}}}<br>

	@if ($random == $guess) 
		<p>Wooho!</p>
	@else
		<p>Try Again.</p>
	@endif
</body>
</html>