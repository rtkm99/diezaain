<?php include('db/dbcon.php');
error_reporting(0);
$query = "SELECT * FROM rol";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0)
{
?>
<section class="functie">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">Functie</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Rol omschrijving</th>
                            <th scope="col">Wijzig</th>
                            <th scope="col">Verwijder</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($result = mysqli_fetch_assoc($data))
                        {
                            echo "<tr>
                    <td>".$result['rolomschrijving']."</td>
                    <td><a class='btn btn-info' role='button' href='edit/edit_functie.php?rolomschrijving=$result[rolomschrijving]'>Wijzig</a></td>
                    <td><a class='btn btn-info' role='button' href='delete/delete_functie.php?rolomschrijving=$result[rolomschrijving]'
                    onclick='return checkdelete()'>Verwijder</a></td>
                    </tr>";
                        }
                        }
                        ?>
                        </tbody>
                    </table>
                    <p><a class='btn btn-info' role='button' href="forms/form_functie.php">Nieuwe functie toevoegen</a></p>
            </div>
        </div>
    </div>
</section>
<script>
    function checkdelete()
    {
        return confirm ('Weet je zeker dat je deze functie wilt verwijderen?');
    }
</script>