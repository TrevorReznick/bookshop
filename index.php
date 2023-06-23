 <html><!-- InstanceBegin template="/Templates/traina.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
 <!-- #BeginEditable "doctitle" --> 
<title>- Libri Professionali.info - </title>
<!-- #EndEditable --> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/traina.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="script/main_menu.js" language="Javascript"></script>
<script type="text/javascript" language="Javascript" src="script/ajax_engine.js"></script>
<script type="text/javascript" language="Javascript" src="script/functions.js"></script>	
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript" language="Javascript">
function CaricaPagina(){
	show_clock();
	main_page_request('view','pluto');
	main_select_editore('editore');
	//get_main_table(action_url);
	//setTimeout("mainRequest();", 2000);	
}

</script>
<!-- InstanceEndEditable -->
</head>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" onLoad="CaricaPagina();">


<!--�������������table page���������������� --> 

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr valign="top"> 
    <td width="19%"></td>
    <td width="1%" bgcolor="#606060">&nbsp;</td>
    <td width="60%"> 
	
	<!--�������������table centrale���������������� --> 
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border:1px solid #333333;">
        <tr valign="top"> 
          <td> 
		  
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td class="left">&nbsp; </td>
                      <td valign="bottom" class="right">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td colspan="2"> <table width="85%"  border="0" align="left" cellpadding="4" cellspacing="4" bgcolor="#f2f2f2">
                          <tr> 
                            
                      <td align="center" valign="middle" width="63%" height="40"> 
                        <div align="left"> 
                                <script language="JavaScript" src="script/msg.js" type="text/javascript"></script>
                        </div></td>
                            
                      <td align="center" valign="middle" width="37%"> 
                        <div align="left">
                                <h5> 
                                  <script language="javascript" src="script/liveclock.js" type="text/javascript"></script>
                          </h5>
                             </div></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
				  
				  </td>
        </tr>
		
        <tr> 
          <td><br>
		  
		  <div align="left"> 
              <div style="position:relative;"> 
                <script language="JavaScript" type="text/javascript">
					<!--
						new menu (menuHierarchy, menuConfig);
					//-->
				</script>
              </div>
            </div>			
			      </td>
        </tr>
		
        <tr> 
          <td>
		  
		  <br><br>
		   
		   <table width="100%" height="100%" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#FFFFFF">
              <tr> 
                <td width="70%" align="center" valign="top"> 
				
					<!--�������������table main���������������� --> 
                  <table width="100%" height="100%" border="0" align="center" cellpadding="2" cellspacing="2">
				  
                    <tr valign="top" align="center"> 
                      <td> 
					  
					  <div align="center"> 
                          <div class="middle1"> 
                            <div class="top1"> 
                              <div class="bottom1"> 
                             
                                <!-- #BeginEditable "main" --><div id="pluto"></div><!-- #EndEditable -->

                              </div>
                            </div>
                          </div>
                        </div>
						
						</td>
                    </tr>
                  </table>
        	<!--�������������fine table main���������������� --> 
					
                </td>
                <td width="30%" align="center" valign="top"> 
				
				<div align="center"> 
				
					<!--�������������table form, ricerca, ricerca google���������������� --> 
					
                    <table width="100%" border="0" cellpadding="5" cellspacing="0">
					<tr><td><div class="mez"> 
                            <div class="sup"> 
                              <div class="inf"> 
                                <table width="30%" border="0" align="center" cellpadding="4" cellspacing="2">
                                  <tr> 
                                    <td><h4 align="center">RICERCA AVANZATA<br>
                                      </h4></td>
                                  </tr>
                                  <tr> 
                                    <td valign="center"> <br> <form method="post" name="primoDiv" onSubmit="sendForm(); return false;">
                                        <table width="100%" border="0" align="center" cellpadding="4" cellspacing="2">
                                          <tr> 
                                            <td><h5 align="right"> 
                                                <label>TITOLO</label>
                                              </h5></td>
                                            <td><input name="titolo" type="text" size="12" class="text"/> 
                                            </td>
                                          </tr>
                                          <tr> 
                                            <td><h5 align="right"> 
                                                <label>AUTORE</label>
                                              </h5></td>
                                            <td><input name="autore" type="text" size="12" class="text"/> 
                                            </td>
                                          </tr>
                                          <tr> 
                                            <td><h5 align="right"> 
                                                <label>ISBN</label>
                                              </h5></td>
                                            <td> <input name="ISBN" type="text" size="12" class="text"/> 
                                            </td>
                                          </tr>
                                          <tr> 
                                            <td><h5 align="right">EDITORE</h5></td>
                                            <td> 
												<select id="sel_01" class="select">
													<option value="">seleziona editore</option>
                                                </select> 
											</td>
                                          </tr>
                                        </table>
                                        <br>
                                        <table width="25%" border="0" align="right" cellpadding="2" cellspacing="2">
                                          <tr> 
                                            <td valign="middle" class="font"> 
                                              <div align="right"><font color="#FFFFFF">CERCA</font></div></td>
                                            <td valign="top"> <input name="image" type="image" src="immagini/s.jpg"> 
                                            </td>
                                          </tr>
                                        </table>
                                      </form></td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div></td></tr>
                      <tr> 
                        <td align="center"><br> 
						<div class="middle"> 
                            <div class="top"> 
                              <div class="bottom"> 
                                <table width="100%" border="0" align="center" cellpadding="4" cellspacing="4">
                                  <tr> 
                                    <td valign="middle"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr> 
                                          <td><ul>
										  <li type="square" style="margin-top:10px;">
										  <font color="#333333">
										  <a href="index.php" onclick="main_page_request('novita','pluto'); return false;">Novit&Aacute;</a></font> 
                                              </li>
                                              <li type="square"> <font color="#333333"><a href="index.php?target=promozioni&link=0">Promozioni</a></font> 
                                              </li>
                                              <li type="square"> <font color="#333333"><a href="#">Link 
                                                utili </a></font> </li>
                                              <li type="square"> <font color="#333333"><a href="#">Cataloghi 
                                                on-line </a></font> </li>
                                              <li type="square"> <font color="#333333"><a href="mailto:info@libriprofessionali.info">Spediscici 
                                                una mail</a></font> </li>
                                            </ul></td>
                                        </tr>
                                      </table></td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                          <br> </td>
                      </tr>
                      <tr> 
                        <td align="center"> <div> 
                            <div class="middlea"> 
                              <div class="topa"> 
                                <div class="bottoma"> 
                                  <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                    <tr> 
                                      <td align="center" bordercolor="0"> <br> 
                                        <form method="GET" action="http://www.google.com/search">
                                          <div align="right"> 
                                            <table align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
                                              <tr> 
                                                <td> <div align="left"> 
                                                    <div align="left"><a href="http://www.google.com"> 
                                                      <img src="http://www.google.com/logos/Logo_40wht.gif" border="0" alt="Google" align="absmiddle"></a> 
                                                    </div>
                                                  </div></td>
                                              </tr>
                                              <tr> 
                                                <td><INPUT TYPE=text name=q size=20 maxlength=255 value=""> 
                                                  <INPUT TYPE=hidden name=hl value=it></td>
                                              </tr>
                                              <tr> 
                                                <td align="right"> <table width="100%" border="0" cellpadding="2" cellspacing="2">
                                                    <tr> 
                                                      <td class="font">CERCA SU 
                                                        GOOGLE</td>
                                                      <td><INPUT type=image  name=btnG VALUE="Cerca con Google" src="immagini/sg.jpg"> 
                                                      </td>
                                                    </tr>
                                                  </table></td>
                                              </tr>
                                            </table>
                                          </div>
                                        </form>
                                        <br> </td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div></td>
                      </tr>
                    </table>
					
					<!--�������������fine table form, ricerca, ricerca google���������������� --> 
                  </div>
				  
				  </td>
              </tr>
          </table>
		  </td>
        </tr>
        <tr> 
          <td align="right" valign="middle" bgcolor="#FFFFFF"> 
		  
            <table width="75%" border="0" align="left" cellpadding="5" cellspacing="5">
              <tr> 
                <td width="38%"> <h6 align="left">Traina Libri Professionali 2008</h6></td>
                <td width="62%" align="center" valign="middle"> <table width="60%" border="0" align="left" cellpadding="5" cellspacing="5">
                    <tr align="center" valign="middle" class="font"> 
                      <td><a href="index.php" style='color: #f26743; font-weight : bold; margin-left:0px; margin-top:0px; margin-bottom:0px; margin right:0px;'>HOME</a></td>
                      <td><a href="azienda.htm" style='color: #f26743; font-weight : bold; margin-left:0px; margin-top:0px; margin-bottom:0px; margin right:0px;'>AZIENDA</a></td>
					  <td><a href="contatti.htm" style='color: #f26743; font-weight : bold; margin-left:0px; margin-top:0px; margin-bottom:0px; margin right:0px;'>CONTATTI</a></td>
                      <td><a href="ordini.htm" style='color: #f26743; font-weight : bold; margin-left:0px; margin-top:0px; margin-bottom:0px; margin right:0px;'>ORDINI</a></td>
                      <td><a href="mailto:info@libriprofessionali.info" style='color: #f26743; font-weight : bold; margin-left:0px; margin-top:0px; margin-bottom:0px; margin right:0px;'>MAIL</a></td>
                    </tr>
                  </table>
				  
			    </td>
              </tr>
            </table>
          </td>
        </tr>
		
      </table>
	  
	  <!--�������������fine table centrale���������������� -->
	  </td>
    <td width="1%" bgcolor="#606060">&nbsp;</td>
    <td width="19%">&nbsp;</td>
  </tr>
 
</table>

<!--�������������fine table page���������������� --> 




</body>
<!-- InstanceEnd --></html>
