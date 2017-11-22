<?php
session_start();// come sempre prima cosa, aprire la sessione 
include("db_con.php"); // includere la connessione al database

$cookie_name = "user";
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}

?>
<html>  
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

<script type="text/javascript" language="javascript">
function controllaCAP() {
if (document.form_registration.cap.value.length!=5) {
alert("Il CAP deve contenere 5 cifre");
return false;
}
var v=parseInt(document.form_registration.cap.value);
if (isNaN(v)) {
alert("Il CAP deve essere un numero");
return false;
}
return true;
}
  function ControllaFormRegistrazione(){
	  
		if(document.form_registration.nome.value == "" || document.form_registration.password.value == "" || document.form_registration.email.value == ""  || document.form_registration.cap.value == "" ||  document.form_registration.provincia.value == "" ||  document.form_registration.citta.value == ""||  document.form_registration.via.value == ""){
			alert('I campi con * sono obbligatori!!');
			return false;
		} else{
			return true;
		}
	  
	}
	function ControllaFormLogin(){
	  
		if(document.form_login.email.value == "" || document.form_login.password.value == "" ){
			alert('I campi con * sono obbligatori!!');
			return false;
		} else{
			return true;
		}
	  
	}
	
</script>

</head>
<body>
<br/>
<a href="http://localhost/carica_prodotto.php">Carica prodotto</a>
<br/>
<h2>Registrazione</h2>   
<form name="form_registration" method="post" OnSubmit="return ControllaFormRegistrazione(this)" action="registration.php">
<br/>
<p>*Nome: <input type="text" name="nome"></p>
<br/>
<p>*Password: <input type="password" name="password"></p>
<br/>
<p>*Email: <input type="email" name="email" ></p>
<br/>
<p>*CAP:<input type="text" name="cap" size="5" maxlength="5" onChange="return controllaCAP();"></p>
<br/>
<p>Ruolo <input type="radio"  name="ruolo" value="compratore" checked>  Compratore  <input type="radio" name="ruolo" value="venditore" > Venditore </p>
<br/> <br/>

<!-- Indirizzo -->
 <p>*Provincia <select name="provincia">
  <optgroup label="Emilia Romagna">
   <option value="PC">Piacenza</option>
   <option value="PR">Parma</option>
   <option value="RE">Reggio Emilia</option>
  </optgroup>
 
  <optgroup label="Lombardia">
   <option value="MI">Milano</option>
   <option value="LO">Lodi  </option>
  </optgroup>
 </select></p>
 
 <br/>
<p>*Citt&agrave; : <input type="text" name="citta"></p>
<br/>

<br/>
<p>*Indirizzo: <input type="text" name="via"></p>
<br/>
 
<input type="reset">
<button>Registrati</button>
</form>
<h2>Login</h2>
<form name="form_login" method="post" OnSubmit="return ControllaFormLogin(this)" action="login.php">
<p>Email</p><input type="text" name="email" ></p>
<p>Password </p><input type="password" name="password"></p>
<button>Accedi</button>
</form>

<form name="form_logout" method="post" action="logout.php">
<br/>
<br/>
<button>Logout</button>
<br/>
<br/>
</form>
</body>
</html>