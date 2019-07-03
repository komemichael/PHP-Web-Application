function xml()
{
	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			processXML(this);
		}
	};
	xhttp.open("GET", "sites.xml", true);
	xhttp.send();

	function processXML(xml)
	{
		var xmldoc = xml.responseXML;
		news(xmldoc);
	}
}

function news(xmldoc){
	var newsfeed = xmldoc.getElementsByTagName('newsfeed')[0];
	var news1 = newsfeed.getElementsByTagName('news')[0];
	var news2 = newsfeed.getElementsByTagName('news')[1];

	processnews(news1,1);
	processnews(news2,2);
}
function processnews(news, number){
	for (var i = 0; i < news.childNodes.length; i++) {
		if (!(news.childNodes[i].nodeType == 3)){
			show = news.childNodes[i];
			var title = show.getElementsByTagName("title")[0].innerHTML;
			var paragraph = show.getElementsByTagName('paragraph')[0].innerHTML;
			var author = show.getElementsByTagName('author').innerHTML;
			document.getElementById('header' + number).innerHTML = title;
			document.getElementById('news' + number).innerHTML = "<i>"+ paragraph + "</i>"
		}
	}
}

xml();
