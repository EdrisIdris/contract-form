  <?php 

  $severname = "localhost";
  $username = "root";
  $password = "";
  $dbaname = "korean_db";

  $con = mysqli_connect($severname, $username, $password, $dbaname);

          if (mysqli_connect_error()) {
              echo "Failed to connect!";
          } 
            else {
            	echo "Connection success!";

            }  
        


   ?>
