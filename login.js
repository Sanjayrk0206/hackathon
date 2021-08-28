function signup(x){
    var login = document.getElementById('Login');
    var signup = document.getElementById('Signup');
    if(x=="login"){
        login.style.display="block";
        signup.style.display="none";
    }else{
        login.style.display="none";
        signup.style.display="block";
    }
}