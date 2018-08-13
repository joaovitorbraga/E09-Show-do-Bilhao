<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show do Bilhão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </head>
<body>
    <nav class="navbar navbar-light bg-danger">
            <a class="navbar-brand text-center">
                <img src="img/showDoBilhao.png" width="75" height="75">Show do Bilhão</a>
        <form class="form-inline">
        </form>
    </nav>

    <?php
        $enunciado = array("Questão 1", "Questão 2", "Questão 3", "Questão 4", "Questão 5");
        $perguntas = array( 0=> array(0=> "Alternativa a)",1=> "Alternativa b)",2=> "Alternativa c)",3=> "Alternativa d)"),
                            1=> array(0=> "Alternativa a)",1=> "Alternativa b)",2=> "Alternativa c)",3=> "Alternativa d)"),
                            2=> array(0=> "Alternativa a)",1=> "Alternativa b)",2=> "Alternativa c)",3=> "Alternativa d)"),
                            3=> array(0=> "Alternativa a)",1=> "Alternativa b)",2=> "Alternativa c)",3=> "Alternativa d)"),
                            4=> array(0=> "Alternativa a)",1=> "Alternativa b)",2=> "Alternativa c)",3=> "Alternativa d)"));
        $corretas = array("c", "a", "d", "b", "a");

        for ($i=0; $i < 5; $i++) { 
            echo"$enunciado[$i] <br>";
            foreach ($perguntas[$i] as $e) {
                echo "$e <br>";
            }
        }
    ?>
</body>
</html>