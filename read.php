<?php
  require "data.php";
  require "functions.php";
  $title = "Read";
  $books = filterBooks($books, true);
  require "template.php";
  
