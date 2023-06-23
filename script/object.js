//the Objects

function MainTableBooks(object){	
	this.values_obj = object;
	this.name = this[name];
	this.record_obj = function(){
		for(var i in this.values_obj){
			this.property_obj.call(this, this.values_obj[i]);			
		}
	}
	this.property_obj = function(){
		for(var s in this.values_obj){
			this.name = this.values_obj[s];
		}
	}
	//alert("fine oggetto");
}	

function DoTableForm(object){
	this.values_obj = object;
	this.name = this[name];
	this.property_obj = function(){
		for(var s in this.values_obj){
			this.name = this.values_obj[s];
		}
	}	
}

//the call functions

function do_something(response){	
	var main_table_obj = new MainTableBooks(response);
	do_message('status_msg', 'Visualizza Libri');
	main_table_obj.response_table();	
}

function call_select_editore(response){
	var select_obj = new MainTableBooks(response);
	select_obj.do_select_editore('sel_01');
	return true;
}
//call_select_collana
function call_select_collana(response){
	var select_obj = new MainTableBooks(response);
	select_obj.do_select_collana('sel_02');
	return true;
}

function call_select_cat(response){
	var select_obj = new MainTableBooks(response);
	select_obj.do_select_cat('sel_03');
	return true;
}

function call_select_subcat(response){
	var select_obj = new MainTableBooks(response);
	select_obj.do_select_subcat('sel_04');
	return true;
}

function call_image_name(response){
	var image_obj = new MainTableBooks(response);
	image_obj.do_image_name('image');
	return true;
}

function do_something_else(response){
	do_message('status_msg', 'Modifica Libri');
	var table_form_obj = new DoTableForm(response);
	table_form_obj.property_obj();
	table_form_obj.init_element('sx_t','my_form','tabella99','t_body01');
	table_form_obj.do_table_form('titolo_libro');	
	table_form_obj.do_table_form('sottotitolo','codice_ISBN','autori','anno_pubblicazione','prezzo','pagine','altro_codice');
	//table_form_obj.do_selected_opt();
	//table_form_obj.get_form_values('my_form');
}

//-----------------------------



MainTableBooks.prototype.response_table = function(){
	var div_ = document.getElementById("pluto");
	var table_ = document.createElement('TABLE');
	table_.setAttribute("ID","tabella1");
	var t_body_ = document.createElement('TBODY');
	for (var i in this.values_obj){
		this.record_obj();
		var row_ = document.createElement('TR');
		for (var y in this.values_obj[i]){
			var td_ = document.createElement('TD');
			var a_ = document.createElement('A');
			var obj_text = document.createTextNode(this.values_obj[i][y]);
			a_.appendChild(obj_text);				
			td_.appendChild(a_);		
			row_.appendChild(td_);
			a_.href = 'edit.php?id=' + this.values_obj[i]['id'] + '&id_coll=' + this.values_obj[i]['id_collana'] + '&t1=libri&t2=libri_dett';
			//a_.href.onclick = my_test();
		}
		t_body_.appendChild(row_);
	}
	table_.appendChild(t_body_);
	div_.appendChild(table_);	
	//Righello("tabella1");	 
}

MainTableBooks.prototype.do_select_editore = function(select_id){
	var select = document.getElementById(select_id);
	var option = document.createElement('OPTION');
	//select.style="width:130px;";
	//select.remove(0);
	for (var i in this.values_obj){
		this.record_obj();
		option = document.createElement('OPTION');
		option.name = "editore";
		option.value = this.values_obj[i]['editore'];
		var obj_text = document.createTextNode(this.values_obj[i]['editore']);
		option.setAttribute("ID",option.value);
		option.appendChild(obj_text);
		select.appendChild(option);
	}
	//this.select_.onchange = this.get_selected_index(this.select_);
}

MainTableBooks.prototype.do_select_collana = function(select_id){
	var select = document.getElementById(select_id);
	var option = document.createElement('OPTION');
	//select.style="width:130px;";
	select.remove(0);
	for (var i in this.values_obj){
		this.record_obj();
		option = document.createElement('OPTION');
		option.name = "id_collana";
		option.value = this.values_obj[i]['id_collana'];
		var obj_text = document.createTextNode(this.values_obj[i]['nome_collana']);
		//option.setAttribute("ID",option.value);
		option.appendChild(obj_text);
		select.appendChild(option);
	}	
	//this.select_.onchange = this.get_selected_index(this.select_);
}

MainTableBooks.prototype.do_select_cat = function(select_id){
	var select = document.getElementById(select_id);
	var option = document.createElement('OPTION');
	//select.style="width:130px;";
	//select.remove(0);
	for (var i in this.values_obj){
		this.record_obj();
		option = document.createElement('OPTION');
		option.name = "id_categoria";
		option.value = this.values_obj[i]['id_categoria'];
		var obj_text = document.createTextNode(this.values_obj[i]['categoria']);
		option.setAttribute("ID",this.values_obj[i]['id_categoria']);
		option.appendChild(obj_text);
		select.appendChild(option);
	}
	//this.select_.onchange = this.get_selected_index(this.select_);
}

//call_select_sottocategoria

