 <div class="heading_container heading_center">
     <h2>User <span>Login</span></h2>
 </div>

 <?php
    if (Session::get('login')) {
        redirect('classes');
    }
    if (isset($_POST['username'])) {

        $obj = DB('Users');
        $username = addslashes($_POST['username']);
        $sql = "select * from users where name='$username' ";

        $data = $obj->custom($sql);
        //print_r($data);
        if ($data && $data['password'] == $_POST['pwd']) {

            Session::set('login', $data);
            redirect('classes');
        } else {
            if ((Session::get('attempt') ?? 0) < 3) {

                Session::set('attempt', Session::get('attempt') + 1);

                $error = "username or password is wrong!";
            }
        }
    }
    if ($error ?? "") {
    ?>
     <div class="alert alert-danger"><?= $error; ?></div>
 <?php
    } ?>
 <?php if (Session::get('gt')) {
    ?>
     <div class="alert alert-success h4 text-center"><?= Session::get('gt'); ?></div>

 <?php
        Session::delete('gt');
    }

    if (Session::get('attempt') < 3) {
    ?>
     <form action="" method="post">

         <div class="mb-3">
             <label for="username">Enter User Name</label>
             <input type="text" name="username" id="username" class="form-control">
         </div>
         <div class="mb-3">
             <label for="password">Enter Password</label>
             <input type="password" name="pwd" id="password" class="form-control">
         </div>
         <div class="mb-3 text-center"><button class="btn btn-success text-center">Login</button></div>
     </form>

 <?php } else {
        if (!isset($_COOKIE['tm'])) {
            setcookie('tm', time() + 10);
            echo <<<JS
        <script>
        setTimeout(() => {
            location.href=location.href;
        }, 10001);
        </script>
        JS;
        }
        if (isset($_COOKIE['tm'])) {
            if ($_COOKIE['tm'] <= time()) {
                Session::delete('attempt');
                setcookie('tm', time() + 10, time() - 1);
                echo <<<JS
        <script>
        setTimeout(() => {
            location.href=location.href;
        }, 1);
        </script>
        JS;
                // header('Location:login.php');

            }
        }
        echo <<<STRING
    you are blocked for <span class="text-danger h4">00:<span id="dt">10</span></span> due to multiple attempted 
    <script>
        setInterval(function(){
            dt.innerText=(Number(dt.innerText)<=10)?'0'+(Number(dt.innerText)-1):(Number(dt.innerText)-1);
        },1000);
    </script>
    STRING;
    } ?>