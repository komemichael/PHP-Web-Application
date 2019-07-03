var xhttp = new XMLHttpRequest();
inhtml = "";
xhttp.onreadystatechange = function() {
	var html;
    if (this.readyState == 4 && this.status == 200) {
      thisfunction(this);
    }
    
};
console.log(inhtml);
xhttp.open("GET", "sites.xml", true);
xhttp.send();

function thisfunction(xml){
	var xmldoc = xml.responseXML;
	inhtml = "<div><h1>";
	var kome = xmldoc.getElementsByTagName("kome")[0];
	var avatarKome = kome.getElementsByTagName("avatar")[0].childNodes[0].nodeValue;
	var quoteKome = kome.getElementsByTagName("Quote")[0].childNodes[0].nodeValue;

	inhtml += quoteKome + "</h1>";

	var komeprojecs = kome.getElementsByTagName("projects")[0].childNodes;

	for (var i = 0; i < komeprojecs.length; i++) {
		if (!(komeprojecs[i].nodeType == 3)) {
			var project_title = komeprojecs[i].getElementsByTagName("project_title")[0].childNodes[0].nodeValue;
			var project_details = komeprojecs[i].getElementsByTagName("project_details")[0].childNodes[0].nodeValue;
			inhtml += "<h3>" + project_title + "</h3><br>";
			inhtml += "<p class='w3-padding'>" + project_details+ "</p><br><hr><br>";
		}
	}

	inhtml += "</div>";
console.log(inhtml);
}
console.log(inhtml);