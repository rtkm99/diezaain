<?php include("../db/dbcon.php");
error_reporting(0);
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form">
                    <form action="" method="GET">
                        ID evenement <input type="text" name="idevenement" value=""><br><br>
                        Evenementomschrijving <input type="text" name="evenementomschrijving" value=""><br><br>
                        Adres <input type="text" name="adres" value=""><br><br>
                        Huisnummer <input type="text" name="huisnummer" value=""><br><br>
                        Plaats <input type="text" name="plaats" value=""><br><br>
                        Postcode <input type="text" name="postcode" value=""><br><br>
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
    $idevenement = $_GET['idevenement'];
    $evenementomschrijving = $_GET['evenementomschrijving'];
    $adres = $_GET['adres'];
    $huisnummer = $_GET['huisnummer'];
    $plaats = $_GET['plaats'];
    $postcode = $_GET['postcode'];
    if ($idevenement!="" && $evenementomschrijving!="" && $adres!="" && $huisnummer!="" && $plaats!="" && $postcode!="")
    {
        $query = "INSERT INTO evenement VALUES ('$idevenement', '$evenementomschrijving', '$adres', '$huisnummer', '$plaats', '$postcode')";
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