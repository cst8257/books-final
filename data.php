<?php
  $books = json_decode(file_get_contents('books.json'), 1);

  usort($books, function ($a, $b) {
    if ($a['title'] < $b['title']) {
      return -1;
    } else if ($a['title'] > $b['title']) {
      return 1;
    } 
    return 0;
  });