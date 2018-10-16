<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->

  <div class="col-sm-6">

  <form action="<?php echo URLROOT . 'pages/addMessages/'; ?>" method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="form-control btn btn-primary" value="Submit Form" >
    </div>
  </form>

  </div>
  <div class="col-sm-6">
    <h3>Results</h3>
    <table class="table">
      <thead>
        <tr>
          <th style="width: 50%;">Email</th>
          <th style="width: 50%;">Message</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data['emails'] as $email) {

          $output  = "<tr><td>";
          $output .= $email['EMAIL'];
          $output .= "</td><td>";
          $output .= $email['MSG'];
          $output .= "</td></tr>";

          echo $output;

        }?>
      </tbody>
    </table>
  </div>

</div>

<?php include(APPROOT . "/views/includes/footer2.php"); ?>