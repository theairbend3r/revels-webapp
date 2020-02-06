<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/layouts/header.php"); ?>
<?php include("includes/session.php"); ?>
<?php// confirm_logged_in(); ?>

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
										<h1>Workshop Registration</h1>
									</header>


                  <form action = "form_process_workshop.php" method = "post">

                    <div class="field half first">
                      <label for="name">Enter Delegate ID</label>
                      <input type="text" name="id" id="id" required="required" />
                    </div>
                    <div class="field half first">
                      <label for="name">Select Workshop</label>

                      <?php
                        $query = "SELECT name FROM workshop";
                        $result = mysqli_query($connection, $query);
                      ?>

                      <select class="select-wrapper" name= "workshops" id="workshops" required="required">
                        <option selected value = "">--</option>
                        <?php
                          $i = 1;
                          while($row = mysqli_fetch_array($result))
                            {
                              $menu = "<option value = '$i'>".$row['name']; "</option>";
                              echo $menu;
                              $i++;
                            }
                         ?>

                      </select>
                    </div>

                    <ul id = "submit_button" class="actions">
                      <br><li><input type="submit" name  ="submit" value="Submit" class="special" /></li>
											<li><a href = "main.php"><input type="submit" value="Go Back" /></a></li>
                    </ul>


                    </div>

                  </form>

								</div>
							</section>

					</div>


				<!-- Footer -->
<?php include("includes/layouts/footer.php"); ?>
