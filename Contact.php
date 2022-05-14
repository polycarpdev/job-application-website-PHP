 
	<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Connect with us!</h3>
									<p>Send us a message. Feel free to share with us our complains or views</p>
                                    
								</div>  
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
								
								  	
		   <!-- Form itself -->
          <form name="sentMessage" id="contactForm"  novalidate>
	       
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
								</div>
			
							</div>
	</div>
 
	</section>
 