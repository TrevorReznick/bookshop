<?
include("class.php");
include("functions.php");
$connessione->database_connect();
$database->db_select();
$string_query = "SELECT prod_traina_libri_dett.immagine, prod_traina_libri.titolo_libro, prod_traina_collane.editore, prod_traina_libri_dett.autori,";
$string_query .= " prod_traina_libri_dett.codice_ISBN, prod_traina_libri.id";
$string_query .= " FROM prod_traina_libri, prod_traina_collane, prod_traina_libri_dett, prod_traina_categorie, prod_traina_sottocategorie";
$string_query .= " WHERE prod_traina_libri.id = prod_traina_libri_dett.id";
$string_query .= " AND prod_traina_collane.id_collana = prod_traina_libri_dett.id_collana";
$string_query .= " AND prod_traina_libri_dett.id_categoria = prod_traina_categorie.id_categoria";
$string_query .= " AND prod_traina_libri_dett.id_sottocategoria = prod_traina_sottocategorie.id_sottocategoria";
?>
<!-- #BeginEditable "main" --> 
<br>
<table width="100%"  border="0" cellpadding="5" cellspacing="5">
	<tr> 
		<td>
			<h3><strong>
			<?
			if(isset($_GET['action'])){
				switch($_GET['action']){
					case "novita":
						$string_query .= " AND prod_traina_libri_dett.novita ='nvs' ORDER BY id DESC";
						$h_message = "traina libriprofessionali - novita'";
						$t_message = "Trovate le le seguenti novit&agrave;:";
						$style = "class=new";
					break;
					case "view":
						$id_sottocategoria = $_GET['id_s'];
						$categoria = $_GET['id_c'];
						if($id_sottocategoria){
							$string_query .= " AND prod_traina_libri_dett.id_sottocategoria = $id_sottocategoria";
						}
						elseif($id_categoria){
							$string_query .= " AND prod_traina_libri_dett.id_categoria = $id_categoria";
						}
						$h_message = "traina libriprofessionali - prodotti";
						$t_message = "Trovate le seguenti pubblicazioni:";
						$style = "class=new";
					break;
				}
				echo header_msg($h_message);
			}	
			?>
			</strong></h3>
		</td>
	</tr>
    <tr>
    	<td>
    		<h6><br><?php echo txt_msg($t_message); ?><br></h6>
    	</td>
    </tr>
	<tr valign="top"> 
		<td> 
			<table width=100% border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
            	<tr> 
                	<td align="center"> <!-- Inizio Tabella estrazione PHP  -->
						<?php
						//echo $string_query;
						//if(no_rows($string_query)) recordset_categories();
						echo "<h6 align=left>".number_of_rows($string_query)." pubblicazioni</h6>";
						$sql->get_home_view($string_query);
						//echo $string_query;
						//$sql->get_table_view($string_query, $show);
						?>
					</td>
				</tr>
			</table>
			<!-- Fine Include -->
		</td>
	</tr>
</table>
<!-- #EndEditable -->


                                     