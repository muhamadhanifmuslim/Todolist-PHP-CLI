<?php
function addTodo (string $todo){
  global $todolist;

  $number = sizeof($todolist) + 1;
  $todolist[$number] = $todo;
}
?>
