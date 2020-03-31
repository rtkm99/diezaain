<?php include("db/dbcon.php"); ?>

<?php include("header.php"); ?>

<?php include("functie.php"); ?>

<?php include("accounts.php"); ?>

<?php include("evenementen.php"); ?>

<?php include("contact.php"); ?>

<?php include("footer.php"); ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar-fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });
</script>
