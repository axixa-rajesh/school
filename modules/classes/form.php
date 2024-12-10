<?php
checklogin();
$obj = DB('classes');
if ($tableid) {
    $info = $obj->fetchOne($tableid);
}
if (isset($_POST['class_name'])) {
    $_POST['section'] = implode(',', $_POST['section']);
    if ($obj->save($_POST, $tableid)) {
        Session::set('success',"Class ".($tableid?'updated':'inserted')." successfully");
        redirect('classes/');
    } else {
        $error = "Something went wrong!";
    }
}
if ($error ?? "") {
?>
    <div class="alert alert-danger"><?= $error; ?></div>
<?php
} ?>
<div class="heading_container heading_center">
    <h2><?= $tableid ? 'Edit ' : 'Create '; ?><span>Class</span></h2>
</div>
<form method="post">
    <div class="border p-2">
        <div class="mb-3">
            <label for="class_name">Class Name:<span class="text-danger">*</span> </label>
            <input type="text" required placeholder="Enter Class Name" class="form-control" id="class_name" name="class_name" value="<?= $info['class_name'] ?? ''; ?>">
        </div>
        <div class="mb-3">
            <label for="fees">Class Fees:<span class="text-danger">*</span> </label>
            <input type="number" value="<?= $info['fees'] ?? ''; ?>" required placeholder="Enter Class Fees" class="form-control" id="fees" name="fees">
        </div>
        <?php if (isset($info['section']) && $info['section']) {
            $allsections = explode(',', $info['section']);
        ?>
            <div class="mb-3">

                <label>Stored Section(s): </label>
                <?php 
                $index=1;
                foreach ($allsections as $sc) { ?>
                    <div class="input-group mb-3" id="sd<?=$index;?>">
                        <button class="btn btn-outline-danger" type="button" id="button-addon1" onclick="document.getElementById('sd<?=$index;?>').remove()">Delete</button>
                        <input type="text" placeholder="Enter Section" class=" form-control" name="section[]" value="<?= $sc; ?>" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                    
                <?php 
                $index++;
            } ?>
            </div>
        <?php } ?>
        <div class="mb-3">

            <label for="section">Number Of Section:<span class="text-danger">*</span> </label>
            <input type="number" <?=$tableid?'':'required'?> placeholder="Enter Section Fees" min="0" class="form-control" id="section" onkeyup="createSection(Number(this.value))">
        </div>
        <div id="sc" class="row mb-3">

        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-success" id="sbtn" <?=$tableid?'':'disabled' ?>>Save</button>
        </div>
    </div>

</form>
<script>
    function createSection(value) {
        sc.innerHTML = "";
        for (let i = 1; i <= value; i++) {
            setTimeout(function() {
                let obj = document.createElement('div');
                obj.setAttribute('class', 'mb-3 col-4');
                obj.innerHTML = ` <input type="text" required placeholder="Enter Section Name" class="form-control" name="section[]" value='${String.fromCharCode(64+i)}'>`;
                sc.appendChild(obj);
            }, 100 + (i * 700));


        }
        if (Number(section.value) >= 0 && section.value != "")
            sbtn.disabled = false;
        else
            sbtn.disabled = true;

    }
</script>