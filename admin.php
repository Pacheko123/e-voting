<?php include("include/static.php"); ?>
<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar ">
<!-- Navbar brand -->
<div class="container">
  <a class="navbar-brand" href="">Digital Voter.</a>
    <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class='nav-item'>
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class='nav-item'>
          <a class="nav-link" href="register.php">VIEW RESULTS</a>
        </li>
        <li class='nav-item'>
          <a class="nav-link" href="login.php">CREATE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ASPIRANTS</a>
        </li>
      </ul>

    </div>
    <!-- Collapsible content -->
</div>
</nav>

<!-- Table to display aspirants -->

<div class="table-responsive text-nowrap">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Admission NUmber</th>
        <th scope="col">Political Party</th>
        <th scope="col">Seat</th>
        <th scope="col">Year of Study</th>
        <th scope="col">Verify</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td><div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"></label>
  </div></td>
       
      </tr>
    
    </tbody>
  </table>

</div>
<div class="text-right">
<button type="button" class="btn btn-dark">SUBMIT</button>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">// Animations init
  new WOW().init();
</script>