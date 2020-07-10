<?php



include_once("_conexao.php");
$html = '<table style="border:1px black solid;border-radius:10px">';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<td style="border:1px black solid;padding:2px">Nº do Produto</td>';
$html .= '<td style="border:1px black solid;padding:2px">Nome</td>';
$html .= '<td style="border:1px black solid;padding:2px">Categoria</td>';
$html .= '<td style="border:1px black solid;padding:2px">Fornecedor</td>';
$html .= '<td style="border:1px black solid;padding:2px">Quantidade</td>';
$html .= '<td style="border:1px black solid;padding:2px">Data</td>';
$html .= '</tr>';
$html .= '</thead>';


$sql = "Select * from `estoque`";
$busca = mysqli_query($conexao, $sql);

while ($row = mysqli_fetch_assoc($busca)) {
  $html .= '<tbody>';
  $html .= '<tr><td style="border:1px black solid;">'.$row['nroproduto'] ."</td>";
  $html .= '<td style="border:1px black solid;>'.$row['nomeproduto'] ."</td>";
  $html .= '<td style="border:1px black solid;>'.$row['categoria'] ."</td>";
  $html .= '<td style="border:1px black solid;">'.$row['quantidade'] ."</td>";
  $html .= '<td style="border:1px black solid;">'.$row['fornecedor'] ."</td>";
  $html .= '<td style="border:1px black solid;">'.$row['vlunidade'] ."</td>";
  $html .= '<td style="border:1px black solid;">'.$row['data'] ."</td></tr>"; 
  $html .= '</tbody>';

}

$html .= '</table>';

use Dompdf\Dompdf;
require_once ("dompdf/autoload.inc.php");
$dompdf = new DOMPDF();

$dompdf->load_html('
   <h1 style="text-align:center;color:red;"> Relatório de Produtos </h1>
    
   '. $html .'


');


/* Renderiza */
$dompdf->render();

/* Exibe */
$dompdf->stream(
    "pdf.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);
?>