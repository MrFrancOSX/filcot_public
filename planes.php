<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'components/meta.php'; ?>
    <title>Filcot Consulting - Servicios</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <main>
        <?php include 'components/bannerPlanes.php'; ?>
        <?php include 'components/planList.php'; ?>
    </main>
    <?php include 'components/footer.php'; ?>


    <script>
    // Scroll menu
    $("a[href^='#']").click(function(e) {
        e.preventDefault();

        var position = $($(this).attr("href")).offset().top - 135;

        $("body, html").animate({
            scrollTop: position
        } /* speed */ );
    });
    </script>
</body>

</html>