


function validoniMeRegex(){
    
   
    var emaili = document.getElementById('em').value;
    var passwordi = document.getElementById('psw').value;
 

    var regexEMAILI = /^[a-zA-Z][a-zA-Z0-9_.]+@[a-zA-Z0-9-]+\.(com|net)$/; //email duhet te startoj me shkronje dhe ka @ dhe ends.com.net
    var regexPASSWORD = /^[A-Z][a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]{6,}$/ // min. 7 karaktere, karakteri i pare ne upper case dhe te ket 1num 1specchar
   


    if(regexEMAILI.test(emaili)){
        console.log("Email is acceptable")
    }
    else{
        alert("Email is unacceptable!!!")
    }
    if(regexPASSWORD.test(passwordi)){
        console.log("Password is acceptable")
    }
    else{
        alert("Password is unacceptable!!!")
    }

    console.log(emaili);
    console.log(passwordi);

}
