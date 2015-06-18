<?
// Secure file
if(! isset($authenticator) ){
  die(); 
}

if($_POST['user']){
  $db->insert('users', $_POST['user'], 'Successfully added user');
}
include('../header.php');
?>

<h3>Add New User</h3>
<form method="POST" action="<?= $_SERVER['PHP_SELF']?>?action=add-user">
  <? include('_user-form.php'); ?>
  <button class="btn btn-success">Add User</button>
</form>
<?
include('../footer.php');?>