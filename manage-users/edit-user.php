<?
//Secure File
if(!authenticator){
  die();
}

if( isset($_POST['user']) ){
  $db->update('users', $_POST['user'], $_GET['user_id']);
}

if( isset($_GET['user_id']) ){
  $user_id = $_GET['user_id'];
  $user = $db->queryRow("SELECT * FROM `users` WHERE id = '$user_id'");
}else{
  header('Location: /shamenator/manage-users/?error=No User ID supplied.');
}
include('../header.php');
?>

<h3>Edit User</h3>
<form method="GET" action="<?= $_SERVER['PHP_SELF']?>?action=edit-user&user_id=<?=$_GET['user_id']?>">
	<? include('_user-form.php'); ?>
	<button class="btn btn-success">Update User</button>
</form>
<?
include('../footer.php');
?>