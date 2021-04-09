function evl()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('pass1').value;
    var repassword = document.getElementById('pass2').value;
    var email = document.getElementById('email1').value;
    var reemail = document.getElementById('email2').value;
    var telephone = document.getElementById('tel').value;
    var check=0;
     if(username == "" || password=="" ||repassword=="" || email=="" || reemail=="" || telephone=="")
     {
            alert("you must enter Al required data");
            check=1;
     }
     if(pass1 != pass2)
     {
          alert("passwords doesn't match");
          check=2;
     }
     if(email != email2)
     {
        alert("emails doesn't match");
        check=3;
     }



     if (check==0)
     {
         alert("all rules satisfied 😎");
     }

}