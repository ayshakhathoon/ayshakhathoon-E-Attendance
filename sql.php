<?php
    include 'db_conn.php';
    $fname=$_POST["adn_no"];
    $result = mysqli_query($conn,"SELECT * FROM tbl_student where adn_no=$adn_no");
?>
<option value="">Select admission number</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
    <option value="<?php echo $row["fname"];?>"><?php echo $row["adn_no"];?></option>
<?php
}
?>

