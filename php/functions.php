<?php
function number_of_rows($string_query)
{	
	//if(!isset($sql)) $sql = "SELECT * FROM $table";	
	$query = mysql_query($string_query);	
	$number_of_rows = @mysql_num_rows($query);	
	return $number_of_rows;
}

function no_rows($string_query)
{	
	if(number_of_rows($string_query) == 0) return true;	
}

function header_msg($h_message)
{	
	echo strtoupper($h_message);
	return;
}

function txt_msg($t_message)
{	
	echo $t_message;
	return;
}

function admin_header_msg($h_message)
{	
	global $h_message;
	echo "<div align=center><h2>".$h_message."</h2></div>";
	return;
}

function admin_txt_msg($t_message)
{	
	global $t_message;
	echo "<div align=center><h3>".$t_message."</h3></div>";
	return;
}

function form_ricerca(){
	?>
	<form method="post" name="primoDiv" onSubmit="sendForm(); return false;">
	<table>
		<tr> 
			<td></td>
			<td><label>cerca per titolo</label></td>
			<td><input name="titolo" type="text" size="12" class="text"/></td>
			<td><label>cerca per autore</label></h5></td>
			<td><input name="autore" type="text" size="12" class="text"/></td>
			<td><label>cerca per Isbn</label></td>
			<td><input name="ISBN" type="text" size="12" class="text"/></td>
			<td>cerca per editore</td>
			<td> 
			<select name="editore" class="select">
				<option value="">EDIZIONI</option>
				<option value="Zanichelli">Zanichelli</option>
				<option value="Cedam">Cedam</option>
				<option value="Giappichelli">Giappichelli</option>
				<option value="Simone">Simone</option>
				<option value="La Tribuna">La Tribuna</option>
				<option value="Il sole 24 ore">Il sole 24 ore</option>
				<option value="Esperta">Esperta</option>
				<option value="Maggioli">Maggioli</option>
				<option value="Utet">Utet</option>
			</select> 
			</td>
			<td valign="middle" class="font"><div align="right"><font color="#FFFFFF">CERCA</font></div></td>
			<td valign="top"> <input name="image" type="image" src="immagini/s.jpg"></td>
		</tr>
	</table>
	</form>
	<?
	return;
}

function do_options(){
	$php_pop_up_location = "https://www.xdomain.it/libriprofessionali/php/window_pop_up.php";
	$php_pop_up_location .= "?target=edit&link=$link&id=";
	return;
}

function field_n($index){
	$s_sql = "select * from ".$_GET['link'];
	$query = mysql_query($s_sql);
	return mysql_field_name($query, $index);
}


?>