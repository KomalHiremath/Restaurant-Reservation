
<?php
require "header.php";
?>
    
<br><br>
<div class="container">
<h3 class="text-center"><br>View Reservations<br></h3>     

<?php
    if(isset($_SESSION['user_id'])){
        echo '<p class="text-white bg-dark text-center">'. $_SESSION['username'] .', Here you can check your reservation history</p><br>';
        
    
    if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Error!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5 class="bg-success text-center">Delete was successfull</h5>',
            '<script>alert("You will receive an email soon")</script>';
        }
    }  
    require 'includes/view.reservation.inc.php';
    
 }
    else {
        echo '	<p class="text-center text-danger"><br>You are currently not logged in!<br></p>
       <p class="text-center">In order to make a reservation you have to create an account!<br><br><p>';   
    }    
    
?>
        <div class="form-group">
        <h3 class="text-center"><br>Payments<br></h3>
            <label>Scan the QR CODE for online payment</label>
            <button type="button" onclick="window.location.href='app.html'" class="btn btn-outline-dark btn-block btn-lg" style="width:150px;background-color:blue;color:white;">Click here!</button>
            </div> 
        </div>
        <br><br>


<?php
require "footer.php";
?>