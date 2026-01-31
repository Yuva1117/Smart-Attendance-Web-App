<?php include 'db.php'; ?>
<form method="post">
  <input type="text" name="name" placeholder="Student Name" required>
  <input type="text" name="roll" placeholder="Roll No" required>
  <button name="add">Add</button>
</form>

<?php
if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  mysqli_query($conn, "INSERT INTO students(name,roll) VALUES('$name','$roll')");
  echo "Student Added";
}
?>
