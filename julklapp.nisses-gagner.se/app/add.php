<html>
<head>
	<title>�nskelistan</title>
    <link href="content/main.css" rel="stylesheet" />
    <script src="content/main.js"></script>
</head>
<body>
<h1>L�gg till �nskan</h1>
<label>Namn:</label><input type="text" id="name">
<label>L�nk:</label><input type="text" id="link">
<input type="button" id="submit" value="L�gg till" onclick="addWish();"  />
<label id="result" />
        <a href="wishes.php" >�terg�</a>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.min.js"></script>
	<script>
        
		function addWish()
		{
		    var url = '../api/createwish.php?name=' + $("#name").val() + '&link=' + $("#link").val();
		    console.log(url);
		    $.ajax({ dataType: "json", url: url }).done(WishCreated).fail(FailedToCreateWish);
		}
		function WishCreated()
		{
		    alert("�nskan tillagd");
		    window.location.replace("wishes.php");
		}
		function FailedToCreateWish() {
		    console.log(result);
		    alert("�nskan lades INTE till");
		}
		
    </script>
</body>

</html>