var api = {
		expand: function() {
		var el = document.getElementsByClassName("applet");
		if(el != null) {
			try {
				for(var i in el) {
			el[i].style.width = "80vw";
			el[i].style.height = "60vh";
			}
			return true;
			}
			catch(error) {console.log("expand(): error while setting css: '"+error.message+"'.");}
		}
		else
		{
			console.log("expand: error while evaluating.");
			return false;
		}
	},
	
	resetSize: function() {
		var el = document.getElementsByClassName("applet");
		if(el != null) {
			try {
				for(var i in el) {
			el[i].style.width = "";
			el[i].style.height = "";
			}
			return true;
			}
			catch(error) {console.log("expand(): error while setting css: '"+error.message+"'.");}
		}
		else
		{
			console.log("expand: error while evaluating.");
			return false;
		}
	}


	
	
	
};