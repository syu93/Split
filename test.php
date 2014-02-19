<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script type="text/javascript">
function populateList() {
var teamArray = ["Select a Team",
 "Smith-Woods", 
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Jones-Ebert",
 "Bohme-Quester"];
var arLen=teamArray.length;
for(var i=0; i<arLen; i++){
    document.form1.team.options[i]=new Option(teamArray[i], i);
    }
}

window.onload=populateList;
</script>

<style type="text/css">
</style>

</head>
<body>
<form action="#" method="" name="form1">
<div>
<select name="team" onchange="getScorecard(this)">
</select>
</div>
</form>
</body>