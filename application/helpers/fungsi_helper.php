<?php
function check_already_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('posuserid');
    if($user_session){
        redirect('dashboard');
    }
}

function check_not_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('posuserid');
    if(!$user_session){
        redirect('auth/login');
    }
}

function is_admin(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('poslevel');
    if(!$user_session){
        redirect('auth/login');
    }elseif($user_session!='1'){
        redirect('dashboard');
    }
}
