<?php require_once("includes/session.php"); ?>
<?php require_once("includes/validation_functions.php"); ?>
<?php include("includes/layouts/header.php"); ?>

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
										<h1>Workshops</h1>
									</header>
									<a href = "delegate_reg.php"><button class = "btn bt-lg"> Delegate Registration</button></a>
									<a href = "workshop_reg.php"><button class = "btn bt-lg"> Workshop Registration</button></a>
									<form action = "view_delegates.php" method = "post">
										<input class = "btn bt-lg" type="submit" value = "View Delegates" name ="submit">
									</form>
								</div>
							</section>

					</div>


				<!-- Footer -->
<?php include("includes/layouts/footer.php"); ?>
