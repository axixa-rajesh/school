<?php

if (Session::get('login')) {
    redirect('classes');
}
if (isset($_POST['name'])) {


    $obj = DB('Users');

    if ($obj->save($_POST)) {
        Session::set('gt', "Register Successfully!");
        redirect('user/index');
    }
}
?>
<div class="container">
    <div class="heading_container heading_center">
        <h2>User <span>Registration</span></h2>
    </div>
   
    <form action="" method="post">
        <div class="mb-3">
            <label for="username">Enter User Name</label>
            <input type="text" name="name" id="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">Enter Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="mobile">Enter Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control">
        </div>
        <div class="mb-3 text-center"><button class="btn btn-success text-center">Save</button></div>
    </form>
</div>