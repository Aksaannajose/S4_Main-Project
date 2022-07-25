<?php
session_start ( ) ;
if ( ! isset ($_SESSION['	login_id' ] ) ) {
$msg="invalid user";
                         header ( ' location : signin.php?msg='  .$msg);
						 }
						 ?>