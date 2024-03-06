<?php
    $connection = mysqli_connect("localhost", "root", "", "escola");
    $dados = array();
    $sql = "SELECT * FROM relatorioum";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($user = mysqli_fetch_array($result)) {
            $dados [] = array(
            'diaAula' => $user['diaAula'],
            'disciplina' => $user['disciplina'],
            'professor' => $user['professor']
            
             );
        };
    }else{
        echo 'Nenhuma view';
        exit;
    };
    echo json_encode($dados);

?>