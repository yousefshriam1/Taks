
<?php 
require_once('lib/header.php');
$allstudent = getAllStudent();

if(isset($_GET['action'])){
	if($_GET['action']=='del'){
		$id=$_GET['id'];
		deleteStudentById($id);
	}
}
?>
<table class="table">
	<thead>
		    <tr>
			      <th scope="col">#</th>
			      <th scope="col">First</th>
			      <th scope="col">Last</th>
			      <th scope="col">email</th>

		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach($allstudent as $student): ?>
		  	


	  	   <tr>
				<td><?php echo $student['id'] ?></td>
				<td><?php echo $student['f_name']; ?></td>
				<td><?php echo $student['l_name']; ?></td>
				<td><?php echo $student['email']; ?></td>
				<td><a href="?action=del&id=<?php echo $student['id']; ?> ">delete</a></td>
				<td><a href="edit.php?id=<?php echo $student['id']  ?>">edit</a></td>

			</tr>
		<?php endforeach; ?>
		  </tbody>

</table>
<button class="btn btn-primary"><a href="update.php">Insert</a></button>









<?php   
require_once('lib/footer.php');?>

