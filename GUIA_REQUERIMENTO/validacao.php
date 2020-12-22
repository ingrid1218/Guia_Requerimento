<?php

    $_POST['protocolo'] = rand(1000000, 10000000);
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $data = $_POST['nascimento'];
    $naturalidade = $_POST['naturalidade'];
    $filiacao = $_POST['filiacao'];
    $curso = $_POST['curso'];
    $periodo = $_POST['periodo'];
    $turno = $_POST['turno'];
    $telefone1 = $_POST['tel1'];
    $telefone2 = $_POST['tel2'];
    $email = $_POST['email'];
    $opc1 = $_POST['opc'];

    if($nome != ""){
        echo "Protocolo: " . $_POST['protocolo'] . "<br>";
        echo "Requerente: " . $nome . "<br>";
    }else{
        header("Location: index.php?msg=req");
    }

    if($matricula != ""){
        echo "Matricula: " . $matricula . "<br>";
    }else{
        header("Location: index.php?msg1=matr");
    }

    if($naturalidade != ""){
        echo "Naturalidade: " . $naturalidade . "<br>";
    }else{
        header("Location: index.php?msg3=nt");
    }

    if($filiacao != ""){
        echo "Filiação: " . $filiacao . "<br>";
    }else{
        header("Location: index.php?msg4=fil");
    }

    if($curso != ""){
        echo "Curso: " . $curso . "<br>";
    }else{
        header("Location: index.php?msg5=cur");
    }

    if($periodo != ""){
        echo "Periodo: " . $periodo . "<br>";
    }else{
        header("Location: index.php?msg6=per");
    }

    if($turno != ""){
        echo "Turno: " . $turno . "<br>";
    }else{
        header("Location: index.php?msg7=tur");
    }

    if(($telefone1 != "") || ($telefone2 != "")){
        echo "Telefone 1: " . $telefone1 . "<br>";
        echo "Telefone 2: " . $telefone2 . "<br>";
    }else{
        header("Location: index.php?msg8=tl");
    }

    if($email != ""){
        echo "E-mail: " . $email . "<br>";
    }else{
        header("Location: index.php?msg9=e");
    }
 
?>
