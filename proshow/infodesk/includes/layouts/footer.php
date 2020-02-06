<footer>
    <div class="row text-center">
        <div class="col-lg-12">
            <a href = "http://www.mitportals.in"><p>Copyright &copy;System-Admin 2017</p></a>
        </div>
    </div>
    <!-- /.row text center-->
</footer>
  </div>
    <!-- /.container -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>

<?php
  //Close the database connection
  if (isset($connection))
  {
    mysqli_close($connection);
  }

?>
