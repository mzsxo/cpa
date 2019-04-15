<html>

<head>
    <title>hi</title>
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php require_once('partials/nav.php') ?>
    <h2>Contact</h2>
    <br>
    <br>
    blah blah blah
    <br>

    <div class="rating" data-rate-value=6></div>



    <script src="http://code.jquery.com/jquery-1.11.3.min.js" charset="utf-8"></script>
    <script src="rate/rater.js" charset="utf-8"></script>
    <script>
        $(".rating").rate();

        var options = {
            max_value: 6,
            step_size: 0.5,
        }
        $(".rating").rate(options);

    </script>
</body>
<?php require_once('partials/footer.php') ?>

</html>
