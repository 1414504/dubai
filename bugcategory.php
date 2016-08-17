<php
    $category = $cat;
<?php
$con=new mysqli("ap-cdbr-azure-east-c.cloudapp.net", "b1236d751c9714","41e55854","acsm_dd5dc4ba52b59d7");
$sql= "select * from bug WHERE bugcategory = $cat";
$result=$con->query($sql);
$con->close();

if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_array($result){
        ?>
<div class="row">
    <div class="col-md-6">
        <?php echo $row['bugname']  ?>
    </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?php echo $row['bugcategory']  ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?php echo $row['bugsummary']  ?>
        </div>
    </div>
<?php
}
}