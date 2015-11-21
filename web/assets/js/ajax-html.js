//LOADING HTML PAGE WITH AJAX

//getting the XML Http Request: initialisation of the window

function getXMLHttpRequest(){
	if(window.ActiveXObject){ 
		// Support Internet Explorer
		var request = new ActiveXObject("Microsoft.XMLHTTP");
		return request;
	} else 	if(window.XMLHttpRequest){ 
		// Support Firefox, Safari, Opera
		var request = new XMLHttpRequest();
		return request;
	} else {
		alert('Désolé, mais votre navigateur ne supporte pas la technologie AJAX. Nous vous conseillons d\'utiliser un de ces navigateurs compatibles : Mozilla Firefox, Microsoft Internet Explorer, Opera.');
		return false;
	}
}

// set HTML stream on the page

function writeHTML(htmlStream, div){
	document.getElementById(div).innerHTML = htmlStream;
}

//load page of url

function loadPage(url,div){
	request = getXMLHttpRequest();
	request.open("GET", url, true);
	request.send(null);
	if(request.readyState == 4) {
		writeHTML(request.responseText, div);
	} else { 
		return false;
	}
}

//set loaded page to the destination

function getPage(url,destination){
	page = url
	div = destination
	if(page != ''){
		//Modified time out 
		setTimeout("loadPage(page,div);",1000); 
		//writeHTML('Veuillez patienter...',div);
	}
}