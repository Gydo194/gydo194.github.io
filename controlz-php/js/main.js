//main.js by Gydo194

var mainConfigJsonPath = "json/main.json";
var config = {};

function start() {
	var xhr = new XMLHttpRequest();
	xhr.open("GET",mainConfigJsonPath);
	xhr.onload = function() {
		config = JSON.parse(this.responseText);
		console.log(this.responseText);
		buildPage();
	}	
	xhr.send(null);
}

function buildPage() {
	var element = {};
	//actually build the page components
	for(var i in config.applets) {
	//	var element = document.createElement("frame");
		
		if(config.applets[i].applet_src)
		{
			var element = document.createElement("iframe");
			//element.id = config.applets[i].id;
			element.className = config.applets[i].className;
			console.log("Rendering applet in SRC mode, SRC ="+config.applets[i].applet_src);
			console.log("ELEMENT CLASS:"+element.className);
			element.src = config.applets[i].applet_src;
		}
		else if (config.applets[i].applet_html)
		{
			var element = document.createElement("div");
			//element.id = config.applets[i].id;
			element.className = config.applets[i].className;
			element.innerHTML = config.applets[i].applet_html;
			console.log("Rendering applet in INNERHTML mode, INNERHTML ="+config.applets[i].applet_html);
		}
		console.log("appending element:"+element);
		var div = document.createElement("div");
		div.className = "applet-container-wrapper";
		div.appendChild(element);
		document.getElementById("app-content").appendChild(div);
	}
	
}



	
	
start();