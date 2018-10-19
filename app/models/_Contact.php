<?php
  //option, but easy: classname same as controller with leading underbar
  class _Contact {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function showAllMessage() {
        $this->db->query('SELECT * FROM tbl_contact');
        return $this->db->resultSet();
    }

    public function addDataToTheDataBase($fn, $ln, $sub, $msg) {

        $this->db->query('INSERT INTO tbl_contact (FNAME, LNAME, SUB, EMAIL) VALUES (:fn, :ln, :sub, :msg)');

        $this->db->bind(':fn', $fn);
        $this->db->bind(':ln', $ln);
        $this->db->bind(':sub', $sub);
        $this->db->bind(':msg', $msg);

        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
}