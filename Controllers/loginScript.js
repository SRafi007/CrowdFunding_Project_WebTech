"use strict"
function validateForm()
{
        let name=document.getElementById('username');
        let pass=document.getElementById('password');

        if(name.value == null || name.value == ""){//IF EMPTY SUBMIT
            
            alert('Please fill name section');
            return false;
        }
        else{
            //return true;
            //window.location.href="../Controllers/loginCheck.php";
        }
        if(pass.value == null || pass.value==""){//IF EMPTY SUBMIT
        	alert('Please fill password section');
            //document.getElementById('h1').innerHTML='please fill this section';
            return false;

        }
        else{
            //document.getElementById('h1').innerHTML='';
            //return true;
             window.location.href="../Controllers/loginCheck.php";
        }
               /* if( document.getElementById('username').value == "" ) {
                alert( "Please provide your name!" );
                document.loginForm.username.focus() ;
                return false;
             }*/
    
}