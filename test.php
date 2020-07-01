<?php
/*
    $dsn = "mysql:host=localhost;dbname=test";
    $user ="root";
    $pass = "";
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    );
    try {
        $db = new PDO($dsn, $user, $pass, $options);
        // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$q = "INSERT INTO items (name) VALUES ('حلار')";
        //$db->exec($q);
    }
    catch(PDOException $e) {
        echo "Error"; //. $e->getMessage();
    }
    for ($i; $i < 100; $i++) {
        $stmt = $db->prepare("INSERT INTO `tbl` (`id`) VALUES ('127')");
        $stmt->execute();
    }
*/
    @$answer1 = $_POST["q1"];
    @$answer2 = $_POST["q2"];

    $totalCorrect = 0;

    if ($answer1 == "2") { $totalCorrect++; }
    if ($answer2 == "4") { $totalCorrect++; }

    echo "<div id=\"results\">$totalCorrect / 2 correct</div>";
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
<!--    INFO                            -->
        <title>test</title>
        <meta charset="UTF-8"/>
<!--    CSS BS                          -->
<!--    CSS                             -->
<style>

</style>
<!--    Fonts                           -->
<!--    Fonts Name                      -->
<!--

-->
<!--    Colors                          -->
<!--

-->
    </head>
    <body class="m" id="m">
        <div id="page-wrap">
            <h1>Simple Quiz Built On PHP</h1>
            <form action="test.php" method="post" id="quiz">
                    <ol>
                        <li>
                            <h3>اختر الإجابة الثانية</h3>
                            <div>
                                <input type="radio" name="q1" id="q1_a1" value="1"/>
                                <label for="q1_a1">الأولى</label>
                            </div>
                            <div>
                                <input type="radio" name="q1" id="q1_a2" value="2"/>
                                <label for="q1_a2">الثانية</label>
                            </div>
                            <div>
                                <input type="radio" name="q1" id="q1_a3" value="3"/>
                                <label for="q1_a3">الثالثة</label>
                            </div>
                            <div>
                                <input type="radio" name="q1" id="q1_a4" value="4"/>
                                <label for="q1_a4">الرابعة</label>
                            </div>
                        </li>
                        <li>
                            <h3>اختر الإجابة الرابعة</h3>
                            <div>
                                <input type="radio" name="q2" id="q2_a1" value="1"/>
                                <label for="q2_a1">الأولى</label>
                            </div>
                            <div>
                                <input type="radio" name="q2" id="q2_a2" value="2"/>
                                <label for="q2_a2">الثانية</label>
                            </div>
                            <div>
                                <input type="radio" name="q2" id="q2_a3" value="3"/>
                                <label for="q2_a3">الثالثة</label>
                            </div>
                            <div>
                                <input type="radio" name="q2" id="q2_a4" value="4"/>
                                <label for="q2_a4">الرابعة</label>
                            </div>
                        </li>
                    </ol>
                    <input type="submit" value="Submit" class="submitbtn"/>
            </form>
        </div>
<!--    JS BS                           -->
<!--    JS                              -->
<script>
    function submit(params) {
        
    }
</script>
    </body>
</html>