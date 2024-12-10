<?php
checklogin();
$obj = DB('student');
if ($tableid) {
   if( $obj->delete($tableid)){
     Session::set('success',"Class Deleted Successfully");
   }
}
$data = $obj->fetchAll();
?>
<div class="heading_container heading_center">
    <h2>List of <span>Students</span></h2>
</div>
<?php
if (Session::get('success')) {
?>
    <div class="alert alert-success text-center h5"><?= Session::get('success'); ?></div>
<?php
    Session::delete('success');
} ?>
<div class="alert">

    <a href="<?= ROOT; ?>students/form" class="btn btn-success"> Create Student </a>
</div>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>S.No.</th>
            <th>Action</th>
            <th>Class Name</th>
            <th>Section</th>
            <th>Fees</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index = 0;
        foreach ($data as $info) {
        ?>
            <tr>
                <td><?= ++$index; ?></td>
                <td>
                    <a href="<?= ROOT; ?>classes/form/<?= $info['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="#" onclick="confirmDelete('<?= ROOT; ?>classes/index/<?= $info['id'] ?>')" class="btn btn-danger">Delete</a>
                </td>
                <td><?= $info['class_name']; ?></td>
                <td><?= $info['section']; ?></td>
                <td><?= $info['fees']; ?></td>

            </tr>
        <?php } ?>
    </tbody>
</table>