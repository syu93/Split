<html>
	<head>
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/split/css/scrollbar/jquery.mCustomScrollbar.css">
		<!-- Google CDN jQuery with fallback to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
		<!-- custom scrollbars plugin -->
		<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
		<script>
			(function($){
				$(window).load(function(){
						$(".content").mCustomScrollbar({scrollButtons:{
							enable:true
						},
					});
				});
			})(jQuery);
		</script>
	<style>
		*
		{
			background:#3d3d3d;
		}
		
		.mCSB_draggerContainer
		{
			border-radius:3px;
		}
	</style>
	</head>
	<body>
	<div class="content" style="width:1000px; height:500px;">
		<iframe style="width:100%; height:auto;" id="" name="" class="" src="http://127.0.0.1/split/minicart.php"scrolling="no"></iframe>
	</div>
	</body>
<html>