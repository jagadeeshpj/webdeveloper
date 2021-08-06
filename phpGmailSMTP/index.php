<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Contact Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="style.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container contact">
         <div class="row">
            <div class="col-md-3">
               <div class="contact-info">
                  <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                  <h2>Contact Us</h2>
                  <h4>We would love to hear from you !</h4>
               </div>
            </div>
            <div class="col-md-9">
               <form method="post" id="frmContactus">
					<div class="contact-form">
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="name">Name:</label>
						 <div class="col-sm-10">          
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="email">Email:</label>
						 <div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
						 </div>
					  </div>
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="mobile">Mobile:</label>
						 <div class="col-sm-10">
							<input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required>
						 </div>
					  </div>
					  
					  <div class="form-group">
						 <label class="control-label col-sm-2" for="comment">Comment:</label>
						 <div class="col-sm-10">
							<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
						 </div>
					  </div>
					  <div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
							<span style="color:red;" id="msg"></span>
						 </div>
					  </div>
				   </div>
			   </form>
            </div>
         </div>
      </div>
	  <script>
	  jQuery('#frmContactus').on('submit',function(e){
		jQuery('#msg').html('');
		jQuery('#submit').html('Please wait');
		jQuery('#submit').attr('disabled',true);
		jQuery.ajax({
			url:'submit.php',
			type:'post',
			data:jQuery('#frmContactus').serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#submit').html('Submit');
				jQuery('#submit').attr('disabled',false);
				jQuery('#frmContactus')[0].reset();
			}
		});
		e.preventDefault();
	  });
	  </script>
   </body>
</html>