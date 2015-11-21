<html>
<head>
	<title>�nskelistan</title>
    <link href="content/main.css" rel="stylesheet" />
    <script src="content/main.js"></script>
</head>
<body>
<h1>�nskelistan</h1>
<select id="users" ></select>
<ul id="wishes"></ul>
    <a href="add.php" >L�gg till �nskan</a>

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
		    if (confirm("Ta bort �nskning?"))
            {
		        console.log(id);
		        $.getJSON("../api/deletewish.php?wishid=" + id).done(function (data) {
		            console.log(data);
		            alert("�nskning borttagen");
		        });
		    }
		}
		
    </script>
</body>

</html>