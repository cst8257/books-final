<?php

function filterBooks ($books, $haveRead) {
  return array_filter($books, function ($book) use ($haveRead) {
    return $book['haveRead'] === $haveRead;
  });
}