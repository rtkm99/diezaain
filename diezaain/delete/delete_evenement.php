<?php
include('../db/dbcon.php');
$idevenement = $_GET['idevenement'];
$query = "DELETE FROM evenement WHERE idevenement='$idevenement'";
$data = mysqli_query($conn, $query);
if ($data)
{
    echo "
<div class='container'>
    <div class='row'>
        <div class='col-12'>
            <p class='bericht_verwijderd'>
                <font color='green';>Evenement verwijderd
            </p>
        </div>
    </div>
</div>";
}
else
{
    echo "<font color='red';>Sorry, evenement niet verwijderd";
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