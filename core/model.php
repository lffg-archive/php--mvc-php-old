<?php
  class model
  {

    protected $pdo;
    protected $userdata;

    public function __construct ()
    {
      global $pdo;
      global $userdata;

      $this->userdata = $userdata;
      $this->pdo = $pdo;
    }
  }
?>