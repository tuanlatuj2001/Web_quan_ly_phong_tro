<?php
include_once("model/mDanhsachnha.php");
class ControllerDanhsachnha{
    public function getDanhsachnha()
    {
        $modelDanhsachnha = new mDanhsachnha();
        return $modelDanhsachnha->SelectDanhsachnha();
    }

    function Addnha($diachi, $idql, $tinhthanh){
        $p = new mDanhsachnha();
        $ins = $p->Insertnha($diachi, $idql, $tinhthanh);;
        if($ins){
            return 1;
        }else{
            return 0; // Không thể insert
        }
    }

    function Deletenha($idnha){
        $p = new  mDanhsachnha();
        $tblnha = $p->Deletenha($idnha);
        return $tblnha;
    }


}
?>


