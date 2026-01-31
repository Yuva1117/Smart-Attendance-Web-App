<?php include 'db.php'; ?>
<table border="1">
<tr>
  <th>Name</th>
  <th>Date</th>
  <th>Status</th>
</tr>

<?php
$q = "SELECT students.name, attendance.date, attendance.status
      FROM attendance
      JOIN students ON attendance.student_id = students.id";
$res = mysqli_query($conn, $q);

while ($row = mysqli_fetch_assoc($res)) {
  echo "<tr>
    <td>{$row['name']}</td>
    <td>{$row['date']}</td>
    <td>{$row['status']}</td>
  </tr>";
}
?>
</table>
