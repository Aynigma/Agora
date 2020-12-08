var affect = 0;

function change_follow_to_unfollow()
{
    if (affect ==  0)
    {
        document.getElementById("button-follow").innerHTML = "Unfollow";
        document.getElementById("modal").style.visibility = "visible";
        affect = 1;
    }
    else if(affect == 1)
    {
        document.getElementById("button-follow").innerHTML = "Follow";
        document.getElementById("modal").style.visibility = "hidden";
        affect = 0;
    }
    
}


