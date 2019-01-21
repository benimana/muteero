 <?php include 'db.php';

 
// create a variable
$fullname=$_POST['fullname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO tbl_details(fullname,gender,age,email,telephone)
 VALUES('$fullname','$gender','$age','$email','$telephone')");

 
 if(mysqli_affected_rows($connect) > 0){
 echo "<p>Employee Added</p>";
 echo "<a href='index.html'>Go Back</a>";
} else {
 echo "Employee NOT Added<br />";
 echo mysqli_error ($connect);
}

?>