<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require APPROOT.'/vendor/phpmailer/phpmailer/src/Exception.php';
    require APPROOT.'/vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require APPROOT.'/vendor/phpmailer/phpmailer/src/SMTP.php';

    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

      public function __construct() {
        $this->pages = $this->model('_Pages'); //name your model
      }

      public function index() {

        // variables for data or model functions go here
        $emails = $this->pages->getAllMessages();

        // add data or variables to the array using key-value pairs
        $data = [
          'emails' => $emails
        ];

        // call your view 
        $this->view('pages/index', $data);
      }


      public function addMessages() {

        // variables for data or model functions go here
        $emails = $this->pages->getAllMessages();

        // add data or variables to the array using key-value pairs
        $data = [
          'emails' => $emails
        ];

        if(!empty($_POST['email']) && !empty($_POST['message'])) {
          if($this->pages->addMessage($_POST['email'], $_POST['message'])) {
          
            //How to use stack overflow :-) => https://stackoverflow.com/a/4963763
            //Composer, install this => composer require phpmailer/phpmailer

            $mail = new PHPMailer(true);

            //Send mail using gmail
            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->SMTPAuth = true; // enable SMTP authentication
            $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
            $mail->Port = 465; // set the SMTP port for the GMAIL server
            $mail->Username = GUSER; // Set the Constant in helper/startup.php
            $mail->Password = GPASS; // Set the Constant in helper/startup.php

            //Typical mail data
            $mail->AddAddress($_POST['email'], 'Jeff');
            $mail->SetFrom($_POST['email'], 'Jeff');
            $mail->Subject = "MVC CONTACT FORM";
            $mail->Body = $_POST['message'];

            try{
                $mail->Send();
                header("Location: ".URLROOT."pages/index");
            } catch(Exception $e){
                //Something went bad
                echo "<h1>Fail - </h1>" . $mail->ErrorInfo;
            }
          } 
        } 

        $this->view('pages/index', $data);
      }
    }