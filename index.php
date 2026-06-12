<!DOCTYPE html>
<head>
    <title>My First Cloud Website</title>
</head>

<body>

    <?php
        /*
            in php when using echo to do html tags, make sure to use \" in place of qoutation marks
            or ' instead because echo uses quotation marks already in the line
        */
        echo "<h1>Welcome to my website!</h1>";
        echo "<p style=\"color:orange\">I have created this website with PHP and cloud hosting.</p>";

        //reference the path of the image in the image folder
        echo "<img src='images/pic.png' alt='A 3D render of a Phantump Pokemon' class='img-fluid' style='width:256px'>";
    ?>
</body>

</html>