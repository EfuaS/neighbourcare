<?php

require('../classes/people_class.php');


function cust_check_controller($email){
    
    $cust_actions = new People();

    return $cust_actions->cust_check($email);
}

function retrieve_cust_controller ($email){
    
    $cust_actions = new People();

    return $cust_actions->retrieve_cust ($email);
}




function cust_reg_controller($name,$email,$pass,$tel){
    
    $cust_actions = new People();

    return $cust_actions->cust_reg($name,$email,$pass,$tel);
}



?>