<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Basic Banking System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
  </head>
  <body>
   <header class="fix"> 
	<div class="nav-area">
	<div class="logo"><span><img src="bank logo.jpg" alt="" width="40px" height="37px">RVA</span> BANK</div>
	<ul class="menu-area">
	 <li class="active"><a href="index.php">Home</a><li>
	 <li><a href="transfer.php">View-Customers</a><li>
	 <li><a href="transactionhistory.php">Transaction-History</a><li>
	</ul>
	</div>
	</header>
	<table id="table">
		     <tr>
			 <th>S.no</th>
			 <th>Sender</th>
			 <th>Reciever</th>
			 <th>Amount Transfered</th>
			 <th>Time</th>
			 
			 </tr>
                        
                        <tbody>
			<?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
		    <tr>
                        <td><?php echo $rows['sno']?></td>
                        <td><?php echo $rows['sender']?></td>
                        <td><?php echo $rows['receiver']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><?php echo $rows['datetime']?></td>
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
		
		<footer>
			<div class="container">
				Copyright <span class="glyphicon glyphicon-copyright-mark"> </span> Design and Developed By Rutuparn Awaghad
				| All Rights Reserved | Contact Us: +91 9147895235
			</div>
		</footer>

   
  </body>
</html>
  
		
		
   
 	