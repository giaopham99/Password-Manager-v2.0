var $ = function(id){
    return document.getElementById(id);
};

var validateForm = function(){
    var first = $("first_name").value;
    var last = $("last_name").value;
    var email = $("email").value;
    var username = $("username").value;
    var password = $("password").value;
    var confirm = $("confirm").value;

    var msgFirst = "";
    var msgLast = "";
    var msgEmail = "";
    var msgUser = "";
    var msgPass = "";
    var msgConfirm = "";

    if (!/^[a-zA-Z]+$/.test(first))
        msgFirst = "First name must be all letters";
    if (!/^$|^[a-zA-Z]+$/.test(last))
        msgLast = "Last name must be all letters";
    if (!/^\S+@\S+\.\S+(\.\S)*$/.test(email))
        msgEmail = "You have entered an Invalid Email Address";
    if (username ==="" ||!/^[a-zA-Z0-9]+$/.test(username))
        msgUser = "First name must be all letters";
    if(password !== confirm)
        msgConfirm = "Password must match";
    
    $("msgFirst").firstChild.nodeValue = msgFirst;
    $("msgLast").firstChild.nodeValue = msgLast;
    $("msgEmail").firstChild.nodeValue = msgEmail;
    $("msgUser").firstChild.nodeValue = msgUser;
    $("msgPass").firstChild.nodeValue = msgPass;
    $("msgConfirm").firstChild.nodeValue = msgConfirm;

    if(msgFirst != "" || msgLast != "" || msgEmail != "" || msgUser != "" || msgPass != "" || msgConfirm != "")
        return false;
};
