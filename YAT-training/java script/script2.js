// ********************************  task 1 ***************************************************
// var user = prompt("enter your username");
// if(user == "sherry")
// {    
//     var pass = prompt("enter your password");
//     if(pass == "1234")
//     {
//         alert("welcome"+user);
//         window.location.assign("index.html");

//     }
//     else 
//     {
//         alert("wrong password"); 
//     }
// }
// else{
//     alert("wrong username");
// }
// *******************************  task 2 ********************************************************
// var deg =prompt("enter your degree");
// if(deg >=90 )
// {
//     alert("excellent");

// }
// else if (deg <90 && deg >=80)
// {
//     alert("very good");

// }
// else if (deg<80 && deg>=50)
// {
//     alert("good");

// }
// else if (deg<50 && deg>0)
// {
//     alert("fail");

// }
// *******************************  task 3  *********************************************************
// var country = prompt("please enter the country");
// if(country=="egypt" || country =="مصر")
// {
//     alert("pound .. جنيه ");
// }
// else if(country=="usa" || country =="السعوديه")
// {
//     alert("reial .. الريال  ");
// }
// else if(country=="america" || country =="امريكا")
// {
//     alert("dollar .. الدولار ");
// }
// else
// {
//     alert("not define ^^.")
// }

// ********************************   task 4  ********************************************************
// var month=parseInt(prompt("pleae enter the month."));
// if (month ==1 || month == 2 || month == 12)
// {
//     alert("winter");
// }
// else if (month>=3 && month<=5)
// {
//     alert("spring");
// }
// else if (month>=6 && month<=8)
// {
//     alert("summer");
// }
// else if (month>=9 && month<12)
// {
//     alert("outmn");
// }
// else
// {
//     alert("you have to enter a month !!")
// }
// ************************************* task  5 ***************************************************
// var month=parseInt(prompt("pleae enter the month."));
// switch(month)
// {
//     case 1: case 2: case 12:
//     alert("winter");
//     break;
//     case 3 : case 4 : case 5 :
//     alert("spring");
//     break; 
//     case 6 : case 7 : case 8 :
//     alert("summer");
//     break; 
//     case 9 : case 10 : case 11 :
//     alert("outmn");
//     break; 
//     default :
//     alert("you have to enter a month !!")
// }
// **********************************************************************************************
var color = ['red','yellow','green','blue'];
var colors = new Array('red','yellow','green','blue');
document.write(color + "<br>");
alert(color[1]);
for (i=0;i<color.length;i++)
{
    document.write(color[i]+"<br>");
}
for (y in colors)
{   
    if(colors[y]=='green')
    {
        // break;
        continue;
    }
    document.write(colors[y]+"<br>");
}