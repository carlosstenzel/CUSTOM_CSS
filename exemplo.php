<?php

/*

Crie seu css atraves do php

*/
include('custom_css.class.php');

$file_css = 'style.css';
// zera arquivo
$Custom = new Custom_css('custom');
$Custom->Inicio_file($file_css);
//-------------------------------


$estilo1 = new Custom_css('h1');
$estilo1->font_family = 'arial, sans-serif';
$estilo1->font_size = '30px;';
$estilo1->color='red';
$estilo1->show($file_css);

$estilo2 = new Custom_css('.exemploclass');
$estilo2->color='blue';
$estilo2->show($file_css);

?>
<html>
<head>
<link href="style.css" media="all" rel="Stylesheet" type="text/css" />
</head>
<body>
<h1>Custom Css</h1>
<p class="exemploclass">Exemplo</p>
</body>
</html>
