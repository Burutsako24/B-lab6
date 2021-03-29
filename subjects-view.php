<?php 
    require("dbConnect.php");
    $sql = "SELECT * FROM subjects";     
    $result = $conn->query($sql);

?>

<!DOCTYPE HTML>
<html> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    #table_show {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
    }

    #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #table_show tr:nth-child(even){background-color: #f2f2f2;}

    #table_show tr:hover {background-color: #ddd;}

    #table_show th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
    }
</style>
<body>
    <a href="subjects-form.php">
        <button class="w3-button w3-yellow">Yellow</button></a>
    <?php if ($result->num_rows > 0) { ?>
    <table id="table_show">
        <tr>
            <th></th>
            <th>subjectID</th>
            <th>subjectName</th>
            <th>subjectsCode</th>
            <th>unit</th>
            <th>unitCode</th>
            <th>majors_imajorID</th>
            <th>edit</th>
            <th>del</th>
        </tr>
        <?php $i=0; while($row = $result->fetch_assoc()) { $i++;?>
            <tr>
                <td><?=$i?></td>
                <td><?=$row["subjectID"]?></td>
                <td><?=$row["subjectName"]?></td>
                <td><?=$row["subjectsCode"]?></td>
                <td><?=$row["unit"]?></td>
                <td><?=$row["unitCode"]?></td>
                <td><?=$row["majors_imajorID"]?></td>
                <td><a href="http://localhost/itd62-276/Lab6/subjects-form-edit.php?manage_function=edit-record&subjectID=<?=$row["subjectID"]?>">EDIT
                    </a></td>
                <td>
                    <a href="http://localhost/itd62-276/Lab6/subjects-manage.php?manage_function=delete-record&subjectID=<?=$row["subjectID"]?>">DEL
                    </a></td>
            </tr>
        <?php } ?>
    </table>
    <?php }else{
        echo "<center>No Data</center>";
    } ?>
</body>
</html>