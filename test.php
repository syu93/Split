	

<html>
<head>
<style type="text/css">
  .highlight { 
  	background:green;
  }
 </style>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <h1>jQuery add / remove css class example</h1>
 
  <p id="para1">This is paragraph 1</p>
  <p>This is paragraph 2</p>
  <p>This is paragraph 3</p>
  <p>This is paragraph 4</p>
 
  <button id="addClass">Add highlight</button>
  <button id="removeClass">Remove highlight</button>
 
<script type="text/javascript">
 
    $("#addClass").click(function () {
 
	  $('#para1').addClass('OCoff');
 
    });
 
    $("#removeClass").click(function () {
 
	  $('#para1').removeClass('OCoff');
 
    });
 
</script>
</body>
</html>