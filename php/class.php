<? include_once('mysql-fix.php');
$connessione = new database_handling("fdb34.awardspace.net", "3926835_db", "Default.1", "3926835_db");
$database = new database_handling("fdb34.awardspace.net", "3926835_db", "Default.1", "3926835_db");
$sql = new database_handling("fdb34.awardspace.net", "3926835_db", "Default.1", "3926835_db");


class database_handling 
{
	var $server;
	var $username;
	var $password;
	var $dbname;
	
	function __construct($db_host, $login_name, $login_password, $database_name)
	{
		$this->server = $db_host;
		$this->username = $login_name;
		$this->password = $login_password;
		$this->dbname = $database_name;
	}
	
	function database_connect()
	{
		$connessione = mysql_connect($this->server, $this->username, $this->password);
		return;
	}
	
	function db_select()
	{
		$database = @mysql_select_db($this->dbname, @mysql_connect($this->server, $this->username, $this->password)) 
				or die ("<BR>Errore:". mysql_error());
		return;
	}	
	
	function list_tables()
	{
		?>
		<table border="0">
		<?
		$db = mysql_select_db($this->dbname);
		$result = mysql_list_tables($this->dbname);
		$i = 0;
		while ($i < mysql_num_rows($result)) 
		{
			$tb_names[$i] = mysql_tablename($result, $i);
			echo "<tr>";
			echo "<td><a href=".$PHP_SELF."?state=view_selected_tables&table=".$tb_names[$i].">";
			echo $tb_names[$i] ."</td></a>";
			echo "</tr>";
			$i++;
		}
		?></table>
		<?
		return;
	}	
	
	
	function get_home_view($string_query){		
		global $PHP_SELF;
		$this->sql = $string_query;	
		$query = mysql_db_query($this->dbname, $this->sql) or die ("<BR>Errore:". mysql_error());		
		$arr_num_fields[$i] = mysql_num_fields($query);		
		$number_of_rows = mysql_num_rows($query);		//echo $arr_num_fields[$i];		
		$colspan_table = $arr_num_fields[$i] -1;
		for ($iii = 0; $iii < $number_of_rows; $iii++){			
			$record = @mysql_fetch_row($query);			
			$next_field = next ($record);			
			$next_field = next ($record);			
			$next_field = next ($record);			
			$next_field = next ($record);
			$next_field = next ($record);
			$id_Index_Value = key($record);			
			$result_field = current($record);			
			echo ("<input type=hidden name=id value=".$result_field.">");			
			//echo "<th colspan=".$colspan_table."><div align=left><b>| &yen; |</b>&nbsp;&nbsp";	
			echo "<table bgcolor=#ffffff width=100%>";
			?>
			<tr><td colspan="2"><hr width="100%"></td></tr>
			<?
			$pop_up_location = "product.php?action=view_book&id=".$result_field;		
			for ($ii=0; $ii < 1 ; $ii++){				
				$php_pop_up_location = "https://www.xdomain.it/libriprofessionali/php/product.php?action=view_book&id=".$result_field;
				echo "<tr>";
				echo "<td width=20% rowspan=4> ";
				/*echo "<a href=javascript:PopupCentrato('$php_pop_up_location')>"; */
				echo "<a href=javascript:do_popup('$php_pop_up_location')>";
				//echo $link;
				echo " <img border=0 class=con src=immagini/copertine/".$record[$ii]."> </a>";
				echo "</td>";
			}
			for ($ii=1; $ii < 2 ; $ii++){				
				echo "<td width=80%>";
				echo "<h2>&nbsp;".$record[$ii]."</h2>";	
				echo "</td>";
				echo "</tr>";
			}			
			for ($ii=2; $ii < 3 ; $ii++){				
				echo "<tr>";				
				echo "<td class=ed>";
				echo "<h5 class=new><b>Edizioni:</b>&nbsp;".$record[$ii]."</h5>";	
				echo "</td>";
				echo "</tr>";
			}
			for ($ii=3; $ii < 4 ; $ii++){				
				echo "<tr>";
		        echo "<td class=des>";
				echo "<h5><b>Autori:</b>&nbsp;".$record[$ii]."</h5>";	
				echo "</td>";
				echo "</tr>";
			}
			for ($ii=4; $ii < 5 ; $ii++){				
				echo "<tr>";
			    echo "<td class=isbn>";
				echo "<font color=#f08232>ISBN/COD:&nbsp;&nbsp;</font>".$record[$ii];	
				echo "</td>";
				echo "</tr>";
				?>
				<tr><td colspan="2"><hr width="100%"><br></td></tr>
				<?
				echo "</table>" ;
			}			
		}
		
		return;	
	}	
	
