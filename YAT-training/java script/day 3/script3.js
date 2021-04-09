// **************************** task 1 ******************************************** 
var x = 0;
var colors=['red','green','blue','orange'];
while (x in colors)
{
    document.write(colors[x]+"<br>");
    x++;
}
// **************************** task 2 ******************************************** 
// var times =0;
// var pass = prompt("please write your password");
// while(pass != 123456)
// {
//     alert("You Entered Wrong Password !! ");
//     times++;
//     pass=prompt("please write your password");
//     if(times==3)
//     {
//         alert("you entered wrong password 3 times !! repeat after 1 hour");
//         break;

//     }
// }
// if(pass==123456)
// {
//     alert("WELCOME 😍😍");
// }
// *********************************  task 3  ***********************************************
// var times =3;
// var pass = prompt("please write your password");
// for(i=0;;i++)
// {
//     if(pass!=123456)
//     {
//       alert("You Entered Wrong Password !! ");
//       times--;
//       pass=prompt("please write your password");
//     }
//     else
//     {
//         alert("WELCOME 😍😍");
//         break;
//     }
//     if(times == 0)
//     {   
//         alert("try again after a while😢");
//         break;
//     }
// }
// *********************************  task 4  ***********************************************
// var colors=[];
// for(i=0;i<=3;i++)
// {
//     var color = prompt("please enter a color");
//     colors[i]=color;
// }
// for(y=0;y<=3;y++)
// {
//     document.write( "<p style='color:"+ colors[y]   
//     +"'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, iure?</p>");
// }
// *********************************  task 5  ***********************************************
function calc()
{
    var num =parseInt(document.getElementById('txt1').value);
    var num2 =parseInt(document.getElementById('txt2').value);
    var op = document.getElementById('txt3').value;
    //by if 
    // if(op == "+")
    // {
    //     document.write(  "the sum is "+ num+num2 + '\n');
    // }
    // else if(op == "-")
    // {
    //     document.write(  "the sub is "+ num-num2 + '\n');
    // }
    // else if(op == "*")
    // {
    //     document.write(  "the multiply is "+ num*num2 + '\n');
    // }
    // else if(op == "/")
    // {
    //     document.write(  "the divide is "+ num/num2 + '\n');
    // }
    // else
    // {
    //     document.write(  "You must enter right operator !!");
    // }
    //by switch 
    switch(op)
    {
        case '+': 
        document.write(  "the sum is "+ num+num2 + '\n');
        break;

        case '-': 
        document.write(  "the sub is "+ num-num2 + '\n');
        break;

        case '*': 
        document.write(  "the mutliply is "+ num*num2 + '\n');
        break;

        case '/': 
        document.write(  "the divide is "+ num/num2 + '\n');
        break;

    }
}
// *********************************  task 6  ***********************************************

 function check()
 {
    var username = document.getElementById('name').value;
 if(username == "sherrihan")
 {
     document.write("yes!!"+"Welcome Sherrihan");
 }
 else
 {
    document.write("Your Name can't be recognized");
 }
}
