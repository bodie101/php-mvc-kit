<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
    <div class="col-sm-6">
    <!-- Stuff to submit to database -->

    <form class="form" action="<?php echo URLROOT . "/Contact/addData"; ?>" method="POST">

        <input type="text" placeholder="first name" name="fname">
        <input type="text" placeholder="last name" name="lname">
        <input type="text" placeholder="subject" name="subject">
        
        <textarea type="text" rows="5" cols="15" name="message"></textarea>

        <input type="submit" value="Submit the form" name="submit">

    </form>



    </div>
    <div class="col-sm-6">
    <!-- To read stuff from database -->

    <!-- <?php var_dump($data['contact']); ?> -->

    <?php foreach($data['contact'] as $contact) {

        ?>

        <h1><?php echo $contact['FNAME'] ." ". $contact['LNAME']; ?></h1>

        <?php

    }?>

    </div>
</div>

<?php include(APPROOT . "/views/includes/footer.php"); ?>