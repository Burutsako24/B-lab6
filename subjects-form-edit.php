<?php 
    require("dbConnect.php");
    $subID =$_GET["subjectID"];
    $subName ="";
    $subCode ="";
    $Unit="";
    $UnitCode ="";
    $m_imajors ="";

    
    $sql = "SELECT * FROM subjects WHERE subjectID = '$subID'";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $subName = $row["subjectName"];
        $subCode =$row["subjectsCode"];
        $Ut=$row["unit"];
        $UCode =$row["unitCode"];
        $m_imajors =$row["majors_imajorID"];
       
    }

    $sql = "SELECT * FROM  majors";
    $result = $conn->query($sql);
?>
<!DOCTYPE HTML>
<html> 
<body>
<form action="subjects-manage.php" method="post">
<input type="hidden" name="manage_function" value="edit-record">
   subjectID: <input type="text" name="sid" readonly value="<?=$subID?>"><br>
   subjectName: <input type="text" name="sname" value="<?=$subName?>"><br>
   subjectsCode : <input type="text" name="scode" value="<?=$subCode?>"><br>
   unit: <input type="text" name="unitt" value="<?=$Ut?>"><br>
   unitCode: <input type="text" name="unitcodee" value="<?=$UCode?>"><br>
   majors_imajors: <input type="text" name="majorid" value="<?=$m_imajors?>"><br>
   
   <input type="submit">
</form>
    <a href="subjects-view.php">
        <button class="w3-button w3-yellow">Yellow</button></a>
    <table id="table_show">

</body>
</html>