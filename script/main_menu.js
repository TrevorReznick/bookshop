
// Product title: Gurt JavaScript Menu
// Product version details: 1.1, 01-25-2006 (mm-dd-yyyy) [compressed version]
// Product URL: http://gurtom.com/products/menus/js
// Contact info: gurt-feedback@gurtom.com (specify product title in subject line)
// Notes: This script is free. Feel free to copy, use and change this script as
// long as this head part remains unchanged. Visit official site for details.
// Copyright: (c) 2006 by Gurtom.Com

var menuConfig = [
{
	'height':  40,
	'width' : 115,
	'firstX' : 0,
	'firstY' : -10,
	'nextX' : 2,
	'hideAfter' : 200,
	'css'   : 'gurtl0o',
	'trace' : true
},
{
	'height':  40,
	'width' : 115,
	'firstY' : 40,
	'firstX' :  0,
	'nextY' : 0,
	'css' : 'gurtl1o'
},
{
	'firstX' : 115,
	'firstY' : 0
}
];



var menus=[],_m3=window.external?[' style="width:100%;height:100%"','div onclick="','div']:['','a href="javascript:','a'],_mC=document.getElementById?function(_mR){return document.getElementById(_mR)}:function(_mR){return document.all[_mR]};function menu(_m1,_mO){var _=this,i;_._m1=_m1;_._mO=_mO;_._mS='';_.id=menus.length;_._m0=[];_._m2=[];_._m4=[0,0];_._mO[-1]={'firstX':20,'firstY':20,'nextX':15,'nextY':15,'width':100,'height':22,'hideAfter':200,'target':'_self','trace':0,'css':''};for(i=0;i<_._m1.length;i++)if(_._m1[i])new _mE(0,_,_,_._m1[i]);for(i=0;i<_._m2.length;i++)_mA(_._m2[i],1);menus[_.id]=_;}function _mD(_mK){var i,a=menus[_mK]._m0;for(i=0;i<a.length;i++){_mA(a[i],0);_mB(a[i],'norm');}}function _mF(_mK,_mI){var m=menus[_mK],_=m._m0[_mI]._m1[1];_mB(m._m0[_mI],'clck');if(_)open(_,_m9(m._m0[_mI]._m8,m._mO,'target'));}function _mG(_mK,_mI){var m=menus[_mK];m._mL=setTimeout('_mD('+_mK+')',_m9(m._mN._m8,m._mO,'hideAfter'));if(m._mN.id==_mI)m._mN=null;}function _mH(_mK,_mI){var m=menus[_mK],_,_m7,i;m._mN=_=m._m0[_mI];if(m._mL)clearTimeout(m._mL);for(i=0;i<m._m0.length;i++){_=m._m0[i];_m7=!m._mN._mS.indexOf(_._mT);if(_m7)_mB(_,_==m._mN?'over':'norm');_mA(_,_m7);}if(m._mN._m6)for(i=m._mN;i&&i._m5;i=i._mP)_mB(i,'over');}function _mE(l,p,m,_m1){var _=this,i,c=p._m2.length,_mO=m._mO;_._m1=_m1;_._mP=p;_._mT=p._mS;_._mS=p._mS+c+':';_._m8=l;_.id=m._m0.length;m._m0[_.id]=_;p._m2[c]=_;var id=m.id+','+_.id,nX,nY;_._m6=_m9(l,_mO,'trace');for(i=l;i>=-1;i--){if(_mO[i]&&_mO[i]['nextX']!=null)nX=_mO[i]['nextX'];if(_mO[i]&&_mO[i]['nextY']!=null)nY=_mO[i]['nextY'];if(nX!=null||nY!=null)break;}_._m4=[p._m4[0]+_m9(l,_mO,'firstX')+(nX!=null?nX*c+_m9(l,_mO,'width')*c:0),p._m4[1]+_m9(l,_mO,'firstY')+(nY!=null?nY*c+_m9(l,_mO,'height')*c:0)];document.write('<',_m3[1],'_mF(',id,')" id="me',id,'" style="position:absolute;top:',_._m4[1],'px;left:',_._m4[0],'px;width:',_m9(l,_mO,'width'),'px;height:',_m9(l,_mO,'height'),'px;visibility:hidden;z-index:',l,';text-decoration:none" onmouseout="_mG(',id,')" onmouseover="_mH(',id,')"><div',_m3[0],' id="mi',id,'" class="',_m9(l,_mO,'css'),'norm">',_m1[0],'</div></',_m3[2],'>');_._m5=[_mC('me'+m.id+','+_.id),_mC('mi'+m.id+','+_.id),_m9(l,_mO,'css')];if(_m1.length>2){_._m2=[];for(i=2;i<_m1.length;i++)if(_m1[i])new _mE(l+1,_,m,_m1[i]);}}function _mA(_,_mJ){if(_._mQ==_mJ)return;_._mQ=_mJ;if(_mJ)_._m5[0].style.visibility='visible';else if(_._m8)_._m5[0].style.visibility='hidden';}function _mB(_,_mM){if(_._m5[3]==_mM)return;_._m5[3]=_mM;_._m5[1].className=_._m5[2]+_mM}function _m9(l,_mO,k){for(var i=l;i>=-1;i--)if(_mO[i]&&_mO[i][k]!=null)return _mO[i][k];}
var menuHierarchy = [
	['Home','index.php' ],
	['Prodotti', null,
		['Libri', 'index.php?action=view&id_s=1'],
		['Testi Concorsi','index.php?action=view&id_s=2'],
		['Codici','index.php?action=view&id_s=7'],
		['Riviste','index.php?action=view&id_c=200'],
		['Agende','index.php?action=view&id_c=300',['Enti Pubblici','index.php?action=view&id_s=5'],['Privati', 'index.php?action=view&id_s=6']],		
		['Formazione','index.php?action=view&id_c=700',['Corsi di formazione','index.php?action=view&id_s=15'],['Master','index.php?action=view&id_s=16']],
		['Internet', 'index.php?action=view&id_c=600',['E-Learning', 'index.php?action=view&id_s=13'],['Abbonamenti', 'index.php?action=view&id_s=10']]
	],
	['Banche dati','index.php?action=view&id_c=500',['Banche Dati','index.php?action=view&id_s=8'],['Aggiornamenti','index.php?action=view&id_s=11'],['Software','index.php?action=view&id_s=9']],
	['Map',null,['Categorie', 'index.php?action=view_cats'],['Collane', 'index.php?action=view_cats'],['Editori', 'index.php?action=view_cats'],['Link', null,
		['Case Editrici', null, ['Cedam','http://www.cedam.com/'], ['Experta', 'http://www.experta.it/'], ['Giappichelli', 'http://www.giappichelli.it/'] , ['Il Sole 24 ore ', 'http://www.libreriauniversitaria.it/libri-collana_i+libri+di+guida+al+diritto-editore_il+sole+24+ore+pirola.htm'], ['La Tribuna', 'http://www.latribuna.it/'], ['Maggioli', 'http://www.maggioli.it/'], ['Simone', 'http://www.simone.it/'], ['Utet', 'http://www.utet.it/'], ['Zanichelli', 'http://www.zanichelli.it/']],
		['Concorsi', null, ['Gazzetta Ufficiale','http://www.gazzettaufficiale.it/'],['Concorsi.it','http://www.concorsi.it/'], ['Concorsi Pubblici.com', 'http://www.concorsipubblici.com/'],['M.P.I.', 'http://www.pubblica.istruzione.it/index_amministrazione.shtml'], ['Giustizia.it', 'http://www.giustizia.it/concorsi/indice.htm'], ['Polizia di Stato', 'http://www.poliziadistato.it/pds/cittadino/concorsi/concorsi.htm']]
	   ]],
	['Chi Siamo','contatti.htm',['Azienda', 'azienda.htm'],['Contatti','contatti.htm']],
	['Ordini', 'ordini.htm']	
]

