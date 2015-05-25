<head>
    <title>Formulários II</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
        if(isset($_POST['fase2'])){                     
            switch($_POST['escolha']){
                case '1':
                echo file_get_contents($_POST['dirUpload']);
                break;
                case '2':
                echo file_get_contents($_POST['dirUpload']);
                echo file_get_contents($_POST['dirDados']);
                break;
            }                
        }else{
            $submit = $_POST['submit'];    
            $nomeArquivo = $_POST['nomeArquivo'];            
            $fileData = "";
                        

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

            $fileData .= 'Modelos:\n';
            $modelos = $_POST['modelos'];
            foreach ($modelos as $modelo) {
                $fileData .= '  ' . $modelo . '\n';
            }
            //profissao 
            $profissao = $_POST['profissao'];
            $fileData .= 'Profissao: ' . $profissao . '\n';

            $fileData .= 'Meses:\n';
            $meses = $_POST['meses'];
            foreach ($meses as $mes) {
                $fileData .= '  ' . $mes . '\n';
            }

            $comentario = $_POST['comentario'];
            $fileData .= 'Comentario: ' . $comentario . '\n';


            $arquivo = $_FILES["arquivo"];
            $nomeArquivo = $arquivo["name"];
            $nomeTemporario = $arquivo["tmp_name"];
            $tamanho = $arquivo["size"];

            
            $fileDir = "/tmp/ra00129198_$nomeArquivo";
            if (!$arquivo=fopen($fileDir,"w")) {
                echo "Erro a abertura do arquivo";
                exit;
            }
            if (fwrite($arquivo,$fileData) == FALSE) {
                echo "Erro na gravacao de registro";
                exit;
            }
            fclose($arquivo);
            $arquivoDir = '/tmp/ra00129198.' . $nomeArquivo;
            if(move_uploaded_file($nomeTemporario, $arquivoDir) == false){
                echo "<br>Problema ao enviar o arquivo: <b> $arquivoDir </b><br>";
            }  
        }     
    ?>   
    <form method="POST">
        <input type="hidden" name="dirDados" value="<?php echo $fileDir ?>"> 
        <input type="hidden" name="dirUpload" value="<?php echo $arquivoDir ?>"> 
        <input type="hidden" name="fase2" value="true">
        <input type="radio" name="escolha" value="1" checked>Para ler o conteúdo do arquivo que foi enviado (“Upload”);<br>
        <input type="radio" name="escolha" value="2">Para ler o conteúdo dos dois arquivos:<br>
        <input type="radio" name="escolha" value="3">Encerrar a atividade<br>
        <input type="submit" name="submit" value="Envia"> 
    </form>
</body>
