<!DOCTYPE html>
<html>
<head>
	<title>Tooltip</title>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Rosario' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="stylesheets/flashyTooltip.css">
	<style type="text/css">
		html {
			font-family: verdana, arial;
			font-size: 12px;
		}
		span div {
			display: none;
		}
		#content1 {
			position: fixed;
			top: 5px;
			left: 5px;
		}
		#content2 {
			position: fixed;
			top: 5px;
			right: 5px;
		}
		#content3 {
			position: fixed;
			bottom: 5px;
			left: 5px;
		}
		#content4 {
			position: fixed;
			bottom: 5px;
			right: 5px;
		}
	</style>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="javascript/flashyTooltip.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {

			$('.tooltip').FlashyTooltip();

		});
	</script>
</head>
<body>
	<div id="content1">
		Hier komt een tekstje waarin <span class="tooltip" data-tooltip="Hier kan je een uitleg schrijven over deze content1. En deze kan in principe toch redelijk lang worden, niet?"> tooltip1</span> gaat komen.
	</div>
	<div id="content2">
		Hier komt een tekstje waarin <span class="tooltip" data-tooltip="Hier kan je een uitleg schrijven over deze content2. En deze kan in principe toch redelijk lang worden, niet?"> tooltip2</span> gaat komen.
	</div>
	<div id="content3">
		Hier komt een tekstje waarin <span class="tooltip" data-tooltip="Hier kan je een uitleg schrijven over deze content3. En deze kan in principe toch redelijk lang worden, niet?"> tooltip3</span> gaat komen.
	</div>
	<div id="content4">
		Hier komt een tekstje waarin <span class="tooltip" data-tooltip="Hier kan je een uitleg schrijven over deze content4. En deze kan in principe toch redelijk lang worden, niet?"> tooltip4</span> gaat komen.
	</div>
</body>
</html>