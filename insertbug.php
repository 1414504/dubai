<?php
$message = "";
if(isset($_POST['save_bug']))
{
    $name = $_POST['bug_name'];
    $category = $_POST['bug_category'];
    $summary = $_POST['bug_summary'];

    $con = new mysqli("localhost", "root", "root", "vehicle");

    $sql = "insert into bug (bug_name, bug_summary, bug_category)values('$name', '$summary','$category')";

    $con->query($sql);
    $con->close();
    $message = "<h3>Data saved successfully</h3>";

}//end if statement
