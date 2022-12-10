<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style>

.main_container {
	border: 2px solid black;
	height: 800px;
}
.main_parent {
	height: 500px;
	display: flex;
	justify-content: center;
	align-items: center;
}

.first_parent {
	display: flex; 
	height: 200px; 
	width: 50%; 
	justify-content: center; 
	grid-gap: 8%;
}

.third_parent {
	height: 503px; 
	display: flex; 
	justify-content: center; 
	flex-direction: column; 
	grid-gap: 10%;
	width: 100%;	
}

.client_box {
	display: flex; 
	grid-gap: 7%;
	align-items: center;
}
.client_box span {
	font-size: 20px;
}

.client_box input {
	width: 100%;
	padding: 10px;
	border: 3px solid black;
} 

.title_box {
	display: flex;
	grid-gap: 10%;
	align-items: center;
}
.title_box span	{
	font-size: 20px;
}
.title_box input {
	width: 100%;
	padding: 10px;
	border: 3px solid black;
}
.upload_box {
	display: flex; 
	grid-gap: 6.5%;
}
.upload_box span {
	font-size: 20px;
}
.upload_container {
	height: 200px; 
	width: 100%; 
	position: relative;
}
.upload_btn {
	position: absolute; 
	left: 0px;
	box-shadow: 1px 2px 2px;
    padding: 10px;

}
.prev_btn {
    position: absolute; 
    bottom: 0px;
    box-shadow: 1px 2px 2px;
    padding: 10px;
    width: 16%;
}
.next_btn {
    position: absolute; 
    right: 0px; 
    bottom: 0px; 
    box-shadow: 1px 2px 2px;
    padding: 10px;
}
.upload_btn, .prev_btn,  .next_btn{
	cursor: pointer;
}

</style>
<body>
<form method="POST" enctype="multipart/form-data">
	<div class="main_container" >
	   <div class="main_parent">
			<div class="first_parent" >
				<div >
				  <h1>CREATE</h1>
				</div>
		
				<div class="third_parent">
				
					<div class="client_box" >
						<span >CLIENT</span>
						<input type="text" name="CLIENT" >
					</div>
					<div class="title_box" >
						<span> TITLE</span>
						<input type="text" name="TITLE" >
					</div>
					<div class="upload_box" >
						<span > UPLOAD</span>
						<span >Please upload PDF only</span>
					</div>

					<div class="upload_container" >
						<button class="upload_btn">UPLOAD</button>
						<button class="prev_btn" >PREV</button>
						<button class="next_btn">NEXT</button>
					</div>
				</div>
			   
			</div>
	   </div>
	</div>
</form>






      

</body>
</html>