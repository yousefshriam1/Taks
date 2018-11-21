	<?php 
  
  require_once ("lib/header.php");
	
  if(isset($_GET)) {
    $id = $_GET['id'];
  }

  $row = getStudentById($id);

  if(isset($_POST['Update'])) {
    $id = $row['id'];
    $f_name = $_POST['f_name'];  
    $l_name = $_POST['l_name'];  
    $email = $_POST['email'];

  	if(updateStudent($id,$f_name,$l_name,$email)){
      header('Location: index.php');
      exit();
    }
  }	

?>

<form action="edit.php?id=<?php echo $row['id'] ?>" method="post">
 
  <div class="form-row">
    <div class="col-lg-3">
      <input type="text" class="form-control"  name="f_name" value ="<?php echo $row['f_name'] ?>">
    </div>
    <div class="col-lg-3">
      <input type="text" class="form-control"  name="l_name" value ="<?php echo $row['l_name'] ?>" >
    </div>
    <div class="col-lg-3">
      <input type="text" class="form-control" value ="<?php echo $row['email'] ?>" name="email">
    </div>
    <div class="col-lg-6">
      <button type="submit" class="btn btn-primary" name="Update">Update</button>
      <button type="submit" class="btn btn-primary" name="back"><a href="index.php">Back</a></button>
  	</div>
  </div>

</form>



















<?php require_once ("lib/footer.php")?>