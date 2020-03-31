<?php include("../db/dbcon.php");
error_reporting(0);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form">
                <form action="" method="GET">
                    Rol ID <input type="text" name="idrol" value="<?php echo $_GET['idrol']; ?>"><br><br>
                    Rol Omschrijving <input type="text" name="rolomschrijving" value="<?php echo $_GET['rolomschrijving']; ?>"><br><br>
                    <input type="submit" name="submit" value="Wijzig"><br><br>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if ($_GET['submit'])
{
    $idrol = $_GET['idrol'];
    $rolomschrijving = $_GET['rolomschrijving'];
    $query = "UPDATE rol SET rolomschrijving='$rolomschrijving' WHERE idrol='$idrol'";
    $data = mysqli_query($conn, $query);
    if ($data)
    {
        echo "<font color='green';>Gewijzigd <br><a href='../index.php'>Terug</a>";
    }
    else
    {
        echo "<font color='red';>Niet gewijzigd";
    }
}
else
{
 echo "<font color='blue';>Klik op 'Wijzig' om uw wijzigingen op te slaan";
}
?>
