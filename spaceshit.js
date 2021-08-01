function openMenu() 
{
    var open = document.getElementById("menu");
    if (open.style.display === "none") 
    {
        open.style.display = "block";
    } 
    else 
    {
        open.style.display = "none";
    }
} 

function explode() 
{
    document.getElementById('rocket').style.backgroundImage="url(img/booom.gif)";
} 
