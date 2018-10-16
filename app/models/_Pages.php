<?php
  //option, but easy: classname same as controller with leading underbar
  class _Pages {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Any model functions go here
    // Can return DB data or static

    /////////////////////////////////////////////////
    //////////////// EXAMPLES ///////////////////////
    /////// YOU SHOULD DELETE THESE AFTER ///////////
    /////////////////////////////////////////////////

    //example: static data
    public function title() {
      return "Show All People";
    }

    //example: db data - select
    public function getAllMessages() {
      $this->db->query('SELECT * FROM tbl_emails');
      return $this->db->resultSet();
    }

    //exaple: db data - insert
    public function addMessage($em, $msg) {
      
      //Adding data to database
      $this->db->query('INSERT INTO tbl_emails (EMAIL, MSG) VALUES (:em, :msg)');

      //Binding Variables
      $this->db->bind(':em', $em);
      $this->db->bind(':msg', $msg);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }
  }
?>