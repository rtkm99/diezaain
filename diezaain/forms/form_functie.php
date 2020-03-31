<?php include("../db/dbcon.php");
error_reporting(0);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form">
                <form action="" method="GET">
                    Rol Omschrijving <input type="text" name="rolomschrijving" value=""><br><br>
                    <input type="submit" name="submit" value="Submit"><br><br>
                </form>
                <a href="../index.php">terug</a>
            </div>
        </div>
    </div>
</div>

<?php
if ($_GET['submit'])
{
    $idrol = $_GET['idrol'];
    $rolomschrijving = $_GET['rolomschrijving'];

    if ($rolomschrijving!="")
    {
        $query = "INSERT INTO rol VALUES ('$idrol', '$rolomschrijving')";
        $data = mysqli_query($conn, $query);

        if ($data)
        {
            echo "Data toegevoegd aan database";
        }
    }
    else
    {
        echo 'alle velden moeten ingevult zijn!';
    }
}

?>