<?php include('assets/partials/header.php'); ?>

<div id="main">

    <div class="inner">

      <div class="container">

                  <div class="row">
                      <div class="col-md-6">
                        <form action="core/database/request.php" method="POST">

                          <h2 class="form-group">Suggest a Politi-bot</h2>

                          <?php

                          if(isset($_GET['msg'])) {

                          echo "<p class='text-danger'>" . $_GET['msg'] . "</p>";

                          }

                          ?>

                          <div class="form-group">
                          <input type="text" class="form-control" name="request" placeholder="Who's missing?">
                          </div>

                          <div class="form-group">
                          <input type="email" class"form-control" name="email" placeholder="Your email address">
                          </div>

                          <div class="form-group">
                          <button type="submit" name="insert" class="form-control">Submit</button>
                          </div>

                        </form>
                      </div>
                  </div>
        </div>
        </div>
      </div>


<script>



</script>

  <?php include('assets/partials/footer.php'); ?>
