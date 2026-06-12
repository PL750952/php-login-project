<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Student profile</title>
    </head>

    <body>
        <h1>PHP Variables</h1>

        <?php
        
            $first_name = "Patryk";
            $surname = "Lelinski";
            $age = 17;
            $course1 = "Digital Technology";
            $course2 = "Computer Science";
            define("COLLEGE", "Cardiff and Vale College");

            echo "Name: " . $first_name . " " . $surname . "<br>";
            echo "Age: " . $age . "<br>";
            echo "Courses: " . $course1 . " " . $course2 . "<br>";
            echo "College: " . COLLEGE
            

        ?>
    </body>

</html