	function show_record($string_query)
	{
		$this->sql = $string_query;		
		$query = mysql_db_query($this->dbname, $this->sql) or die ("<BR>Errore:". mysql_error());
		$arr_num_fields[$i] = mysql_num_fields($query);
		$number_of_rows = mysql_num_rows($query);
		?>
		<div align="center">
		<table width="500" border="0" cellpadding="2" cellspacing="2" style="border: 1px solid #333333;">
 		<tr valign="top"> 
		<td width="50" align="center">
		<table width="50%" height="50%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" >
		<?
		for ($iii = 0; $iii < $number_of_rows; $iii++)
		{
			$record = @mysql_fetch_row($query);
			$result_field = current($record);
			//for ($ii=0; $ii < 1; $ii++)//ciclo_$arr_num_fields[$i]
			{
				//for ($ii=0; $ii < $arr_num_fields[$i]; $ii++)
				echo $record[$ii];
			}
			for ($ii=1; $ii < 2; $ii++)
			{
				?>
				<tr bgcolor="#DEECED">
				<td><? 
					echo "<img src=../immagini/copertine/".$record[$ii]." class=dett></td>";
					?>
				</tr>
				<?
				
			}
			for ($ii=2; $ii < 3; $ii++)
			{
				?>
				<tr bgcolor="#cbe0e2"> 
				<td><h4 class="prod"><b>Anno:</b>&nbsp;<? echo $record[$ii]; ?></h4></td>
				</tr>
				<?
			}
			for ($ii=3; $ii < 4; $ii++)
			{
				?>
				<tr bgcolor="#DEECED"> 
				<td><h4 class="prod"><b>Pag:</b>&nbsp;<? echo $record[$ii]; ?></h4></td>
				</tr>
				<?
			}
			for ($ii=4; $ii < 5; $ii++)
			{
				?>
				<tr bgcolor="#cbe0e2">
          		<td><h4 class="prod"><b>&#8364;</b>&nbsp;<? echo $record[$ii]; ?></h4></td>
        		</tr>
				<?
			}
			?>
			</table>
			</td>
			<td width="450" align="center" bgcolor="#ffffff" height="100%">
			<table width="100%" height="100%" border="0" cellpadding="4" cellspacing="4">
			<?
			for ($ii=5; $ii < 6; $ii++)
			{
				?>
				<tr bgcolor="#ffffff"> 
				<td><h1 class="prod"><? echo $record[$ii]; ?></h1></td>
				</tr>
				<?
			}
			for ($ii=6; $ii < 7; $ii++)
			{
				?>
				<tr bgcolor="#DEECED"> 
          		<td><h2 class="prod"><? echo $record[$ii]; ?></h2></td>
        		</tr>
				<?
			}
			for ($ii=7; $ii < 8; $ii++)
			{
				?>
				<tr bgcolor="#f2f2f2"> 
          		<td><h3 class="prod"> <? echo $record[$ii]; ?></h3></td>
        		</tr>
				<?
			}
			for ($ii=8; $ii < 9; $ii++)
			{
				?>
				<tr bgcolor="#DEECED"> 
          		<td><h3 class="prod"><font color="#f08232">Edizioni:&nbsp;&nbsp;</font><? echo $record[$ii]; ?></h3></td>
        		</tr>
				<?
			}
			for ($ii=9; $ii < 10; $ii++)
			{
				?>
				<tr bgcolor="#f2f2f2"> 
          		<td><h3 class="prod"><font color="#f08232">Collana:&nbsp;&nbsp;</font><? echo $record[$ii]; ?></h3></td>
        		</tr>
				<?
			}
			for ($ii=10; $ii < 11; $ii++)
			{
				?>
				<tr bgcolor="#DEECED"> 
          		<td><h2 class="descr"> <? echo $record[$ii]; ?></h2></td>
        		</tr>
				<?
			}
			for ($ii=11; $ii < 12; $ii++)
			{
				?>
				<tr bgcolor="#f2f2f2"> 
          		<td><h3 class="isb"><font color="#f08232">ISBN/COD:&nbsp;&nbsp;</font><? echo $record[$ii]; ?></h3></td>
        		</tr>
				<?
			}
			?>
			</table> 
			</td>
  			</tr>
			</table>
			</div>
			<?
		}
		return;
	}

///////////////////////////////////*********** -- ADMIN SEZ -- *********** ///////////////////////////////////

