<html>
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
  #bck
  {
      
        background-color: azure;
        background-color: rgba(255, 255, 255, 0.8);
        height:100%;
        margin-top:0%;
  }
  #input 
  {
      height:60px;
      border-left:white;
      border-right:white;
      border-top:white;
      background-color:white;
     
  }

</style>
	<title>Swing !</title>
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
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
             
			<div id="bck">
<br>                <center style="margin-top:2%;">
	 
            <form class="">
                    <p class="text-xl-left mr-5 ml-4" style="font-size:20px; color:grey; ">Please Update Your Profile</p>
                     <div class="input-group mb-3"  onclick='window.open("update_profile_pic.php")'>
                        <input type="text" class="form-control" id="input" readonly value="Profile Photo" aria-label="Recipient's username" aria-describedby="basic-addon2">
                       <span class="input-group-text" id="basic-addon2"> <i class="fa fa-chevron-right fa-1x" aria-hidden="true"></i> </span>
                      </div>
                      <div class="input-group mb-3" onclick='window.open("update_license.php")'>
                            <input type="text" class="form-control" id="input"  value="Driver's License" aria-label="Recipient's username" readonly aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2 id">  <i class="fa fa-chevron-right fa-1x" aria-hidden="true"></i> </span>
                            </div>
                          </div>
                          <div class="input-group mb-3"  onclick='window.open("update_pancard.php")'>
                                <input type="text" class="form-control" id="input"  readonly value="Pan Card" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="basic-addon2 id">  <i class="fa fa-chevron-right fa-1x" aria-hidden="true"></i> </span>
                                </div>
                              </div>
                    <p style="text-align: left; font-size:25px;" class="ml-1"> Please upload your vehicle documents.</p>                   
                 <p class="" style="text-align:left; font-size:16px; margin-left:2px;"> To drive with the Swing your Vehicle must be 1995 or newer, and be a mid-size or full size sedan that comfortably seats 4-8 passengers.</p>
            <hr style="height:2px; color:black;">
                <div class="input-group mb-3"  onclick='window.open("update_commerical_insurance.php")'>
            <input type="text" class="form-control" id="input" readonly value="Commerical Insurance" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">  <i class="fa fa-chevron-right fa-1x" aria-hidden="true"></i> </span>
            </div>
          </div>
          <div class="input-group mb-3" onclick='window.open("update_contract_carriage.php")'>
                <input type="text" class="form-control" id="input"  value="Contract Carriage" aria-label="Recipient's username" readonly aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">  <i class="fa fa-chevron-right fa-1x" aria-hidden="true"></i> </span>
                </div>
              </div>
              <div class="input-group mb-3" onclick='window.open("update_certificate_registration.php")'>
                    <input type="text" class="form-control" id="input"  value="Certificate of Registration" aria-label="Recipient's username" readonly aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">  <i class="fa fa-chevron-right fa-1x" aria-hidden="true"></i> </span>
                    </div>
                  </div>
              
                 
    
    </center> 
</div> 



</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>