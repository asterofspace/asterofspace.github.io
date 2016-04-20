 <!DOCTYPE html>
 <html>
 <head>
 	<meta name="viewport" content="width=device-width,user-scalable=no">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/styles.css">
 	
 	<link rel="shortcut icon" type="image/icon" href="../img/icon.ico" >
	<link rel="icon" type="image/png" href="../img/icon.png">
	<link rel="icon" type="image/x-icon" href="../img/icon.png">
 	<title>SMS Test</title>
 </head>
 <body>
 	
 <h1 class="text-center jumbotron-blue text-white">Send a Message</h1>
 <form role="form" action="carrierList.php" method="post" id="form">
		<!--Cell Contact -->

		<div class="form-group">
				<label for="carrierList">Select Carrier:</label>
		  				<select required="required" class="form-control" name="usrCarrier">
		  				    <option value="">Carrier</option>
		    				<option value="@txt.att.net">AT&T</option>
		   					<option value="@vtext.com">Verizon</option>
		    				<option value="@messaging.sprintpcs.com">Sprint</option>
		    				<option value="@myboostmobile.com">Boost</option>
		    				<option value="@mymetropcs.com">Metro PCS</option>
		  				</select>
		  								<br>
						<input type="tel" placeholder="Phone Number" required="true" class="form-control" name="usrCell" />
						<script src="validateFields.js" type="text/javascript"></script>
		</div>
		<div class="form-group">
		<label for="name" class="col-md-12">Subject</label>
				<input type="text" class="form-control" name="fullName" placeholder="Full Name" value="" required="true" />
				
			</div>

		<div class="form-group">
				<label for="comments">Message</label>
					<textarea type="text" rows="3"class="form-control" required="true" name="msg" placeholder="Tell Me your Problems :)"></textarea>
					</div>
			<div class="form-group">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary col-md-12">Submit</button>
					</div>
				</div>
				</form>

 
 </body>







 </html>