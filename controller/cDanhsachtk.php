<?php
include_once("model/mDanhsachtk.php");
class ControllerDanhsachtk{
    public function getDanhsachtk()
    {
        $modelDanhsachtk = new mDanhsachtk();
        return $modelDanhsachtk->SelectDanhsachtk();
    }
}
?>