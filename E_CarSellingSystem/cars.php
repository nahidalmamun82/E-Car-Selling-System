<!doctype html>

<?php 

require ('connection.php');
session_start();



	
?>



<html>
    <head>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/styleSheet.css" rel="stylesheet" type="text/css">
    </head>
    
    
    <body>
      
    <section id="top-panel">
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
   <ul class="nav navbar-nav">
         
        <li class="active"><a href="done.html"><i class="fa fa-arrow-left"></i> <span class="sr-only">(current)</span></a></li>
        <li class="fast-present"><a href="cars.php"><i class="fa fa-home"></i></a></li>
        <li class="present"><a href="members.html"><i class="fa fa-group"></i></a></li>
        <li class="present"><a href="edit.html"><i class="fa fa-edit"></i></a></li>
        
        
      </ul>
  
         
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </section>
    
        <section id="all-panel">
            <div class="panel-side col-md-2">
                 <br>    
                    <br> 
                    <div class="panel panel-info ">
                    <div class="panel-heading">
                        <h4>About US</h4>
                    </div>
                      <div class="panel-body">
                         <div class="left-panel-body">
                          <marquee direction="up" scrollamount="3">
                              <p>Welcome to our car business</p>
                              <p>Our location: Khagan Bazar, Ashulia ,Savar</p>
                              <p>Contact with us: </p>
                              <p>carbusiness@gmail.com</p>
                              <p>Phone no:</p>
                              <p>01385470125</p>
                              <p>01389745616</p>
                              <p>Visit US:</p>
                              <p>www.carbusiness.com</p>
                              <p>Thank you</p>
                          </marquee>
                        </div>
                    </div>
                </div>
           
         
                
            </div>
            <br>
         
            
           
            
			
            <div class="panel-right col-md-10">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="text-center">Show room items !!!!!!</h3>
                    </div>
                    <div class="panel-body ">
                       
                    <div class="all-car">
                      
                    <div class="car-panel-body col-md-6">
                        
                    <div class="car-image col-md-6">
                         <img src="images/car1.png">
                        <br>
                        <br>
                        <br>
						<?php 
							$sqll=mysqli_query($conn,"Select * from car_info where ID='1' ");
							//$row1=mysqli_num_rows($sqll);
							while($row=mysqli_fetch_assoc($sqll))
							{
								$ID=$row['ID'];
								$car_brand=$row['car_brand'];
								$serial_no=$row['serial_no'];
								$cc=$row['cc'];
								$ac=$row['ac'];
								$price=$row['price'];
								 
								//$id=$row['Id'];
								//$_SESSION['id']=$ID;
								echo $car_brand; 
						?>
						
                          <a href="edit.html" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
                        
                    </div> 
                        
                <div class="car-about col-md-6" >
                  <div class="list-group">
                  <a href="" class="list-group-item list-group-item-danger">Car Brand:  <span class="badge"><?php echo $car_brand; ?></span></a>
                  <a href="" class="list-group-item list-group-item-success">Serial number: <span class="badge"><?php echo $serial_no; ?></span></a>
                  <a href="" class="list-group-item list-group-item-danger">Cc: <span class="badge"><?php echo $cc; ?></span></a>
                  <a href="" class="list-group-item list-group-item-success">Ac: <span class="badge"><?php echo $ac; ?></span></a>
                  <a href="" class="list-group-item list-group-item-danger">Price <span class="badge"><?php echo $price; ?></span></a>
                  </div>
					
                </div>
				<?php } ?>
                    </div>
                        
                         <div class="car-panel-body col-md-6">
                        
                    <div class="car-image col-md-6">
                         <img src="images/BMW.png">
                         <br>
                        <br>
                        <br>
						
						<?php 
							$sqll=mysqli_query($conn,"Select * from car_info where ID='2' ");
							//$row1=mysqli_num_rows($sqll);
							while($row=mysqli_fetch_assoc($sqll))
							{
								$ID=$row['ID'];
								$car_brand=$row['car_brand'];
								$serial_no=$row['serial_no'];
								$cc=$row['cc'];
								$ac=$row['ac'];
								$price=$row['price'];
								 
								//$id=$row['Id'];
								//$_SESSION['id']=$ID;
								echo $car_brand; 
						?>
                          <a href="edit.html" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
                         
                    </div> 
                        
                <div class="car-about col-md-6" >
                  <div class="list-group">
                  <a href="" class="list-group-item list-group-item-danger">Car Brand:  <span class="badge"><?php echo $car_brand; ?></span></a>
                  <a href="" class="list-group-item list-group-item-success">Serial number: <span class="badge"><?php echo $serial_no; ?></span></a>
                  <a href="" class="list-group-item list-group-item-danger">Cc: <span class="badge"><?php echo $cc; ?></span></a>
                  <a href="" class="list-group-item list-group-item-success">Ac: <span class="badge"><?php echo $ac; ?></span></a>
                  <a href="" class="list-group-item list-group-item-danger">Price <span class="badge"><?php echo $price; ?></span></a>
                  </div>

                   </div><?php } ?>
                    </div>
                        
                            <div class="car-panel-body col-md-6">
                        
                    <div class="car-image col-md-6">
                         <img src="images/VOLKS.png">
                         <br>
                        <br>
                        <br>
						<?php 
							$sqll=mysqli_query($conn,"Select * from car_info where ID='3' ");
							//$row1=mysqli_num_rows($sqll);
							while($row=mysqli_fetch_assoc($sqll))
							{
								$ID=$row['ID'];
								$car_brand=$row['car_brand'];
								$serial_no=$row['serial_no'];
								$cc=$row['cc'];
								$ac=$row['ac'];
								$price=$row['price'];
								 
								//$id=$row['Id'];
								//$_SESSION['id']=$ID;
								echo $car_brand; 
						?>
                          <a href="edit.html" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
                         
                    </div> 
                        
                <div class="car-about col-md-6" >
                  <div class="list-group">
                  <a href="" class="list-group-item list-group-item-danger">Car Brand:  <span class="badge"><?php echo $car_brand; ?></span></a>
                  <a href="" class="list-group-item list-group-item-success">Serial number: <span class="badge"><?php echo $serial_no; ?></span></a>
                  <a href="" class="list-group-item list-group-item-danger">Cc: <span class="badge"><?php echo $cc; ?></span></a>
                  <a href="" class="list-group-item list-group-item-success">Ac: <span class="badge"><?php echo $ac; ?></span></a>
                  <a href="" class="list-group-item list-group-item-danger">Price <span class="badge"><?php echo $price; ?></span></a>
                  </div>

                   </div> <?php } ?>
                    </div>
                        
                            <div class="car-panel-body col-md-6">
                        
                    <div class="car-image col-md-6">
                         <img src="images/CAE3.png">
                         <br>
                        <br>
                        <br>
						<?php 
							$sqll=mysqli_query($conn,"Select * from car_info where ID='4' ");
							//$row1=mysqli_num_rows($sqll);
							while($row=mysqli_fetch_assoc($sqll))
							{
								$ID=$row['ID'];
								$car_brand=$row['car_brand'];
								$serial_no=$row['serial_no'];
								$cc=$row['cc'];
								$ac=$row['ac'];
								$price=$row['price'];
								 
								//$id=$row['Id'];
								//$_SESSION['id']=$ID;
								echo $car_brand; 
						?>
                          <a href="edit.html" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
                         
                    </div> 
                        
                <div class="car-about col-md-6" >
                  <div class="list-group">
                  <a href="" class="list-group-item list-group-item-danger">Car Brand:  <span class="badge"><?php echo $car_brand; ?></span></a>
                  <a href="" class="list-group-item list-group-item-success">Serial number: <span class="badge"><?php echo $serial_no; ?></span></a>
                  <a href="" class="list-group-item list-group-item-danger">Cc: <span class="badge"><?php echo $cc; ?></span></a>
                  <a href="" class="list-group-item list-group-item-success">Ac: <span class="badge"><?php echo $ac; ?></span></a>
                  <a href="" class="list-group-item list-group-item-danger">Price <span class="badge"><?php echo $price; ?></span></a>
                  </div>

                   </div><?php } ?>
                    </div>
                        
                            <div class="car-panel-body col-md-6">
                        
                    <div class="car-image col-md-6">
                         <img src="images/car2.png">
                         <br>
                        <br>
                        <br>
						
                          <a href="edit.html" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
                         
                    </div> 
                        
                <div class="car-about col-md-6" >
                  <div class="list-group">
                  <a href="" class="list-group-item list-group-item-danger">Car Brand:  <span class="badge">Toyota</span></a>
                  <a href="" class="list-group-item list-group-item-success">Serial number: <span class="badge">9654</span></a>
                  <a href="" class="list-group-item list-group-item-danger">Cc: <span class="badge">300</span></a>
                  <a href="" class="list-group-item list-group-item-success">Ac: <span class="badge">Yes</span></a>
                  <a href="" class="list-group-item list-group-item-danger">Price <span class="badge">9900000 Tk</span></a>
                  </div>

                   </div>
                    </div>
                        
                            <div class="car-panel-body col-md-6">
                        
                    <div class="car-image col-md-6">
                         <img src="images/HAIUNDAY.png">
                          <br>
                        <br>
                        <br>
                          <a href="edit.html" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
                        </div> 
                        
                <div class="car-about col-md-6" >
                  <div class="list-group">
                  <a href="" class="list-group-item list-group-item-danger">Car Brand:  <span class="badge">Eridion5</span></a>
                  <a href="" class="list-group-item list-group-item-success">Serial number: <span class="badge">5624</span></a>
                  <a href="" class="list-group-item list-group-item-danger">Cc: <span class="badge">1500cc</span></a>
                  <a href="" class="list-group-item list-group-item-success">Ac: <span class="badge">Yes</span></a>
                  <a href="" class="list-group-item list-group-item-danger">Price <span class="badge">3900000 Tk</span></a>
                  </div>

                   </div>
                    </div>
                        
                          <div class="car-panel-body col-md-6">
                        
                    <div class="car-image col-md-6">
                         <img src="images/TOYOTA.png">
                          <br>
                        <br>
                        <br>
                          <a href="edit.html" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
                        </div> 
                        
                <div class="car-about col-md-6" >
                  <div class="list-group">
                  <a href="" class="list-group-item list-group-item-danger">Car Brand:  <span class="badge">Szuki</span></a>
                  <a href="" class="list-group-item list-group-item-success">Serial number: <span class="badge">984785</span></a>
                  <a href="" class="list-group-item list-group-item-danger">Cc: <span class="badge">1200cc</span></a>
                  <a href="" class="list-group-item list-group-item-success">Ac: <span class="badge">Yes</span></a>
                  <a href="" class="list-group-item list-group-item-danger">Price <span class="badge">6900000 Tk</span></a>
                  </div>

                   </div>
                    </div>
                        
                          <div class="car-panel-body col-md-6">
                        
                    <div class="car-image col-md-6">
                         <img src="images/SEAT.png">
                          <br>
                        <br>
                        <br>
                          <a href="edit.html" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
                        </div> 
                        
                <div class="car-about col-md-6" >
                  <div class="list-group">
                  <a href="" class="list-group-item list-group-item-danger">Car Brand:  <span class="badge">Toyota</span></a>
                  <a href="" class="list-group-item list-group-item-success">Serial number: <span class="badge">Toyota</span></a>
                  <a href="" class="list-group-item list-group-item-danger">Cc: <span class="badge">Toyota</span></a>
                  <a href="" class="list-group-item list-group-item-success">Ac: <span class="badge">Yes</span></a>
                  <a href="" class="list-group-item list-group-item-danger">Price <span class="badge">5400000 Tk</span></a>
                  </div>

                   </div>
                    </div>
                   
                        
                        
                    </div>
                    </div>      
                    </div>
                
                
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                </div>
				
        </section>
        
  
        
        
    <script src="js/jquery3.1.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>    
    </body>
</html>