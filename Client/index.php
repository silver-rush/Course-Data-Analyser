<?php
/**
 * A COMP2021 Project in HKUST
 * Author:
 *      Chan Nok Hin 20349103 nhchanaa@connect.ust.hk
 *      Cheng Ho Kei 12219689 hkchengad@connect.ust.hk
 *      Sze Ka Yau ⁠⁠⁠20348496 kyszeaa@connect.ust.hk
 */
    include_once ('../shar/DataBase.php');

    $db_helper = new DataBase('database.db');
    $Courses = $db_helper->getCourses();
?>

<html>
<title>Project</title>
<style type="text/css">
    body {
        background-image: url(Image/BG.jpg);
        background-repeat: repeat-y;
    }
</style>
<head>
    <link rel="stylesheet" type="text/css" href="Filter.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <script src="Filter.js"></script>
</head>

<body>
<p><img src="Image/header-background.jpg" width="1303" height="70" alt="Header"></p>

<div class="container">
    <h3>Comp Courses Search</h3>
    <input type="text" id="input" placeholder="Enter the code">
    <hr>
    <?php
        foreach ($Courses as $course){
            echo "<div class=\"mix white\">";
            echo "<p class='title'>$course->code</p>";
            echo "<a href='detail.php?code=$course->code'>";
            echo "<img src=\"get_line_overall.php?code=$course->code&y=4\"/>";
            echo '</a></div>';
        }
    ?>
</div>


</body>

</html>
