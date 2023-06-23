//* START
//init_request("GET",url, new AjaxObj());
//

function xmlHttpRequest(){
	var xmlHttp = null;
	try{
		xmlHttp = new XMLHttpRequest();
	}catch(e){
		try{
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}

//site function

function main_page_request(action_url,div){
	//index.php?target=libri&link=giuridici
	var url = 'php/main.php';
	url += do_location_new(action_url); //+ do_get_url();
	init_dummy_request('GET',url, div);	
}

function main_select_editore(action_url){
	var url = 'admin/php/response.php';
	url += do_location_new(action_url);
	init_request('GET',url, new AjaxObj(call_select_editore));	
}

function main_table_map(action_url){
	var url = 'admin/php/response.php';
	url += do_location_new(action_url);
	init_request('GET',url, new AjaxObj(do_something));	
}



//admin functions
function get_main_table(action_url){
	var url = 'php/response.php';
	url += do_location_new(action_url);
	init_request('GET',url, new AjaxObj(do_something));	
}

function get_values_form(action_url){
	var url = 'php/response.php';
	url += do_location_new(action_url);
	init_request('GET',url, new AjaxObj(do_something_else));	
}

function get_image_name(action_url){
	var url = 'php/response.php';
	url += do_location_new(action_url);
	init_request('GET',url, new AjaxObj(call_image_name));
}


function get_select_editore(action_url){
	var url = 'php/response.php';
	url += do_location_new(action_url);
	init_request('GET',url, new AjaxObj(call_select_editore));	
}

function get_select_collane(select_id,select_dest_id){
	var select = document.getElementById(select_id);
	var my_select = document.getElementById(select_dest_id);
	var url = 'php/response.php';
	select.onchange = function(){
		url += '?action=collane&query=' + select.options[select.selectedIndex].value;
		init_request('GET',url, new AjaxObj(call_select_collana));		
	}	
}

function get_select_cat(action_url){
	var url = 'php/response.php';
	url += do_location_new(action_url);
	init_request('GET',url, new AjaxObj(call_select_cat));	
}

//get_select_subcat('sel_03','sel_04');
function get_select_subcat(select_id,select_dest_id){
	var select = document.getElementById(select_id);
	var my_select = document.getElementById(select_dest_id);
	var url = 'php/response.php';
	select.onchange = function(){
		url += '?action=sottocategoria&query=' + select.options[select.selectedIndex].value;
		alert(url);
		init_request('GET',url, new AjaxObj(call_select_subcat));
	}
}

function dummy_request(action_url,div){
	var url = 'php/response.php';
	url += do_location_new(action_url);
	init_dummy_request('GET',url, div);	
}

function ajax_post_data(post_data,url){	
	init_post_request('POST',url,post_data);
}

function init_dummy_request(method,url,div){
	var httpRequest = xmlHttpRequest();
	httpRequest.onreadystatechange = handler;
	httpRequest.open(method,url, true);	
	httpRequest.send(null);
	function handler(){
		var response = httpRequest.responseText;
		if(httpRequest.readyState == 4){
			if(httpRequest.status == 200){
				target = document.getElementById(div);
				target.innerHTML = response;
				//alert(response);
			}
		}
	}
}

function init_request(method,url,init_obj){
	var httpRequest = xmlHttpRequest();
	//url += do_location();
	try {
		init_obj.this_set_obj(httpRequest);
		httpRequest.onreadystatechange = init_obj.the_method;
		httpRequest.open(method,url, true);
		httpRequest.send(null);
	} catch (errv) {
		// ERROR! 
	}
}

function init_post_request(method,url,post_data){
	var httpRequest = xmlHttpRequest();
	httpRequest.onreadystatechange = handler_new;
	httpRequest.open(method,url, true);
	httpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
	httpRequest.send(post_data);
	function handler_new(){
		var response = httpRequest.responseText;
		if(httpRequest.readyState == 4){
			if(httpRequest.status == 200){
				target = document.getElementById('pluto');
				//target.innerHTML = response;
				alert(response);
			}
		}
	}
}




function AjaxObj(f_response_object,return_xml) {
	var my_object = null;
	this.this_set_obj = this_set_obj;//proprieta
	function this_set_obj(my_request) { my_object = my_request; }
	this.the_method = function(){
		var httpRequest = my_object;
		if(httpRequest.readyState == 4){
			if (httpRequest.status == 200){
				if (return_xml){
					var response = httpRequest.responseXML;
				} else {
					try{
						var response = eval("("+httpRequest.responseText+")");
					}catch(e){
						alert(e.message+"\r\n\r\n"+response);
					}
				}
				f_response_object(response);
			}else{
				alert("Errore HTTP: " + httpRequest.status);
			}
		}
		//alert("Oggetto creato con successo!");
		return true;
	} // end method
	
}

function status_request(){//funzione di call back
    var response = httpRequest.responseText;
	if(httpRequest.readyState == 1){
		target.innerHTML = 'Loading.';
	}
	if(httpRequest.readyState == 2){
		target.innerHTML = 'Loading..';
	}
	if(httpRequest.readyState == 3){
		target.innerHTML = 'Loading...';
	}
	if(httpRequest.readyState == 4){
		if(httpRequest.status == 200){
		//target = document.getElementById('pluto');
		target.innerHTML = response;
	}else{
			alert("Niente da fare, AJAX non funziona :(");
		}
	}
}

function dummy_function(){
	return true;
}




