<!DOCTYPE html>
<html>
<head>
<title>ajax page reload</title>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#box").load("dashconncet.php");
var refreshId = setInterval(function(){
$("#box").load("dashconnet.php");
},2000);
$.ajaxSetup({cache:false});
});
</script>
</head>
<body>
<h1> Welcome to Address Book</h1>
<div id="box"></div>
</body>
</html>