<?php
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubjects.subjectid";
    $results = mysqli_query($dbc, $query)
?>