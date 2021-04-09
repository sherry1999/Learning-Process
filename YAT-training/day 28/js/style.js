// var sherry
// {
//     namee:"serry";
//     age=22;
//     address="cairo";
//     gender="female";
//     type:function()
//     {

//     }   
      
// }

function login()
{
    var n1 = document.getElementById("nam1").value;
    var n2 = document.getElementById("nam2").value;
    if(n1=="" || n2=="")
    {
        alert("you must enter a name");
        document.getElementById("nam1").style.backgroundColor="red";

    }
    else if(n1=="Sherry"&& n2=="Mostafa")
    {
        document.write("Welcoem^^");
        document.getElementById("nam1").style.backgroundColor="green";
    }
    else
    {
        document.write("you are not allowed");
        document.getElementById("nam1").style.backgroundColor="red";

        
    }
}

// var x = [10,1,21,13,4,54,6,7,8]
// var min=x[0];
// var max=0;
// for (i=0;i<=8;i++)
// {
//     if(x[i]<= min)
//     {
//         min=x[i];
//     }
// }
// document.write(min+" is the min number"+"<br>");
// for (i=0;i<=8;i++)
// {
//     if(x[i]>= max)
//     {
//         max=x[i];
//     }
// }
// document.write(max+" is the max number");
