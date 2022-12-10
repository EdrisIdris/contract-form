<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style >
.main_container {
	border: 1px solid black; 
	height: 600px;
}
.text_header {
	display: flex; 
	justify-content: center; 
	align-items: center;
}
h1 {
	font-size: 40px;
	font-family: sans-serif;
}
.share_and_input {
	display: flex;
	grid-gap: 20px; 
	justify-content: center; 
}
.share_and_input span {
	font-family: sans-serif; 
	font-size: 30px;
}
.parent_box {
	display: flex; 
	justify-content: center;  
}
.go_btn {
	padding: 10px;
	background-color: white; 
	color: black; 
	border: 3px solid black; 
	box-shadow: 0px 1px 2px;
	cursor: pointer;
}
	
</style>
<body>
	<div class="main_container">
	 <div class="text_header">
		<h1>Created Successful</h1>
     </div>
      <div class="share_and_input">
      	 <span > SHARE URL</span> 
      	 <input type="text" name="Created_form" style="width: 50%;">
      </div>
      <br>
      <div class="parent_box" style="">
      	 <button class="go_btn" >GO TO LIST</button>
      </div>
	</div>

</body>
</html>