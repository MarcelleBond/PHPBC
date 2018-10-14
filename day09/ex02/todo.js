var ptext;
todolist = [];


function setCookie(listval) {
    delcookie();
    var d = new Date();
    d.setDate(d.getDate() + 1);
   for (var ac = 0; ac < todolist.length; ac++)
    {
        document.cookie += "todo=" + todolist[ac] + "%";
    }
    document.cookie += "; expires=" + d;
}

function delcookie()
{
   var deldate = new Date();
   deldate.setMonth(deldate.getMonth() - 1);
    document.cookie += 'test=; expires=Thu, 01 Jan 1970 00:00:00 GMT';
   
}


function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split('%');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var tdcook = getCookie("todo");
    if (tdcook != "") {
    
        var ca = document.cookie.split('%');
        for(var i=0; i<ca.length - 1; i++){
            name = ca[i].split('=')[0];
            value = ca[i].split('=')[1];
            todolist.push(value);
        }
        divDraw();


    }
}


function ReadCookie()
    {
        var allcookies = document.cookie;
        cookiearray = allcookies.split('%');
        
        for(var i=0; i<cookiearray.length; i++){
            name = cookiearray[i].split('=')[0];
            value = cookiearray[i].split('=')[1];
        }
    }


window.onload = function () {
    checkCookie();
    newtodobut = document.getElementById("newprompt");
    clrbutt = document.getElementById("clear");
    cookiebut = document.getElementById("cc");
    newtodobut.addEventListener("click", myPromptFunc, false);

    clrbutt.addEventListener("click", clearDiv, false);
    cookiebut.addEventListener("click", setCookie, false);
    delc = document.getElementById("delc");
    delc.addEventListener("click", delcookie, false);
    delc = document.getElementById("rc");
    rc.addEventListener("click", ReadCookie, false);
    
}

function myPromptFunc() {
    ptext = prompt("Enter new task:");
    if (ptext == null || ptext == "") {
        txt = "User cancelled the prompt.";
    } else {
        todolist.unshift(ptext);
        setCookie(ptext);
    }
   
    divDraw();   
}

function divDraw()
{
    clearDiv();
    var ic = 0;
    while(ic < (todolist.length))
    {
        var tododiv = document.createElement("div");
        var todo = document.createElement("p");
        var t = document.createTextNode(todolist[ic]);
        tododiv.id = ic;
        tododiv.onclick = function (){itemDel(this.id)};
        todo.appendChild(t);
        tododiv.appendChild(todo);
        tododiv.style.backgroundColor = "pink";

        document.getElementById("ft_list").appendChild(tododiv);
        ic++;
    }
    
}

function clearDiv()
{
    var delNode = document.getElementById("ft_list");
    while (delNode.firstChild)
    {
        delNode.removeChild(delNode.firstChild);
    }
}

function itemDel(key)
{
    if (confirm('Delete task from list?')) {
        var delNode = document.getElementById(key);
        delNode.parentNode.removeChild(delNode);
        todolist.splice(key, 1);
        setCookie();
    }
    else
    {
        divDraw();
    }
}