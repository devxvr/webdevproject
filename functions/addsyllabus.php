<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
        <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['SUBMIT'])) {
                $code = $_POST['code'];
                $author = $_POST['author'];
                $subjects = $_POST['subjects'];

                if(empty($code) || empty($name)) {
                    if(empty($code)){
                        echo "<font color-'red'>Subject Code field  is empty.</font><br/>";
                    }
                    if(empty($name)){
                        echo "<font color-'red'>Subject Name field  is empty.</font><br/>";
                    }
                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>"
                }
                else {
                    $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(syllabus_code, syllabus_author, subject_id) VALUES('$code', '$author', '$subjects')");
                    echo "<font color='green'>Data added succesfully.";
                    echo "<br/><a href='../index.php'>View Results</a>";
                }
            }
        ?>
    </body>
</html>