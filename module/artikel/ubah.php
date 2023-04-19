<?php
require_once('class/database.php');
require_once('class/form.php');


$database = new Database();
$id = $_GET['id'];
$data = $database->get("tb_form1", "where id=" . $id);

$database = new Database();
if (isset($_POST['update'])) {
    $data = [
        'nim' => $_POST["nim"],
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat']
    ];
    $database->update("tb_form1", $data, "id=" . $id);
    header("location: ../home");
}

$form = new Form("", "update");
$form->addField("nim", "Nim", $data["nim"]);
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("alamat", "Alamat", $data["alamat"]);
$form->displayForm();
?>
<?php require('footer.php'); ?>