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
    var tdcook = document.cookie;
    if (tdcook && tdcook != "") {
    
        var ca = document.cookie.split('%');
        for(var i=0; i<ca.length - 1; i++){
            name = ca[i].split('=')[0];
            value = ca[i].split('=')[1];
            todolist.push(value);
            console.log(value);
        }
        console.log(document.cookie);
        divDraw();

    }
    else
        return;
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


var ft_list;

$(document).ready(function(){
    ft_list = $("#ft_list");
    $('#ft_list div').click(itemDel);
    newtodobut = $("#newprompt");
    newtodobut.click(myPromptFunc);
    
});

function myPromptFunc() {
    ptext = prompt("Enter new task:");
    if (ptext == null || ptext == "") {
        txt = "User cancelled the prompt.";
    } else {
        todolist.unshift(ptext);
        setCookie(ptext);
    }
    console.log(document.cookie);
    divDraw();   
}

function divDraw()
{
    clearDiv();
    var ic = 0;
    while(ic < (todolist.length - 1))
    {

        ft_list.append($("<div onClick=itemDel('"+ic+"') style='background-color:#92cd00'>" + todolist[ic] + '</div>'));
        ic++;
    }
}

function clearDiv()
{
    ft_list.empty();
}

function itemDel(key)
{
    if (confirm('Delete task from list?')) {
       this.remove;
       todolist.splice(key, 1);
       setCookie();
       divDraw();
    }
    else
    {
        return;
    }
}