<html>
<head>
<link rel="stylesheet" href="main.css" type="text/css" />
<!--<script language = "javascript">
var XMLHttpRequestObject = false;
if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function getusername(sumberdata){
  if(XMLHttpRequestObject) {
      var obj = document.getElementById("pesan");
      XMLHttpRequestObject.open("GET", sumberdata);
      XMLHttpRequestObject.onreadystatechange = function() {
          if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
              obj.innerHTML = XMLHttpRequestObject.responseText; 
          } 
      }
      XMLHttpRequestObject.send(null);
    } 
}

function cekusername(keyEvent) {
    keyEvent = (keyEvent) ? keyEvent: window.event;
    input    = (keyEvent.target) ? keyEvent.target : keyEvent.srcElement;
    if (keyEvent.type == "keyup") {
        if (input.value) {
          getusername("proses.php?kata=" + input.value);
        }    
    }
}
</script>-->
</head>
<body>
<div class="demo" style="width: 250px;">
<form name="login" action="proses/proses.php" method="POST">
<table>
		<tr><td>Username </td><td><input type="text" name="username" onkeyup="cekusername(event)" /></td></tr>
		<!--<tr><td>Jabatan</td><td> <select name="jabatan" id="jabatan">
						<option value="1">Front Office</option>	
						<option value="2">Manager</option>
						<option value="3">Admin</option>
							</td></tr>-->
		<tr><td>Password </td><td> <input type="password" name="pass" id=""></td></tr>
		
		<tr><td><input type="submit" name="admin" value="Login"></td></tr>
</table>
</form>
</div>
</body>
</html>
