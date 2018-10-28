<html>
<head>
	<title>Önskelistan</title>
    <link href="content/main.css" rel="stylesheet" />
    <script src="content/main.js"></script>
</head>
<body>
<h1>Önskelistan</h1>
<select id="users" ></select>
<ul id="wishes"></ul>
    <a href="add.php" >Lägg till önskan</a>

    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.min.js"></script>
	<script>
        $(document).ready(function ()
        {
            var selecteditem = populateUsersList($('#users'));
            console.log(selecteditem);
            updateWishList();
            // TODO: When loaded populate wishlist for current user
        });

		$("#users").change(function () 
		{
		    updateWishList();
		}).change();
  
		function updateWishList()
		{
		    $("select option:selected").each(function () {
		        populateWishList($('#wishes'), $(this).val());
		    });
		}
		function removeWish(id)
		{
		    if (confirm("Ta bort önskning?"))
            {
		        console.log(id);
		        $.getJSON("../api/deletewish.php?wishid=" + id).done(function (data) {
		            console.log(data);
		            alert("Önskning borttagen");
		        });
		    }
		}
		
    </script>
</body>

</html>