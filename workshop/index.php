<?php include("includes/layouts/header.php"); ?>

    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Header -->
          <header id="header">
            <a href="main.php" class="logo"><strong>Revels'17</strong> <span>Carnaval of life</span></a>
          </header>

        <!-- Main -->
          <div id="main" class="alt">

            <!-- One -->
              <section id="one">
                <div class="inner">
                  <header class="major">
                    <h1>Delegate Registration</h1>
                  </header>


                  <form action="login.php" method="post">

                    <h3>InfoDesk Login </h3><br>
                    <div class = "field half first">
                      <label for = "username">Username </label>
                        <input type = "text" name = "username" id = "username" class = "form-control input-lg" placeholder = "Enter username" required = "required">
                    </div>

                    <div class = "field half  ">
                      <label for = "password" class = "col-sm-2 col-form-label">Password </label>
                        <input type = "password" name = "password" id = "password" class = "form-control input-lg" placeholder = "Enter password" required = "required">
                    </div>

                    <h3>SysAd Login </h3><br>
                    <div class = "field half first">
                      <label for = "username_sys" class = "col-sm-2 col-form-label">Username </label>
                        <input type = "text" name = "username_sys" id = "username_sys" class = "form-control input-lg" placeholder = "Enter username" required = "required" value = "">
                    </div>

                    <div class = "field half  ">
                      <label for = "password_sys" class = "col-sm-2 col-form-label">Password </label>
                        <input type = "password" name = "password_sys" id = "password_sys" class = "form-control input-lg" placeholder = "Enter password" required = "required">
                    </div>

                    <div>
                      <button class = "btn btn-primary btn-lg" type = "submit" name = "submit" value = "login">Submit</button>
                    </div><br>
                    <br>

                  </form>

  								</div>
  							</section>

  					</div>


        <!-- Footer -->

      <?php include("includes/layouts/footer.php"); ?>
