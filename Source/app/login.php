<html>
<head>
	<title>Önskelistan</title>
</head>
<body>
<h1>Logga in</h1>
<label>Användarnamn:</label><input type="text" id="username">
<label>Lösenord:</label><input type="password" id="password">
<input type="button" id="submit" value="Logga in" onclick="login();"  />
<label id="result" />

    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.min.js"></script>
    <script>

	function login() 
	{
		var url = '../api/login.php?username=' + $("#username").val() + '&password=' + $("#password").val();
		$.ajax({dataType: "json",url: url}).done(successfullLogin).fail(failedLogin);
	}
	
	function successfullLogin(data)
	{
		if (data.result)
		{
			window.location.replace("wishes.php");
		}
		else
		{
			$("#result").text("Felaktigt användarnamn eller lösenord") 
		}
	}
	function failedLogin(data)
	{
		console.log("dao");
	}

    </script>
</body>

</html>