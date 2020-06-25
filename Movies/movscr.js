function mov()
{
var x=document.getElementById("vel").selected;
var y=document.getElementById("chen").selected;
if(x == true)
{
    document.getElementById('movies1').style.display='none';
    document.getElementById('movies').style.display='block';
}
if(y == true)
{
    document.getElementById('movies1').style.display='block';
    document.getElementById('movies').style.display='none';
}
}

function movform(x)
{
    document.getElementById('movies').style.display='none';
    document.getElementById('choosecity').style.display='none';
    document.getElementById('movies1').style.display='none';
    document.getElementById('book').style.display='block';
    document.getElementById('mo').value =x;
}