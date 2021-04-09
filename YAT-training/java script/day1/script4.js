// ********************************************* task 1 **********************************************
function change()
{
    var im = document.getElementById('image1');
     var z =im.getAttribute('src');
     if(z == "im/1.jpg")
     {
         im.setAttribute('src',"im/3.jpg");
     }
     else
     {
        im.setAttribute('src',"im/1.jpg");
 
     }


}
// ********************************************* task 2 **********************************************
function op(x)
{ 
    var fnum = parseInt(document.getElementById('txt11').value);
    var snum = parseInt(document.getElementById('txt22').value);
    var resbtn = document.getElementById("res");
    if(x == '+')
    {
        var y = fnum+snum;
    }
    else if(x == '-')
    {
        var y = fnum-snum;
    }
    else if(x == '*')
    {
        var y = fnum*snum;
    }
    else if(x == '/')
    {
        var y = fnum/snum;
    }

    resbtn.setAttribute('value',"the result is : "+y);

}



