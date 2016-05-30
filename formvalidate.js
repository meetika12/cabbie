
$(document).ready(function(){
    var name = document.Register.name;
    var email = document.Register.email;
    var username = document.Register.username;
    var address = document.Register.address;
    var password = document.Register.password;
    var contact = document.Register.contact;

    function validateRegister()
    {
        // if (name.value == "")
        // {
        //     window.alert("Please enter your name.");
        //     name.focus();
        //     return false;
        // }
        // if (username.value == "")
        // {
        //     window.alert("Please enter your name.");
        //     username.focus();
        //     return false;
        // }
        
        
        // if (email.value == "")
        // {
        //     window.alert("Please enter a valid e-mail address.");
        //     email.focus();
        //     return false;
        // }
        // if (email.value.indexOf("@", 0) < 0)
        // {
        //     window.alert("Please enter a valid e-mail address.");
        //     email.focus();
        //     return false;
        // }
        // if (email.value.indexOf(".", 0) < 0)
        // {
        //     window.alert("Please enter a valid e-mail address.");
        //     email.focus();
        //     return false;
        // }
    
        // if  (contact.value == "")
        // {
        //     window.alert("Please enter your Contact number.");
        //     contact.focus();
        //     return false;
        // }
        // if (address.value == "")
        // {
        //     window.alert("Please enter your name.");
        //     address.focus();
        //     return false;
        // }
        return true;
    }
    
    
    // magic function to validate password
    function checkPassword(pwd) {
        var regularExpression = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/;
        var valid = regularExpression.test(pwd);
       window.alert("Password must contain atleast 6 characters,with atleast one uppercase letter and one digit");// delete this line if it is working add an alert maybe
        return valid;
    }
    
    
    // on form submitted
    $('.validate').submit(function(){
        
        // check if both functions return true
        if (validateRegister() && checkPassword(password.value))
        {   
            alert("GO LIVE YOUR LIFE!! YOU ENTERED EVERYTHING CORRECTLY");
            return false; /// change false to true to allow submission
        }
        else 
        {
            alert("You can't even fill a form -_-");
            return false;
        }
    })    
    
});

