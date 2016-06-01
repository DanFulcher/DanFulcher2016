<?php include 'includes/head.php'; ?>

<body>

	<div id="wrapper">

		<?php include 'includes/sidebar-nav.php'; ?>

	    <div id="page-content-wrapper">

	    	<div class="inner-scrolled-header gradient-main">
	    		<?php include 'includes/innernav.php'; ?>
	    	</div>

		    <section id="inner-banner" class="gradient-main">
		        <div class="container">
		        	<div class="inner-header">
		        		<div class="row">
			        		<div class="col-xs-8 col-sm-4">
			        			<a href="index.php">
			        				<img src="images/innerheader-logo.png" class="img-responsive" />
			        			</a>
			        		</div>
			        		<div class="col-xs-4 col-sm-8">
			        			<div class="navbar-header">
					                <button href="#menu-toggle" type="button" class="navbar-toggle menu-toggle">
					                    <span class="sr-only">Toggle navigation</span>
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                </button>
					            </div>
					            <ul class="inner-header-nav">
					            	<li>
		    							<a href="index.php">Home</a>
		    						</li>
		    						<li>
		    							<a href="about.php">About Me</a>
		    						</li>
		    						<li>
		    							<a href="work.php">My Work</a>
		    						</li>
		    						<li>
		    							<a href="contact.php">Contact Me</a>
		    						</li>
		    					</ul>
			        		</div>
			        	</div>
		        	</div>
		            <div class="row">
		            	<div class="inner-banner-text">
		            		<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
			            		<h1>Contact Me</h1>
			            		<p><strong>If you have any questions, or are interested in working with me...</strong></p>
			            		<p>Feel free to get in touch!</p>
		            		</div>
		            	</div>
		            </div>
		        </div>
		    </section>

		    <section id="contact-me">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-8">
		                	<div class="content-area">
			                    <h1>Please fill out the simple form below...</h1>
			                    <p><strong>Or email me direct at daniel.fulcher@btinternet.com<br/>
								I am usually quick to respond, so you won’t be left hanging for long!</strong></p>

								<form name="contactform" method="post" action="sending.php">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="name" placeholder="Name" required oninput="check(this)" />
										</div>
										<div class="col-sm-6">
											<input type="email" name="email_address" placeholder="Email Address" required />
										</div>
										<div class="col-sm-12">
											<textarea type="text" name="message" placeholder="Details of Enquiry" required></textarea>
										</div>
										<div class="col-sm-12">
											<button type="submit" name="submit" class="gradient-main"><span>Submit</span></button>
										</div>
									</div>
								</form>
							</div>
		                </div>
		                <div class="col-sm-4 bg">
		                </div>
		            </div>
		        </div>
		    </section>

		    <section id="call-banner">
		        <div class="container">
		            <div class="row">
		            	<div class="col-xs-12">
		            		<p class="callbannertitle">I look forward to hearing from you!</p>
		            	</div>
		            </div>
		        </div>
		    </section>

		    <?php include 'includes/footer.php'; ?>