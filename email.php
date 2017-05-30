<?php

$error = "";
$successMessage = "";



if($_POST) {
    
    //if email is empty
    if(!$_POST["email"]){
        $error .= "An email adress is required.<br>";
    }
    if(!$_POST["comment"]){
        $error .= "A comment field is required.<br>";
    }
    if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid.<br>";
    }
    if($error != ""){
        $error = '<div class="alert-danger pull-left"><strong>Oh no!</strong> There were error(s) in your form:<br><br>'. $error .'</div>';
    }else{
            $emailTo = "o.horovsky@gmail.com";
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $headers = "From: ".$_POST['email'];
            if(mail($emailTo, $name, $comment, $headers)){
                $successMessage = '
                    <div id="successModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content successMsg">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      Správa bola úspešne odoslaná!
    </div>
  </div>
</div>
                ';
                
                

            }else{
                
                $error = '
                    <div id="errorModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content errorMsg">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      Správu sa nepodarilo odoslať. Skúste znova neskôr.
    </div>
  </div>
</div>
                ';
            }
        }
    
}