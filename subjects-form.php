<?php 
    require("dbConnect.php");
    $sql = "    SELECT *  
                FROM  majors ";
    $result = $conn->query($sql);
?>
<!DOCTYPE HTML>
<html> 
<body>
<form action="subjects-manage.php" method="post">
<input type="hidden" name="manage_function" value="new-record">
   subjectID: <input type="text" name="ssubjectID"><br>
   subjectName: <input type="text" name="ssubjectName"><br>
   subjectsCode : <input type="text" name="ssubjectsCode"><br>
   unit: <input type="text" name="Unit"><br>
   unitCode: <input type="text" name="UnitCode"><br>
   majors_imajors: <input type="text" name="mmajors_imajors"><br>
   
   <input type="submit">
</form>
    <a href="subjects-view.php">
        <button class="w3-button w3-yellow">Yellow</button></a>
    <table id="table_show">

</body>
</html>
