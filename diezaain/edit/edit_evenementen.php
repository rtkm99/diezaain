<?php include("../db/dbcon.php");
error_reporting(0);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form">
                <form action="" method="GET">
                    ID evenement <input type="text" name="idevenement" value="<?php echo $_GET['idevenement']; ?>"><br><br>
                    Evenementomschrijving
                    <input type="text" name="evenementomschrijving" value="<?php echo $_GET['evenementomschrijving']; ?>"><br><br>
                    Adres <input type="text" name="adres" value="<?php echo $_GET['adres']; ?>"><br><br>
                    Huisnummer <input type="text" name="huisnummer" value="<?php echo $_GET['huisnummer']; ?>"><br><br>
                    Plaats <input type="text" name="plaats" value="<?php echo $_GET['plaats']; ?>"><br><br>
                    Postcode <input type="text" name="postcode" value="<?php echo $_GET['postcode']; ?>"><br><br>
                    <input type="submit" name="submit" value="Wijzig"><br><br>
                </form>
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
    $query = "UPDATE evenement SET evenementomschrijving='$evenementomschrijving', adres='$adres',
    huisnummer='$huisnummer', plaats='$plaats', postcode='$postcode' WHERE idevenement='$idevenement'";
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
