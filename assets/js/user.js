window.onload = function(){
    
    var btn_users = document.querySelector("#btn-users");
    
    var xhttp = new XMLHttpRequest();
    btn_users.onclick = function(){
        console.log('teste');
    };
    xhttp.open('GET', 'ajax/user.php', true);
    
    xhttp.send();
    
};
