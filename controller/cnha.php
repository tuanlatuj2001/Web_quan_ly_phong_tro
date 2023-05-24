<?php 
	include_once("model/mnha.php");
	class controlnha{
		function laynha(){
			$p = new modelnha();
			$tblPro = $p->chonnha();
			return ($tblPro);
		}
	}
?>