MainTableBooks.prototype.do_select_subcat = function(select_id){
	var select = document.getElementById(select_id);
	var option = document.createElement('OPTION');
	//select.style="width:130px;";
	select.remove(0);
	for (var i in this.values_obj){
		this.record_obj();
		option = document.createElement('OPTION');
		option.name = "id_sottocategoria";
		option.value = this.values_obj[i]['id_sottocategoria'];
		var obj_text = document.createTextNode(this.values_obj[i]['sottocategoria']);
		option.appendChild(obj_text);
		select.appendChild(option);
	}
	//this.select_.onchange = this.get_selected_index(this.select_);
}

MainTableBooks.prototype.do_image_name = function(div_id){
	var div = document.getElementById(div_id);	
	for (var i in this.values_obj){
		this.record_obj();
		my_img = document.createElement('IMG');
		my_img.setAttribute("SRC","../immagini/copertine/" + this.values_obj[i]['immagine']);
		my_img.setAttribute("WIDTH",100);
		my_img.setAttribute("HEIGHT",100);
		//var obj_text = document.createTextNode(this.values_obj[i]['immagine']);		
		div.appendChild(my_img);
	}	
}

DoTableForm.prototype.init_element = function(div_id,form_id,table_id, t_body_id){
	var div = document.getElementById(div_id);
	this.form = document.getElementById(form_id);
	this.table = document.getElementById(table_id);
	this.t_body = document.getElementById(t_body_id);
}

DoTableForm.prototype.do_table_form = function(){
	var post_data = "";
	var table = document.getElementById(this.table.id);
	var t_body = document.getElementById(this.t_body.id);
	for(var y=0; y in arguments; y++){
		var row_ = document.createElement('TR');
		var td1_ = document.createElement('TD');
		var sub = arguments[y];
		this.obj_text = document.createTextNode(sub);							
		td1_.appendChild(this.obj_text);
		var td2_ = document.createElement('TD');
		var input_ = document.createElement('INPUT');
		input_.setAttribute("TYPE","TEXT");
		input_.setAttribute("NAME","");
		input_.setAttribute("VALUE","");
		input_.size = 60;
		input_.name = sub;
		input_.defaultValue = this.name[sub];
		input_.onchange = function(){
			post_data += this.name+"="+encodeURIComponent(this.value)+"&";
		}		
		post_data += input_.name+"="+encodeURIComponent(input_.value)+"&";
		td2_.appendChild(input_);
		row_.appendChild(td1_);
		row_.appendChild(td2_);
		t_body.appendChild(row_);		
	}
	this.complete_form();
	post_data += input_.name+"="+encodeURIComponent(input_.value)+"&";
	this.do_submit_action();	
}

DoTableForm.prototype.complete_form = function(){
	var sel_editore_id = this.name['editore'];
	do_selected_option(sel_editore_id);
	var select = document.getElementById('sel_02');
	select.remove(0);
	var  my_option = document.createElement('option');
	my_option.text = this.name['nome_collana'];
	my_option.value = this.name['id_collana'];
	select.add(my_option,null); // standards compliant
	var sel_categoria_id = this.name['id_categoria'];
	var option_value = this.name['id_categoria'];	
	do_selected_option(sel_categoria_id,option_value);
	var select1 = document.getElementById('sel_04');
	select1.remove(0);
	var  my_option1 = document.createElement('option');
	my_option1.text = this.name['sottocategoria'];
	my_option1.value = this.name['id_sottocategoria'];
	select1.add(my_option1,null); // standards compliant
	var sel_novita_id = this.name['novita'];
	do_selected_option(sel_novita_id);
	var sel_promo_id = this.name['promozioni'];
	do_selected_option(sel_promo_id);	
}

DoTableForm.prototype.do_submit_action = function(){
	var submit = document.getElementById("my_submit");
	submit.onclick = function(){
		var url = 'php/response_sub.php';
		url += do_location_new('update');
		do_form();
		//do_popup(url);
		init_post_request('POST',url,do_form());
		var url = 'edit_image.php';
		url += do_location_new('edit_image');
		window.setTimeout("doRedirect('" + url + "')", 2000); //Fa partire il redirect dopo tot. secondi
	}
	var d_submit = document.getElementById("del_submit");
	d_submit.onclick = function(){
		var url = 'php/response_sub.php';
		url += do_location_new('delete');
		if(confirm("sei sicuro di voler cancellare il record ?")){
			init_post_request('POST',url,do_form());
			var url = 'main.php';
			//url += do_location_new('edit_image');
			window.setTimeout("doRedirect('" + url + "')", 4000); //Fa partire il redirect dopo tot. secondi
		}
	}
}
	









//------------------------------------------------------------------------------------------
	//table_form_obj.init_element('test_div','tabella99','t_body01','form4');
	//table_form_obj.do_table_form (div_id,table_id, t_body_id);
	//////////////////////////////////////////////////////////////////////////////////////////////
	//table_form_obj.init_element('tabella01','tabella2','form3');
	//table_form_obj.do_table_form('titolo_libro');	
	//table_form_obj.init_element('pluto','tabella1','form1');
	//table_form_obj.do_table_form('sottotitolo','codice_ISBN','autori','anno_pubblicazione','prezzo','pagine','altro_codice');
	//'immagine','promozioni','novita','id','id_caratteristica_libro','id_collana','id_categoria','id_sottocategoria');
	//table_form_obj.do_table_form('titolo_libro','sottotitolo','codice_ISBN','autori','anno_pubblicazione','prezzo','pagine','altro_codice');






