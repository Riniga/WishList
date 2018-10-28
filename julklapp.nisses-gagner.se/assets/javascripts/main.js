$(document).ready(function ()
{
    
    GetCurrentUserAndRedirect();

    // if (!sessionStorage.getItem("currentuserid"))  GetCurrentUserAndRedirect();
    // else console.log("Inloggad användare: " + sessionStorage.getItem("currentuserid"));
    
    //if ($("#values").length) FillValuesListFromApi();
});


function GetCurrentUserAndRedirect()
{
    $.get("api/currentuser.php", function (user)
    {

        console.log("Print user: " + user);
    //    
    //    sessionStorage.setItem("currentuserid", user);
       //document.location="wishList.php";
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