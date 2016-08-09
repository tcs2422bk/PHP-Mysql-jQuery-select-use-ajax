var xhttp;
	if (window.XMLHttpRequest) {
		xhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	function checkAccount(){

		var account = document.getElementById('account');
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				document.getElementById("mesg").innerHTML = 
					xhttp.responseText;
			}
		};
		xhttp.open("GET", "brad73.php?account=" + account.value, true);

		xhttp.send();

		//setInterval('test2()', 1000);
	}
	function test2() {
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				document.getElementById("mesg").innerHTML = 
					xhttp.responseText;
			}
		};
		xhttp.open("GET", "brad72.php", true);
		xhttp.send();
	}