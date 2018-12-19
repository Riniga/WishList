$(document).ready(function ()
{
    if ( $( "#loginform" ).length ) GetCurrentUserAndRedirect();


    $( "#loginform" ).submit(function( event ) 
    {
        if (TryLogin($("#username").val(), $("#password").val()))
            $("#loginResultText").text('');
        else
            $("#loginResultText").text('Fel användarnamn eller lösenord');
        event.preventDefault();
      });

});

function TryLogin(username, password)
{
    $.ajax(
        {
            url: "api/login.php",
            method: "GET",
            contentType: "application/json",
            data: { username: username, password: password }
        })
        .done(function(result) 
        {
            if ( result.result ) 
            {
                document.location="wishList2.php";
            }
        });
}

function GetCurrentUserAndRedirect()
{
    $.get("api/currentuser.php", function (user)
    {
        if (user.loggedin) 
        {
            document.location="wishList2.php";
        }
    });
}


function FillValuesListFromApi()
{
    $.get("data/lessons.json", function (values)
    {
        $.each(values, function (i, value) {
            $("#values").append("<li><img src='images/"+value.image+"' width='50px' alt='" + value.title + "' /><p>" + value.title + "</p></li>");
        });
    });
}