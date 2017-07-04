<?php
include_once 'header_logged.php';
?>

  <section class="main-container">

    <div class="main-wrapper"><h2>Create Event</h2></div>

    <div class="things">
   	    <form method="post" action="create_event_form.php">
   		<span>Event Name:</span><input type="text" name="event" id="title">
   		<span>Date: </span><input type="date" name="date" id="date">
   		<input type="submit" name="submit" value="Submit" id="submit">
   		</form>
   	</div>
  </section>
  
  <div id="errors">
  	<?php
  	include "create_event_form.php";
  	if (isset($_POST['submit'])) {
  		echo $message;
  		echo $success;
  	}

  	?>

  </div>



<div id="resp">

<?php
include "create_event_form.php";
  	if (isset($_POST['submit'])) {
  		
  		echo $success;
  	}

  	?>



</div>

<?php
include_once 'footer.php';
?>