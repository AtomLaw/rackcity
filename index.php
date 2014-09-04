<?php 
$testLocal = FALSE;
?>
<!doctype html>
<html lang="en">
<head>
<title>Rack City</title>
<meta charset="utf-8">
<!-- <link href='http://fonts.googleapis.com/css?family=Lobster&text=LoopWaveformVisualizer' rel='stylesheet' type='text/css'> -->
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<h1>Rack City</h1>
<form id="sc_form">
	<input type="text" id="sc_url" name="url" placeholder="soundcloud url" value="https://soundcloud.com/savoyband/chromeo-jealous-savoy-remix"/>
	<input type="submit"/>
</form>
<div id="loading"></div>
<div id="info">Cool Shit</div>
<canvas id="debugCtx" width=5 height=5></canvas>
<?php 
if(!$testLocal)
	echo '<script src="//cdnjs.cloudflare.com/ajax/libs/three.js/r68/three.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//connect.soundcloud.com/sdk.js"></script>
';
else
	echo '<script src="js/three.min.js"></script>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/soundcloud.js"></script>
';
?>

<script src="js/dat.gui.min.js"></script>
<script data-main="app" src="js/require.js"></script>
</body>
</html>