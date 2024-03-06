<?php
    $connection = mysqli_connect("localhost", "root", "", "escola");
    $dados = array();
    $sql = "SELECT * FROM relatoriodois";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($user = mysqli_fetch_array($result)) {
            $dados [] = array(
            'nomeAluno' => $user['nomeAluno'],
            'disciplina' => $user['disciplina'],
            'nota' => $user['nota']
            
             );
        };
    }else{
        echo 'Nenhuma view';
        exit;
    };
    echo json_encode($dados);

?>