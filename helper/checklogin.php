<?php 
function checklogin(){
    if (!Session::get('login')) {
        redirect('user');
    }
}