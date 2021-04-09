
function trry()
{
    var color = document.getElementById('colors');
    alert(color.value);
    var result = document.getElementById('res');
    result.innerHTML=color.value;
    document.getElementById('res').style.color=color.value;

}