// var x = Number(window.prompt("Enter The Number")); 
// switch(x>0)
// { 
//     case false:
//         document.write('freezing');
//     break;
//     case true:
//         if(x<10)
//         document.write('cold');
//     break;
//     case true:
//       if(x>10 && x<20)
//         document.write('fine');
//     break;
// }
// for(i=0;i<x;i++)
// {
//     document.write("Sherrihan Mostafa");
// }
// for(i=1;i<=200;i++)
// {
//     if(i%2==0)
//     {
//       document.write(i+"       ");   
//     }
// }
var n =1;
// while(n!=3)
// {
//     if(n%5==0)
//     {
//         document.write(n+"<br>");
//     }
//     if(x==10)
//     {
//         continue;
//     }
//     n--;
// }
// n=1;
// do
// {
//     document.write(n+"<br>")
//     n=n*10;
// }
//  while(n<600);
var a,b,sum;
a=0; 
b=1;
sum=1;
res=0;
for(i=1;i<=1000;i++)
{
    document.write(sum+"<br>");
    res=res+sum;
    sum=a+b;
    a=b; 
    b=sum; 
}
document.write("the sum is"+res+"<br>");