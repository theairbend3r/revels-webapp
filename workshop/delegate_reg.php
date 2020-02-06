<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/layouts/header.php"); ?>
<?php include("includes/session.php"); ?>
<?php //confirm_logged_in(); ?>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="main.php" class="logo"><strong>Revels'17</strong> <span>Carnaval of life</span></a>
						<nav>
							<a href = "logout_login.php"><input type="submit" value="Logout" /></a>
						</nav>
					</header>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Delegate Registration</h1>
									</header>

                  <form action = "form_process.php" method = "post">

                    <div class="field half first">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" required="required" />
                    </div>

                    <div class="field half">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" required="required" />
                    </div>

                    <div class="field half first">
                      <label for="regno">Registration No.</label>
                      <input type="text" name="regno" id="regno" required="required"  />
                    </div>

                    <div class="field half">
                      <label for="tel">Mobile No.</label>
                      <input type="tel" name="tel" id="tel" required="required"  />
                    </div>

                    <div class="field half first">
                      <label for="college">College</label>
                      <input type="text" name="college" id="college" required="required" value = "MIT, Manipal" />
                    </div>

                    <div class = "field half">
                    </div>


                    <ul id = "submit_button" class="actions">
                      <br><li><input type="submit" name  ="submit" value="Submit" class="special" /></li>
                      <li><input type="reset" value="Clear" /></li>
											<li><a href = "main.php"><input type="submit" value="Go Back" /></a></li>
                    </ul>

									</form>

								</div>
							</section>

					</div>


<?php include("includes/layouts/footer.php"); ?>
