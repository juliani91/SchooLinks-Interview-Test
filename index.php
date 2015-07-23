<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style>
body{
	font-family: Helvetica, Arial, sans-serif;
}
	ul{
		
		border:1px solid black;
		width:50%;
		position: absolute;
		left: 250px;

	}
	#centered{
		text-align: center;
		position:relative;

	}
	li{
		margin-top:10px;
		border-bottom: 1px solid black;
		font-size: 14pt;
		list-style-type: none;
		text-align: center;
	}
	 
	  table {
    display: inline-block;
    text-align: center;
    }
    td{
    	text-align: left;
    }
    h1{
	text-align: center;
    }
    h3{
    	text-align: center;
    }
	#myForm{
		text-align: center;
	}
	#t1,#t2,#t3{
		border-radius: 3px;
		width:200px;
	}
	#name-submit{
		padding: 10px;
		
	}
</style>


</head>
<body>
	
	<h1>SchoolLinks / Directory</h1>
	<h3>New Item</h3>
	<form action="" name="myForm" method="post" id="myForm">

		<table>
			<tr>
				<td>Name</td>
			</tr>
			<td><input type="text" name="name" id="t1"></td>
			<tr>
				<td>Email</td>
			</tr>
			<td><input type="email" name="email" id="t2"></td>
			<tr>
				<td>Telephone</td>
			</tr>
			<td><input type="number" name="telephone" id="t3"></td>
			<tr><td><input type="button" name="subscribe" value="Subscribe" id="name-submit" ></td></tr>
			
		</table>

		
	</form>
	<h3>Items</h3>
	<div id="centered">
	<ul></ul>
	</div>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="myscript.js"></script>

</body>
<script>
	
	$('input#name-submit').on('click', function(){
		var xmlhttp;
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "insert.php?name="+ $('#t1').val() + "&email=" + $('#t2').val() + "&telephone=" + $('#t3').val(), false);
		xmlhttp.send(null);
});

</script>

</html>







