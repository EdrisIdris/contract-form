<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="number1" placeholder="Type any number">
		<select name="operator">
			<option>NONE</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Divide</option>
		</select>
		<input type="text" name="number2" placeholder="Type any number">
		
		<button type="submit" value="sumbit" name="Calculate">Calculate</button>
	</form>
	<p>The answer is: </p>

	<?php 
     if (isset($_GET['Calculate'])) {
     	$answer1 = $_GET['number1'];
     	$answer2 = $_GET['number2'];
     	$operator = $_GET['operator'];

      
     	switch ($operator) {
     		case 'None':
     			echo "Please select a method!";

     			break;
     		
     		default:
     			case 'Add':
				echo $answer1 + $answer2;
				break;
		  

		  
		       case 'Subtract':
		       	echo  $answer1 - $answer2;
		       	break;
		  
		        case 'Multiply':
		          echo $answer1 * $answer2;
		        break;
		    
		       case 'Divide':
		       	 echo $answer1 / $answer2;
		       	break;
     			
     	}
     }

	 ?>

</body>
</html>