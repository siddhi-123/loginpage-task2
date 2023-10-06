var is_visible = false;

function see(){
    var input = document.getElementById("password");
    var see = document.getElementById("see");

    if(is_visible){
        input.type = 'password';
        is_visible = false;
        see.style.color = '#ffffff';
    }else{
        input.type = 'text';
        is_visible = true;
        see.style.color = "gray";
    }
}

function see2(){
    var input = document.getElementById("password2");
    var see = document.getElementById("see2");

    if(is_visible){
        input.type = 'password';
        is_visible = false;
        see.style.color = '#ffffff';
    }else{
        input.type = 'text';
        is_visible = true;
        see.style.color = "gray";
    }
}

function show(){
    var show = document.getElementById("pass");

    if(is_visible){
        is_visible = false;
        show.style.display = 'block';
    }else{
        is_visible = true;
        show.style.display = "none";
    }
}
// function show(){
//     document.getElementById('pass').style.display = "flex";
//     document.getElementById('password').style.display = "none";
// }
function check(){
    var input = document.getElementById("password").value;

    input = input.trim();
    document.getElementById("password").value = input;
    document.getElementById("count").innerText = "Length:" + input.length;

    if(input.length >=5){
        document.getElementById("check0").style.color = "green";
    }else{
        document.getElementById("check0").style.color = "red";
    }

    if(input.length <=10){
        document.getElementById("check1").style.color = "green";
    }else{
        document.getElementById("check1").style.color = "red";
    }

    if(input.match(/[0-9]/i)){
        document.getElementById("check2").style.color = "green";
    }else{
        document.getElementById("check2").style.color = "red";
    }

    if(input.match(/[A-Za-z0-9-'']/i)){
        document.getElementById("check3").style.color = "green";
    }else{
        document.getElementById("check3").style.color = "red";
    }

}