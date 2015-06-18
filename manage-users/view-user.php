<?
//Secure File
if(!authenticator){
  die();
}

if( isset($_GET['user_id']) ){
  $user_id = $_GET['user_id'];
  $user = $db->queryRow("SELECT * FROM `users` WHERE id = '$user_id'");
  $readonly = true;
}else{
  header('Location: /shamenator/manage-users/?error=No User ID supplied.');
}
include('../header.php');
?>

<h3>View User</h3>
<form method="GET" action="<?= $_SERVER['PHP_SELF']?>?action=view-user&user_id=<?=$_GET['user_id']?>">
	<? include('_user-form.php'); ?>
	<button type="button" class="btn btn-success">Back</button>
</form>
<?
include('../footer.php');
?>