	function get_table_view($string_query, $show)
	{
		global $target;
		global $link;
		//global $sql_view_table;
		global $show;
		//if (!isset($show)) $show = " id";
		if ($PHP_SELF == "index.php?state=search") $show = "";
		$this->sql = $string_query." $show";
		$query = mysql_db_query($this->dbname, $this->sql) or die ("<BR>Errore:". mysql_error());
		$number_of_rows = mysql_num_rows($query);
		?>
		<table class="table_main">
		<?
		for ($i=0; $i < 1; $i++)
		{
			$arr_num_fields[$i] = mysql_num_fields($query);
			$colspan = $arr_num_fields[$i] +1;
			echo "<tr class=tr_main>";
			echo "<td class=td_main colspan=".$colspan.">Numero Record: ".$number_of_rows."</td>";
			echo "</tr>";
			for ($ii=0; $ii < $arr_num_fields[$i]; $ii++)
			{
				$hash_field_names[$i][$ii] = mysql_field_name($query, $ii);
				echo "<th>";
				echo "<a href=$PHP_SELF?target=view&link=$link&show=".$hash_field_names[$i][$ii].">";
				echo $hash_field_names[$i][$ii];
				echo "</a></th>";
			}
			echo "<th colspan=3>Opzioni</th>";
			echo "</tr>";
			for ($iii = 0; $iii < $number_of_rows; $iii++)
			{
				echo "<tr class=tr_main>";
				$record = @mysql_fetch_row($query);
				$result_field = current($record);
				echo ("<input type=hidden name=id_prod value=".$result_field.">");
				for ($ii=0; $ii < $arr_num_fields[$i]; $ii++)
				{
					echo "<td class=td_main><a href=>".$record[$ii]."</a></td>";
				}
				$php_pop_up_location = "https://www.xdomain.it/libriprofessionali/php/window_pop_up.php?target=";
				$action_pop_up = "&link=$link&id=".$result_field;
				//$php_pop_up_location .= "edit&link=$link&id=".$result_field;
				echo "<td class=td_main>";
				echo "<input type=radio OnClick=javascript:PopupCentrato('".$php_pop_up_location."edit".$action_pop_up."')>";
				echo "modifica</td>";
				echo "<td class=td_main>";
				echo "<input type=radio OnClick=javascript:PopupCentrato('".$php_pop_up_location."delete".$action_pop_up."')>";
				echo "cancella</td>";
				echo "</form>";
				if($_GET["link"] == 'libri'){
					echo "<td class=td_main><input type=radio name= value=>novita</td>";
					echo "<td class=td_main><input type=radio name= value=>promozione</td>";
				}				
				echo "</tr>";
			}
		}
		?>
		</table>
		<?
		return;
	}
	
	function form_build($string_query)
	{
		//form_header();
		echo "<table>";
		$this->sql = $string_query;
		//echo $this->sql;
		$query = mysql_db_query($this->dbname, $this->sql) or die ("<BR>Errore:". mysql_error());
		$number_of_rows = mysql_num_rows($query);//determino numero righe	
		for ($i=0; $i < 1; $i++)//qualunque cosa trovi determino una riga
		{
			$arr_num_fields[$i] = mysql_num_fields($query); //conto il numero campi
			for ($iii = 0; $iii < $number_of_rows; $iii++)// ciclo il numero righe gia ottenuto 
			{
				 				
				$record = @mysql_fetch_row($query);
				$result_field = current($record);
				for ($ii=1; $ii < $arr_num_fields[$i]; $ii++)//ciclo il numero campi
				{
					$hash_field_names[$i][$ii] = mysql_field_name($query, $ii);
					echo "<tr>";
					echo("<td>");
					echo $hash_field_names[$i][$ii];
					echo("</a></td>");
					echo "<td>";
					echo "<input type=hidden name=field_name[$ii] value=".$hash_field_names[$i][$ii].">\n";
					echo "<input type=hidden name=field_name[$ii] value=".$hash_field_names[$i][$ii].">\n";
					echo "<input type=text name=field_value[$ii] value=\"$record[$ii]\">\n";					
					echo "</td>";
					echo "</tr>";
				}
				//form_footer();
			}
		}
		echo "</table>";
		return;
	}

	function do_form($string_query, $method, $form_name){
		?>
		<form method="<? echo $method; ?>" name="<? echo $form_name; ?>">
		<table>
			<tr>
				<td>
				<?
				form_header();
				$this->form_build($string_query);
				?>
				</td>
			</tr>
			<tr>
				<td>
				<?
				form_footer();
				?>
				</td>
			</tr>
		</table>
		</form>
		<?
		return;
	}
}
	
function form_header(){
	?>
	<input type="hidden" name="id_name" value="<? echo field_n(0); ?>">
	<input type="hidden" name="id_name" value="<? echo field_n(0); ?>">
	<input type="hidden" name="id" value="<? echo $_GET['id']; ?>">
	<input type="hidden" name="link" value="<? echo $_GET['link']; ?>">
	<?
	return;
}

function form_footer(){
	?>
	<tr><div align="center">
		<td colspan="2"><BR>
		<?
		switch($_GET['target']){
			case "insert":
				?>
				<input type="button" name="target" value="insert" onClick="sendForm('formCat')">
				<?
			break;
			case "edit":
				?>
					<input type="button" name="target" value="update" onClick="sendForm('formCat')">
				<?
			break;
			case "delete":
				?>
					<input type="button" name="target" value="delete" onClick="sendForm('formCat')">
				<?
			break;
		}
		echo "</td>";
	echo "</tr>";
	return;
}

?>
