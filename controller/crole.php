<?php
include_once("model/mrole.php");
class ControllerRole{
  /**
   * lấy tất cả role
   *
   * @return void
   */
    function getTatCaRole(){
        $modelrole= new modelrole();
        return $modelrole->selectAllRole();
    }
}
