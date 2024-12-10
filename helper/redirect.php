<?php 
function redirect($path){
    $path=ROOT.$path;
    ?>
    <script>
        location.href='<?=$path;?>';
        </script>
    <?php
}
?>