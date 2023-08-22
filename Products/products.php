<?php
  namespace products\v1\command;
  require "Testing/best.php";

  class product {
    public function __construct()
    {
      $test = new \testing\v1\command\product();
    }
  }

  function wow(){
    echo "This is products wow!";
  }