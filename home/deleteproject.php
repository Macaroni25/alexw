<?php

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
{
  // here comes your delete query: use $_POST['deleteItem'] as your id
  $sql = "DELETE FROM projects WHERE id=$_POST['deleteItem']";
}