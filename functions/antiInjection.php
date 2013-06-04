<?php
function anti_injection($string){
  $string = str_ireplace(" or ", "", $string);
  $string = str_ireplace("select ", "", $string);
  $string = str_ireplace("delete ", "", $string);
  $string = str_ireplace("create ", "", $string);
  $string = str_ireplace("drop ", "", $string);
  $string = str_ireplace("update ", "", $string);
  $string = str_ireplace("drop table", "", $string);
  $string = str_ireplace("show table", "", $string);
  $string = str_ireplace("'", "", $string);
  $string = str_replace("#", "", $string);
  $string = str_replace("=", "", $string);
  $string = str_replace("--", "", $string);
  $string = str_replace("-", "", $string);
  $string = str_replace("*", "", $string);
  $string = strip_tags($string);
  $string = addslashes($string);

  return $string;
}
