<?php require_once ("lib/header.php");

if(isset($_POST['insert'])){
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$email=$_POST['email'];
	if($id=insertStudent($f_name,$l_name,$email)){
		
		echo 'inserted Student :'.$id;
	}
	else
	{
		echo "error insert user";
	}
}



?>


<form action="update.php" method="post">
 
  <div class="form-row">
    <div class="col-lg-3">
      <input type="text" class="form-control" placeholder="First name" name="f_name">
    </div>
    <div class="col-lg-3">
      <input type="text" class="form-control" placeholder="Last name" name="l_name">
    </div>
    <div class="col-lg-3">
      <input type="text" class="form-control" placeholder="Email" name="email">
    </div>
  </div>
  <div class="col-lg-6">
  <button type="submit" class="btn btn-primary " name="insert">Insert</button>
    <button type="submit" class="btn btn-primary " name="back"><a href="index.php">Back</a></button>
	</div>
</form>

<?php require_once ("lib/footer.php")?>