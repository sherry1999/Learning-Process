function bg()
{
        document.getElementById("color").style.backgroundColor="yellow"; 
}
var x=4+10+"Mohamed"; 
console.log(typeof(x));

console.log(x>15?true:false);
var y=window.prompt("Please Enter The Number"); 
// document.getElementById("bgc").style.backgroundColor=y; 
if(y>0)
{
    document.write("Positive Number");
}
else if (y==0)
{
    document.write("You Entered zero");

}
else if (y<0)
{
    document.write("Negative Number");
 
}
else
{
    document.write("You Must Enter A Number..")
}
 