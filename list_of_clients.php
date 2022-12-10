<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>

<style>

.main_container {
	border: 1px solid black; 
	height:800px; 
	position: relative;
}
.header_container {
    width: 20%; 
    display: flex;
    justify-content: center;  
}
.parent_container {
    display: flex; 
    justify-content: center; 

}
h1 {
	font: 400 64px/76px Google Sans,-apple-system,BlinkMacSystemFont,sans-serif;
}
table, th, td {

  padding: 10px;
  border-collapse: collapse;
  flex-basis: 80%; 
}
th, td {
	text-align: center;
	

}
th {
	font-size: 20px;
	font-family: arial;
	font-weight: 100;
}
td {
	font-size: 20px;
	font-family: arial;
	font-weight: 100;

}
.plus_btn {
	border-radius: 100%; 
	color: black; 
	font-size:100px; 
	font-weight: bold; 
	height: 120px; 
	width: 120px; 
	position: absolute; 
	bottom: 10%;
	right: 10%;
	background-color: #808080;
	border: 3px solid black;
}
.URL_btn1, .URL_btn2 {
	box-shadow: 2px 2px 2px;
}
.URL_btn1, .URL_btn2, .plus_btn, img{
	cursor: pointer;
}

</style>
<body>
<form>
	<div class="main_container">
	<div class="header_container" >
	<h1>List</h1>
	</div>
	 <div class="parent_container" > 
    
		<table>
			<form method="POST">
				<tr>
					<th>CLIENT</th>
					<th >TITLE</th>
					<th>STATUS</th>
					<th>DATE</th>
					<th>URL</th>
					<th>VIEW</th>
				</tr>
		        
					<td>1 CLIENT1</td>
					<td>KOSMOCHART CONTRACT</td>
					<td>Created</td>
					<td>2022/12/08</td>
					<td><button class="URL_btn1">URL</button></td>
					<td>
						<img src="images/eyes.png" width="20px" height="20px">
					</td>
					<tr>
						<td>1 CLIENT2</td>
						<td>KOSMOCHART CONTRACT</td>	
						<td>Signed</td>
						<td>2022/12/08</td>
						<td><button class="URL_btn2">URL</button></td>
						<td><img src="images/eyes.png" width="20px" height="20px"></td>
					</tr>
			</form>	
	  </table>
    </div>

    <button class="plus_btn" >+</button>



    </div>
</form>
</body>
</html>