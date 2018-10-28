function populateUsersList(list) {
    var selected;
    $.getJSON("../api/users.php").done(function (data) {
        $.each(data, function (key, item) {
            var option = new Option(item.firstname, item.userid);
            if (item.iscurrentuser) {
                option.setAttribute("selected", "true");
                selected = item.userid;
            }
            list.append(option);
        });
       
    });
    return selected;
}
function populateWishList(wishlist, id) {
    $.getJSON("../api/wishes.php?userid=" + id).done(function (data) {
        wishlist.empty();
        $.each(data, function (key, item) {
            var listitem = getListItem(item);
            listitem.appendTo(wishlist);
        });
    });
}

function getListItem(item) {
    if (item.bought == null) {
        return getListItemForCurrentUser(item);
    }
    return getListItemForOtherUser(item);
}

function getListItemForCurrentUser(item) {
    if (item.link) {
        return $("<li><a href='" + item.link + "' target='_blank'>" + item.name + "</a><a href='#' onclick='removeWish("+item.id+")'>[Radera]</a>[Redigera]</li>");
    }
    return $("<li>" + item.name + " <a href='#' onclick='removeWish("+item.id+")'>[Radera]</a>[Redigera]</li>");
}

function getListItemForOtherUser(item) {
    var liclass = "free"
    if (item.bought > 0) {
        liclass = "bought";
    }

    if (item.link) {
        return $("<li class='" + liclass + "'><a href='" + item.link + "' target='_blank'>" + item.name + "</a>[Köpa]</li>");
    }
    return $("<li class='" + liclass + "'>" + item.name + " [Köpa]</li>");
}