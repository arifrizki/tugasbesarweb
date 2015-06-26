var xmlHttp

function showDosen(str){
		xmlHttp=GetXmlHttpObject()
		if(xmlHttp==null){
			alert("Browser anda tidak support")
			return
		}
var url="get_dosen.php"

url=url+"?q="+str
xmlHttp.onreadystatechange=stateChanged
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChanged(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("txtHint").innerHTML=xmlHttp.responseText
	}
}

function GetXmlHttpObject(){
	var xmlHttp=null;
	
	try{
		xmlHttp=new XMLHttpRequest();
	}catch(e){
		xmlHttp=new ActiveXObhect("Microsoft.XMLHTTP");
	}
	return xmlHttp;
}