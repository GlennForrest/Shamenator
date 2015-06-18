<?
// Secure file
if(! isset($authenticator) ){
  die(); 
}

if($_POST['website']){
  $db->insert('websites', $_POST['website'], 'Successfully added website');
}
include('../header.php');
?>

<h3>Add New Website</h3>
<form method="POST" action="<?= $_SERVER['PHP_SELF']?>?action=add-website">
	<? include('_website-form.php'); ?>
	<button class="btn btn-success">Add Website</button>
</form>
<?
include('../footer.php');
?>