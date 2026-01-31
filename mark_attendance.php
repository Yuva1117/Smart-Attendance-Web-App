<?php include 'db.php'; ?>
<form method="post">
<?php
$res = mysqli_query($conn, "SELECT * FROM students");
while ($row = mysqli_fetch_assoc($res)) {
  echo $row['name']." 
  <select name='status[".$row['id']."]'>
    <option value='Present'>Present</option>
    <option value='Absent'>Absent</option>
  </select><br>";
}
?>
<button name="save">Save Attendance</button>
</form>

<?php
if (isset($_POST['save'])) {
  foreach ($_POST['status'] as $id => $status) {
    mysqli_query($conn, "INSERT INTO attendance(student_id,date,status)
      VALUES($id, CURDATE(), '$status')");
  }
  echo "Attendance Saved";
}
?>
