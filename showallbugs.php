<?php
$con=new mysqli("", "","","");
$sql= "select * from bug";
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