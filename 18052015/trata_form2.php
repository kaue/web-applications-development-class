<head>
    <title>Formulários II</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $submit = $_POST['submit'];        
        switch($submit){
            case 'PUC':
                header("Location: http://www.pucsp.br");
                break;
            case 'Google':
                header("Location: http://www.google.com");
                break;
            case 'UOL':
                header("Location: http://www.uol.com.br");
                break;
            case 'HTML':
                header("Location: form1.html");
                break;
            case 'PHP':
                header("Location: soma1.php");
                break;
        }

        echo '<br>Imprimindo os modelos selecionados:<br> <b>';
        $modelos = $_POST['modelos'];
        foreach ($modelos as $modelo) {
            echo $modelo;
        }       
        echo '</b><br> Imprimindo a profissao escolhida: <br><b>';
        $profissao = $_POST['profissao'];
        echo $profissao;

        echo '</b><br> Imprimindo os meses escolhidos: <br><b>';
        $meses = $_POST['meses'];
        foreach ($meses as $mes) {
            echo $mes . ' ';
        }

        echo '</b><br> Imprimindo o conteudo do campo textarea (comentario): <br><b>';
        $comentario = $_POST['comentario'];
        echo htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8'); //htmlspecialchars para proteçao XSS
        echo '</b>';

        $arquivo = $_FILES["arquivo"];
        $nomeArquivo = $arquivo["name"];
        $nomeTemporario = $arquivo["tmp_name"];
        $tamanho = $arquivo["size"];
        echo "<br>Nome do arquivo original: <b> $nomeArquivo </b>";
        echo "<br>Nome do arquivo temporario: <b> $nomeTemporario </b>";
        echo "<br>Tamanho (bytes): <b> $tamanho </b>";

        $arquivoDir = '../tmp/ra00129198.' . $nomeArquivo;
        
        if(move_uploaded_file($nomeTemporario, $arquivoDir)){
            echo "<br> Arquivo salvo com sucesso: <b> $arquivoDir </b><br>";
        }else{
            echo "<br>Problema ao enviar o arquivo: <b> $arquivoDir </b><br>";
        }              
    ?>    
</body>
