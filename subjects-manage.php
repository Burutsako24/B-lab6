<?php 
    require("dbConnect.php");
    //var_dump($_POST);
    //var_dump($_GET);
    $manage_function = $_REQUEST["manage_function"];
    if($manage_function=="new-record"){        
        $sID = $_POST["ssubjectID"];
        $sName = $_POST["ssubjectName"];
        $sCode= $_POST["ssubjectsCode"];
        $units =$_POST["Unit"];
        $unitCodes =$_POST["UnitCode"];
        $mID =$_POST["mmajors_imajors"];


        $sql = "INSERT INTO subjects(subjectID,subjectName,subjectsCode,unit,unitCode,majors_imajorID) 
        VALUES ('$sID', '$sName', '$sCode','$units','$unitCodes','$mID');";

        $result = $conn->query($sql);
        //header("location: URL" );
        header("location: http://localhost/itd62-276/Lab6/subjects-view.php" );
        exit(0);

    }else if($manage_function=="edit-record"){
        $subID = $_POST["sid"];
        $subName = $_POST["sname"];
        $subCode= $_POST["scode"];
        $Ut =$_POST["unitt"];
        $UnitCode =$_POST["unitcodee"];
        $m_imajors =$_POST["majorid"];

        $sql = "UPDATE subjects SET  subjectName='$subName',subjestsCode = '$subCode',unit = '$Ut',unitCode ='$UnitCode',majors_imajorID = '$m_imajors' WHERE subjectID  ='$subID';";

        $result = $conn->query($sql);
        echo $sql;die();
        header("location: http://localhost/itd62-276/Lab6/subjects-view.php" );
        exit(0);
        //echo "edit-record";
        // UPDATE Major SET Name='' , SchoolID='' WHERE MID='1'
    }else if($manage_function=="delete-record"){
        $sid = $_GET["subjectID"];

        $sql = "DELETE from subjects where subjectID='$sid';";
        
        //echo $sql;
        //die();

        $result = $conn->query($sql);
        header("location: http://localhost/itd62-276/Lab6/subjects-view.php" );
        exit(0);
    }
?>