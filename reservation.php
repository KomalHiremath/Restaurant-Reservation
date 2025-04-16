<?php
require "header.php";
?>

    
    <!-- end of nav bar -->

<br><br>
<div class="container" style="background-image:url('img/komi.jpeg');background-repeat: no-repeat;background-size:100%;">
    <h3 class="text-center" style="color:white;"><br>New Reservation<br></h3>   
    <div class="row" style="color: white;" >
        <div class="col-md-6 offset-md-3">   
 
        
        
        
    
<?php
if(isset($_SESSION['user_id'])){
    echo '<p class="text-white text-center">Welcome '. $_SESSION['username'] .', Create your reservation here!</p>';
      
  //error handling:
    
    if(isset($_GET['error3'])){
        if($_GET['error3'] == "emptyfields") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Fill all fields, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidfname") {   
            echo '<h5 class="bg-danger text-center">Invalid First Name, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidlname") {   
            echo '<h5 class="bg-danger text-center">Invalid Last Name, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidtele") {   
            echo '<h5 class="bg-danger text-center">Invalid Telephone, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "invalidcomment") {   
            echo '<h5 class="bg-danger text-center">Invalid Comment, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "invalidguests") {   
            echo '<h5 class="bg-danger text-center">Invalid Guests, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "full") {   
            echo '<h5 class="bg-danger text-center">Reservations are full this date and timezone, Please try again!</h5>';
        }
    }
        if(isset($_GET['reservation'])) {   
           if($_GET['reservation'] == "success"){ 
            echo '<h5 class="bg-success text-center">Your reservation was successfull!</h5>';
        }
        }
        echo'<br>';



    

    
    
     //reservation form  
    echo '  
        
    <div class="signup-form">
        <form action="includes/reservation.inc.php" method="post" >
            <div class="form-group">
            <label>First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
                <small class="form-text text-white">First name must be 2-20 characters long</small>
            </div>
            <div class="form-group">
            <label>Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
                <small class="form-text text-white">Last name must be 2-20 characters long</small>
            </div>   
            <div class="form-group">
            <label>Enter Date</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
		<label>Select Time Zone</label>
		<select class="form-control" name="time">
		<option>12:00 - 4:00</option>
		<option>4:00 - 8:00</option>
		<option>8:00 - 12:00</option>
		</select>
            </div>

            <div class="form-group">
            <label for="guests">Enter your Mobile Number</label>
                <input type="text" class="form-control" name="tele" placeholder="Mobile Number" required="required">
                <small class="form-text text-white">Mobile Number must be 10 characters long</small>
            </div>

<!--.column {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}-->
           

             <div class="form-group">
		<label>Choose the Table</label>
		<select class="form-control" name="time">
		<option>Table-1(2 chairs) Rs.250</option>
		<option>Table-2(4 chairs) Rs.500</option>
		<option>Table-3(6 chairs) Rs.1000</option>
        <option>Table-4(8 chairs) Rs.1500</option>
        <option>More Required...</option>
		</select>
            </div>

            <div class="form-group">
            <div class="row">
            <div class="col-sm"><br><br>
		<label>Table Prerference</label>
		<select class="form-control" style="width:200px;" name="time">
		<option>near Window</option>
		<option>Entrance</option>
		<option>Right side</option>
        <option>Left side</option>
        <option>Center</option>
		</select>
        </div>

           <div class="col-sm"><br><br>
            <img src="img/layout1.jpeg" width="150px" height:"150px">
            </div>
            </div>
            </div>

           
            
            <div class="form-group">
            <label>Enter Party size</label>
        	<input type="number" class="form-control" min="10" name="num_guests" placeholder="Number of Guests" required="none">
                <small class="form-text text-white">only for parties more than 10 people</small>
            </div>

            <div class="form-group">
            <label>Enter extra Comments</label>
                <textarea class="form-control" name="comments" placeholder="Any Decoration needs/ Lightings/ Flowers/ any other facilities" rows="3"></textarea>
                <small class="form-text text-white">Comments must be less than 200 characters</small>
            </div>        
            <div class="form-group">
		<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
            <button type="submit" name="reserv-submit" style="background-color:#008000;color:white;" class="btn btn-lg btn-block">Submit Reservation</button>
            </div>
        </form>
        <br><br>
    </div>
    ';  
    }

    else {
        echo '	<p class="text-center text-danger"><br>You are currently not logged in!<br></p>
       <p class="text-center">In order to make a reservation you have to create an account!<br><br><p>';  
        
    }
    ?>

             
        </div>
    </div>
</div>
<br><br>


<?php
require "footer.php";
?>