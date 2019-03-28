<?php session_start();
include('dbconnect.php');

?><html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <style>
   #border-1 {
    border-top: white;
    border-left: white;
    border-right:white;
    width:350px !important;
    margin-left:0;
  }
  .pic {
      max-height: 40px;
  }
  body{
    background-position: center;
    background-size: cover;
  }
 #text {
     border-left:1px solid white;
     border-right:1px solid white;
     border-top:1px solid white;
     height:40px;
     width:350px;
 }

</style>
	<title>My Bootstrap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body style="background-color:white;">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
		
                <a class="navbar-brand" href="#"> <img src="icon.png" class="pic  mb-3"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" onclick='window.open("dashboard.php")'>Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" onclick='window.open("driverprofile.php")'>Pool Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" onclick='window.open(".php")'>Document</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Polling Service
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" onclick='window.open("Carpooling.php")'>Car Pooling</a>
                        <a class="dropdown-item"  onclick='window.open("pollingservice.php")'>Pooling Service</a>
                        <a class="dropdown-item"  onclick='window.open("putcarsonpoll.php")'>Put Your Car on Pool</a>
                        <a class="dropdown-item"   onclick='window.open("requestpoll.php")'>Request Pool</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
             
			<div id="bck">
                
<br>                <center style="margin-top:1%;">
                <form method="post" action="pool_car.php">
                <p style="font-size:30px;"> Car Details</p>
		<?php $query = "SELECT * FROM user_cars WHERE c_id=".$_GET['id'];
			$results = mysqli_query($db,$query);

			$x=1;
			if(mysqli_num_rows($results))
			{
				while($row = mysqli_fetch_assoc($results))
				{
					?>
					<input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>">
               <font> Name:</font> <input id="text" name="textinput" value="<?php echo $row['name']; ?>" readonly type="text" placeholder="Car Name" style="height:55px; font-size:20px;" class="form-control input-md">
                  <br />
               <font> Reg No.</font><input id="text" name="textinput" readonly type="text"  value="<?php echo $row['number']; ?>" placeholder="Car Number" style="height:55px; font-size:20px;" class="form-control input-md">
                 <br> 
				 
				 <?php $query2 = "SELECT * FROM cars_pool WHERE c_id=".$_GET['id'];
			$results2 = mysqli_query($db,$query2);

			$x=1;
			if(mysqli_num_rows($results2))
			{
				$row2 = mysqli_fetch_assoc($results2)
				
					?>
               <font> Capacity: </font><input id="text" name="Number"  readonly type="number" style="height:55px; font-size:20px;" value="<?php echo $row2['avail_seats']; ?>" placeholder="Seat Available" class="form-control input-md">
                <br />
                
                        <label><span style="margin-right:55px; font-size:20px;  color:grey;">Luggage</span>           
    <?php if($row2['luggage']==0){
echo "No";
	}else
	{
echo "Yes";
	}
?>	
</label>
<br> 

<textarea class="form-control" id="" name="Leave Message" style="color:grey; height:100px; font-size:20px;"><?php echo $row2['message']; ?></textarea>

<br>
<font> Time: </font><input id="text" name="time" type="time" style="height:55px; font-size:20px;" value="<?php echo $row2['avail_seats']; ?>" placeholder="Seat Available" class="form-control input-md">
                <br />
				<font> PickUp Spot: </font><input id="text" name="pickup_spot" type="text" style="height:55px; font-size:20px;" value="<?php echo $row2['avail_seats']; ?>" placeholder="Seat Available" class="form-control input-md">
                <br />
				<font> Destination: </font><input id="text" name="destination" type="text" style="height:55px; font-size:20px;" value="<?php echo $row2['avail_seats']; ?>" placeholder="Seat Available" class="form-control input-md">
                <br />
				<font> Message: </font><input id="text" name="message" type="text" style="height:55px; font-size:20px;" value="<?php echo $row2['avail_seats']; ?>" placeholder="Seat Available" class="form-control input-md">
                <br />
			<?php } ?>

     <input type="submit" class="btn btn-primary mt-3 btn-block w-200 p-2" name="login" value="Request Pool"  style="width:320px !important; height:50px; font-size:20px;">
			<?php } } ?>


            </form>
              
    
    </center> 
</div> 

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>