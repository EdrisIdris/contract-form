<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
.main_container {

   display: flex; 
   justify-content: center;
   flex-direction: column;
   align-items: center;
   grid-gap: 20px;
   position: relative;
}	
.main-header_container {
	border: 3px solid black; 
	height: 130px; 
	width: 70%;
}

.parent_container {
    display: flex; 
    align-items: center; 
    height: 60px; 
    position: relative;
}
.child_container1 {
	width: 38.8%; 
	display: flex; 
	justify-content: space-around;
}
.child_container1 span {
    font-family: Arial;
    font-weight: 100;
}
.child_container2 {
    display: flex; 
    align-items: center; 
    position: absolute; 
    right: 5%; 
    grid-gap: 3%;
}
.child_container2 span {
	font-family: Arial;
	font-weight: 100;
}
.child_container3 {
	width: 77.8%; 
	height: 50px; 
	display: flex; 
	align-items: center; 
	justify-content: space-around;
}
.child_container3 span {
    font-family: Arial; 
    font-weight: 500;
}
.main_container2 {
	border: 3px solid black; 
	height: 700px; 
	width: 70%; 
	display: flex; 
	align-items: flex-end; 
	justify-content: center;
}

fieldset {
   border: 3px solid black; 
   height: 650px; 
   width: 70%;
}
legend {
   text-align: center; 
   border: 3px solid black; 
   padding: 30px; 
   font-size: 30px;  
}
.parent_container2 {
  height: 500px; 
  display: flex; 
  flex-direction: column;
}
.parent_container2 span {
	font-size: 30px; 
	display: flex; 
	justify-content: center;
}
.child_container4, .child_container5  {
   text-align: center;
}

.child_container4 p{
	font-size: 20px;
}
.footer {
	display: flex;
	text-align: center;
	flex-direction: column;
	align-items: center;
	position: absolute;
	right: 20%;
	bottom: 15%;
	z-index: 3;
}
.footer span {
	font-size: 18px;
	font-weight: bold;
	font-family: sans-serif;
}	

.footer_btn {
	height: 80px;
	width: 80px;
	border-radius: 100px; 
	border: 3px solid black;
	font-size: 70px;
	font-weight: bolder;
	display: flex;
	justify-content: center;
	align-items: center;
}
</style>
<body>
	<form method="POST">
			<div class="main_container">
				<div class="main-header_container">
					<div class="parent_container">
						<div class="child_container1" >
							<span >CLIENT</span>
							<span >SANDARA PARK</span>
						</div>
						<div class="child_container2">
							<img src="images/check.png" width="20px" height="20px"><span >CREATE</span>
							<img src="images/exit.png" width="20px" height="20px"><span>CLOSE</span>
						</div>
					</div>
					<div class="child_container3">
						<span>TITLE</span>
						<span>Lorem Ipsum is simply dummy text of the printing and typesetting.PDF</span>
					</div>
				</div>

			<div class="main_container2" >
				<fieldset >
					<legend >Neck car</legend>
					<div class="parent_container2" >
						<span> &#8544;. Event Overview ...............................1</span>
							<br>
							<br>
						<span> &#8545;. Detailed event planning .............................2</span>
						<div class="child_container4">
							<p>1. Event time planning .............................2</p>
							<p>2. Civic Engagement Events .............................3</p>
							<p>3. This event......................................4</p>
							<p>4. Incidental Events.................................5</p>				
						</div>
					  <div class="child_container5" >
						<span>&#8546;. Sector-specific operational measures..........6</span>
							 <br>
							 <br>
							 <br>
							 <br>
							 <br>
						<span >&#8547;. Administrative Matters.............................8</span>
					  </div>
					</div>
				</fieldset>
				
			</div>
				 <div class="footer">
				   <span>UPLOAD <br> SIGN or STAMP</span>
				   <button class="footer_btn">+</button>
	             </div>
		   </div>
    </form>







</body>
</html>