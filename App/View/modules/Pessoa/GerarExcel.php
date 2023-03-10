<?php 
ob_start();
include_once('./App/DAO/EstagioDAO.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $arquivo = 'estagio.xls';
    
    $html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Ficha de Frequência de Estágio</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>Data</b></td>';
		$html .= '<td><b>Horário de Entrada</b></td>';
		$html .= '<td><b>Horário de Saida</b></td>';
		$html .= '<td><b>Total de Horas do \n Período</b></td>';
		$html .= '<td><b>Assinatura do \n Estagiário</b></td>';
		$html .= '</tr>';

        foreach($model-$rows as $item)

   // Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo

        echo $html;
        exit;
    ?>
</body>
</html>