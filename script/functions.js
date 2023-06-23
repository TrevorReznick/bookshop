function ConfermaOperazione(record){
  if(confirm("sei sicuro di voler cancellare il record ?")){
	  alert(record);
	  window.location.href = record;
	}else{
		window.location.href = record;
	}
	return;
}

function create_dom_elements(div_id,table_id, t_body_id){
	var div = document.getElementById(div_id);
	var table = document.createElement('TABLE');
	var t_body = document.createElement('TBODY');	
	table.setAttribute("ID",table_id);//	
	t_body.setAttribute("ID",t_body_id);	
	table.appendChild(t_body);
	div.appendChild(table);
	create_table_form('titolo_libro','sottotitolo','codice_ISBN','autori','anno_pubblicazione','prezzo','pagine','altro_codice');			
}

function do_message(div_id, msg){
	var target = document.getElementById(div_id);
	target.innerHTML = msg;
}

function create_table_form(){
	var post_data = "";
	var table = document.getElementById('tabella100');
	var t_body = document.getElementById('t_body02');
	for(var y=0; y in arguments; y++){
		var row_ = document.createElement('TR');
		var td1_ = document.createElement('TD');
		var sub = arguments[y];
		this.obj_text = document.createTextNode(sub);							
		td1_.appendChild(this.obj_text);
		var td2_ = document.createElement('TD');
		var input_ = document.createElement('INPUT');
		var text_area = document.createElement('INPUT');
		input_.setAttribute("TYPE","TEXT");
		input_.setAttribute("NAME","");
		input_.setAttribute("VALUE","");
		input_.size = 45;
		input_.name = sub;
		input_.onchange = function(){
			post_data += this.name+"="+encodeURIComponent(this.value)+"&";
		}		
		td2_.appendChild(input_);
		row_.appendChild(td1_);
		row_.appendChild(td2_);
		t_body.appendChild(row_);	
	}
	//t_body.appendChild(row_);
}

function do_form(){
	var form = document.getElementById('my_form');
	var stringa = "";
	var numeroElementi = form.elements.length;
   	for(var i = 0; i < numeroElementi; i++)
	{
		if(i < numeroElementi-1)
		{
			stringa += form.elements[i].name+"="+encodeURIComponent(form.elements[i].value)+"&";
		}else{
			stringa += form.elements[i].name+"="+encodeURIComponent(form.elements[i].value);
		}
	}
   	//alert(stringa);
	return stringa;
}

function do_form_table(){
	create_dom_elements('dx_t','tabella100','t_body02');	
}



function do_location_new(action){
	var elements = [];
	var query_string = location.search.substr(1);
	if(query_string){
		elements = query_string.split("?");
		var url_string = '?action=' + action + '&';
		url_string += elements.toString();
		//alert(url_string);
	}else 
		url_string = '?action=' + action;	
	//alert(url_string);
	return url_string;
}

function do_get_url(){
	//var querystring = location.search;
	var querystring = location.search.substr(1); 
	if (querystring){		
		var query_string = "";
		var variabili = new Array();
		variabili=querystring.split("&");
		var action = variabili[0].substr(variabili[0].indexOf("=")+1); 
		var id = variabili[1].substr(variabili[1].indexOf("&")+1);		
		if(action){
			//query_string = "?action="+action;			
			if(id){
				query_string += "&" + id; //+="&id="+id;//				
			}
		}
		alert(query_string);
		return query_string;		
	}
}

function do_popup(url){
	var w = 400;
	var h = 600;
	var l = Math.floor((screen.width-w)/2);
	var t = Math.floor((screen.height-h)/2);
	window.open(url,"Catalogo","width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
 }




function doRedirect(redirect_location){ //funzione con il link alla pagina che si desidera raggiungere
	location.href = redirect_location;
	//location.href = "edit_image.php";
}

function do_selected_option(option_id,option_value){
	var my_option = document.getElementById(option_id);
	my_option.setAttribute("SELECTED", "selected");
	my_option.option_value;
}


function get_form_values(form_id){
	var form = document.getElementById(form_id);
	var post_data = "";
	var form_elements = form.elements.length;
   	for(var i = 0; i < form_elements; i++)
	{
		if(i < form_elements-1)
		{
			post_data += form.elements[i].name+"="+encodeURIComponent(form.elements[i].value)+"&";
		}else{
			post_data += form.elements[i].name+"="+encodeURIComponent(form.elements[i].value);
		}
	}
   	alert(post_data);
	return post_data;
}

function get_selected_index(select_id){
	var select = document.getElementById(select_id);
	select.onchange = function(){
		alert(select.options[select.selectedIndex].value);
		//get_select('sub');
	}
}


function submit_func(){
	var url = 'php/response_sub.php';
	url += do_location_new('insert');
	if(confirm("sei sicuro di voler inserire il record ?")){
		init_post_request('POST',url,do_form());
		window.setTimeout("doRedirect('edit_image.php')", 2000); //Fa partire il redirect dopo tot. secondi
		//window.setTimeout("doRedirect()", 2000); //Fa partire il redirect dopo tot. secondi
	}
}

function submit_delete_func(){
	var url = 'php/response_sub.php';
	url += do_location_new('delete');
	if(confirm("sei sicuro di voler cancellare il record ?")){
		init_post_request('POST',url,do_form());		
	}
}

////////////old functions


function radio_click(radio_id,radio_value){
	var radio = document.getElementById(radio_id);
	radio.onclick = function(){
		radio.value = radio_value;
		alert(radio.value);
	}
}

function init_element(div_id,element_id, form_name){
	this.element_id = element_id;
	this.div_ = document.getElementById(div_id);
	this.form_ = document.createElement('FORM');
	this.form_.name = form_name;	
	this.form_.method = "post";
	//this.form_.action = do_popup('php/window_pop_up.php');	
	//this.form_.onsubmit = alert("test");
}

function init_element1(div_id,element_id, form_name){
	this.element_id = element_id;
	this.div_ = document.getElementById(div_id);
	this.form_ = document.createElement('FORM');
	this.form_.name = form_name;
	//this.form_.onchange = this.get_selected_index(element_id);
}

function test_insert(){
	create_dom_elements('pluto','tabella100','t_body02');	
}


