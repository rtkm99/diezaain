<?php include('db/dbcon.php');
error_reporting(0);
$query = "SELECT * FROM evenement";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if ($total != 0)
{
?>
<section id="evenementen" class="evenementen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">Evenementen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID Evenement</th>
                        <th scope="col">Evenementomschrijving</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Huisnummer</th>
                        <th scope="col">Plaats</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">Wijzig</th>
                        <th scope="col">Verwijder</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($result = mysqli_fetch_assoc($data))
                    {
                        echo "<tr>
                    <td>".$result['idevenement']."</td>
                    <td>".$result['evenementomschrijving']."</td>
                    <td>".$result['adres']."</td>
                    <td>".$result['huisnummer']."</td>
                    <td>".$result['plaats']."</td>
                    <td>".$result['postcode']."</td>
                    <td><a class='btn btn-info' role='button' href='edit/edit_evenementen.php?idevenement=$result[idevenement]&evenementomschrijving=$result[evenementomschrijving]&adres=$result[adres]&huisnummer=$result[huisnummer]&plaats=$result[plaats]&postcode=$result[postcode]'>Wijzig</a></td>
                    <td><a class='btn btn-info' role='button' href='delete/delete_evenement.php?idevenement=$result[idevenement]' onclick='return checkdelete()'>Verwijder</a></td>
                    </tr>";
                    }
                    }
                    ?>
                    </tbody>
                </table>
                <p><a class='btn btn-info' role='button' href="forms/form_evenement.php">Nieuw evenement toevoegen</a></p>
            </div>
        </div>
    </div>
    <div class="page_end"></div>
</section>
<script>
    function checkdelete()
    {
        return confirm ('Weet je zeker dat je dit evenement wilt verwijderen?');
    }
</script>