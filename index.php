<?php
  spl_autoload_register(function ($name) {
    include "classes/{$name}.php";
  });

  $my_tester = new second();