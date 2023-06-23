<html>
<head>
<link rel="stylesheet" href="css/product.css">
<script type="text/javascript" src="script/main_menu.js" language="Javascript"></script>
</head>
<body>
<?php

include("class.php");
include("functions.php");
$connessione->database_connect();
$database->db_select();
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$string_query = "SELECT prod_traina_libri.id, prod_traina_libri_dett.immagine, prod_traina_libri_dett.anno_pubblicazione, prod_traina_libri_dett.pagine,";
$string_query .= " prod_traina_libri_dett.prezzo, prod_traina_libri.titolo_libro,  prod_traina_libri_dett.sottotitolo, prod_traina_libri_dett.autori,";
$string_query .= " prod_traina_collane.editore, prod_traina_collane.nome_collana, prod_traina_libri_dett.descrizione, prod_traina_libri_dett.codice_ISBN";
$string_query .= " FROM prod_traina_libri, prod_traina_collane, prod_traina_libri_dett, prod_traina_categorie, prod_traina_sottocategorie";
$string_query .= " WHERE prod_traina_libri.id = prod_traina_libri_dett.id";
$string_query .= " AND prod_traina_collane.id_collana = prod_traina_libri_dett.id_collana";
$string_query .= " AND prod_traina_libri_dett.id_categoria = prod_traina_categorie.id_categoria";
$string_query .= " AND prod_traina_libri_dett.id_sottocategoria = prod_traina_sottocategorie.id_sottocategoria";
$string_query .= " AND prod_traina_libri.id = '$id'";
/*
$string_query = "SELECT libri.id, libri_dett.immagine, libri_dett.anno_pubblicazione, libri_dett.pagine,";
$string_query .= " libri_dett.prezzo,libri.titolo_libro,  libri_dett.sottotitolo, libri_dett.autori,";
$string_query .= " collane.editore, collane.nome_collana, libri_dett.descrizione, libri_dett.codice_ISBN";
$string_query .= " FROM libri, collane, libri_dett, categorie, sottocategorie";
$string_query .= " WHERE libri.id = libri_dett.id";
$string_query .= " AND collane.id_collana = libri_dett.id_collana";
$string_query .= " AND libri_dett.id_categoria = categorie.id_categoria";
$string_query .= " AND libri_dett.id_sottocategoria = sottocategorie.id_sottocategoria";
$string_query .= " AND libri.id = '$id'";
*/

//echo $string_query;
//if(no_rows()) echo "Si e' verificato un errore";
//else 
$sql->show_record($string_query);
?>
<br><br>
<div align="center"><a href="javascript:window.close()">chiudi</a></div>
<body>
</html>

