<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" style="margin-top:250px;" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
        </div>
    </div>
</header>



<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>Namaste!</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
            <img class="d-block w-100" src="img/101.jpeg"  alt="First slide">
           <!-- <video class="d-block w-100" controls>
                <source src="img/video1.mp4" type="video/mp4">
            </video>-->
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/102.jpeg"  alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/103.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Story</h4>
	<p><br>The restaurant Namaste!, first opened in 2004 in “Belagavi”, one of the oldest districts of Karntaka in the historical center of the city. In 2010 , the restaurant was awarded its first Michelin star and has retained it since.<br><br>
	The same year, the restaurant relocated to the 6th floor of the Onassis Cultural Centre in Syngrou Avenue and was recently redesigned by award-winning architectural firm Divercity.In warmer months of the year the restaurant moves
	to the 7th floor of the building, offering a unique outdoor setting with panoramic view of the Acropolis, Lycebettus hill and the city skyline.<br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----gallery -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/10.jpg" style="margin:5px;width:180px;height: 330px;" class="img-fluid">
              <img src="img/7.jpg" style="margin:5px;width:180px;height: 330px;" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/3.jpg" style="margin:5px;width:180px;height: 330px;"  class="img-fluid">
              <img src="img/4.jpg" style="margin:5px;width:180px;height: 330px;" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/5.jpg" style="margin:5px;width:180px;height: 330px;" class="img-fluid">
               <img src="img/6.jpg" style="margin:5px;width:180px;height: 330px;" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/2.jpg" style="margin:5px;width:180px;height: 330px;" class="img-fluid">
               <img src="img/8.jpg" style="margin:5px;width:180px;height: 330px;" class="img-fluid">
           </div>
    
        </div>
    </div>
</div><br><br>
<!----end of gallery -->

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
    <img  src="img/16.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>
        
</div><br><br>

<div class="header2">
</div>

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Find us!</h3><br>
            <iframe style="height:250px;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Nehru+nagar+belagavi&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"allowfullscreen>
              </iframe>
        <div class="row staff">
            <div class="col">
            <h4><strong>Opening Hours</strong></h4>
                       
                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button>
                        </div>
                    </form>
                    
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00 PM</td>
                    <td>12:00 AM</td>
                    </tr>
                   </tbody>
                </table>";
            }
         
   //close connection
   mysqli_close($conn);
}
?>
                        
                </div><br>
            </div>

            <div class="col">
            <h4 class="text-right"><strong>Visit Us</strong></h4>
            <p class="text-right">Namaste!<br><i class="fa fa-map-marker"></i>&nbsp; IInd main Street,Nehru nagar <br>Belagavi <br><br>email: namaste@domain.com<br>phone: +91 8792049161</p>
            </div>

	</div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>