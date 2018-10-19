<?php

class Contact extends Controller {

    public function __construct() {
      $this->contact = $this->model('_Contact'); //name your model
    }

    public function index() {
        $contact = $this->contact->showAllMessage();

        $data = [
            'contact' => $contact
        ];

        $this->view('contact/index', $data);
    }

    public function addData() {

        echo $_POST['fname'];
        echo $_POST['lname'];
        echo $_POST['subject'];
        echo $_POST['message'];

        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['subject']) && !empty($_POST['message'])) {

            if($this->contact->addDataToTheDataBase($_POST['fname'], $_POST['lname'], $_POST['subject'], $_POST['message'])) {

                echo "SUCCESS!";

            } else {

                echo "WRONG - IT BROKE!";

            }
        }

    }
}