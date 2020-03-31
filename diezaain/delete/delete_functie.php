<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<?php
include('../db/dbcon.php');
$rolomschrijving = $_GET['rolomschrijving'];
$query = "DELETE FROM rol WHERE rolomschrijving='$rolomschrijving'";
$data = mysqli_query($conn, $query);
if ($data)
{
    echo "
<div class='container'>
    <div class='row'>
        <div class='col-12'>
            <p class='bericht_verwijderd'>
                <font color='green';>Functie verwijderd
            </p>
        </div>
    </div>
</div>";
}
else
{
    echo "<font color='red';>Sorry, functie niet verwijderd";
}
?>
<div class='container'>
    <div class='row'>
        <div class='col-12'>
            <div class="home_btn">
                <a href="../index.php" class="btn btn-info" role="button">Home</a>
            </div>
        </div>
    </div>
</div>