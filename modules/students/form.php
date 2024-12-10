<?php
checklogin();
$obj = DB('student');
if ($tableid) {
    $info = $obj->fetchOne($tableid);
}
if (isset($_POST['class_name'])) {
    $_POST['section'] = implode(',', $_POST['section']);
    if ($obj->save($_POST, $tableid)) {
        Session::set('success', "Class " . ($tableid ? 'updated' : 'inserted') . " successfully");
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
    <h2><?= $tableid ? 'Edit ' : 'Create '; ?><span>Student Form</span></h2>
</div>
<form method="post">
    <div class="border p-2">
        <div class="mb-3">
            <label for="name"> Name:<span class="text-danger">*</span> </label>
            <input type="text" required placeholder="Enter Name" class="form-control" id="name" name="name" value="<?= $info['name'] ?? ''; ?>">
        </div>

        <div class="mb-3">
            <label for="father_name"> Father Name:<span class="text-danger">*</span> </label>
            <input type="text" required placeholder="Enter Father Name" class="form-control" id="father_name" name="father_name" value="<?= $info['father_name'] ?? ''; ?>">
        </div>
        <div class="mb-3">
            <label for="mother_name"> Mother Name:<span class="text-danger">*</span> </label>
            <input type="text" required placeholder="Enter Mother Name" class="form-control" id="mother_name" name="mother_name" value="<?= $info['mother_name'] ?? ''; ?>">
        </div>
        <div class="mb-3">
            <label for="mobile"> Mobile:<span class="text-danger">*</span> </label>
            <input type="text" required placeholder="Enter Mobile" class="form-control" id="mobile" name="mobile" value="<?= $info['mobile'] ?? ''; ?>">
        </div>
        <div class="mb-3">
            <label for="gender">Gender:<span class="text-danger">*</span> </label>
            <div class="form-control">

                <input type="radio" value="male" id="m" name="gender"> <label for="m">Male</label>
                <input type="radio" value="female" id="f" name="gender"> <label for="f">Female</label>
            </div>
        </div>
        <div class="mb-3">
            <label>Select Class:<span class="text-danger">*</span> </label>
            <select class="form-control" name="classes_id">
                <option value="">Select Class</option>
                <?php
                $allclasses = DB('classes')->fetchAll();
                $selection=[];
                foreach ($allclasses as $cls) {
                
                ?>
                    <option value="<?=$cls['id'];?>"><?=$cls['class_name'];?></option>

                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-success" id="sbtn" <?= $tableid ? '' : 'disabled' ?>>Save</button>
        </div>
    </div>

</form>