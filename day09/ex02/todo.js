var ptext;
todolist = [];

//cookies
//make cookie then write cookie write and clear functions
function setCookie(listval) {
    delcookie();
    var d = new Date();
    d.setDate(d.getDate() + 1);
   for (var ac = 0; ac < todolist.length; ac++)
    {
        document.cookie += "todo=" + todolist[ac] + "%";
    }
    document.cookie += "; expires=" + d;
   // document.write ("Setting Cookies : " + "name=" + todolist[1]);
  // console.log(document.cookie);
}

function delcookie()
{
   // ReadCookie();
   var deldate = new Date();
   deldate.setMonth(deldate.getMonth() - 1);
 //   var delcook = "";
    document.cookie += 'test=; expires=Thu, 01 Jan 1970 00:00:00 GMT';
  //  document.cookie = delcook;
    //console.log(document.cookie);
  // ReadCookie();
   
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
        //loadarray into todolist[]
    
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
         //  alert("Key : " + name + " Value : " + value);
        }
    }


window.onload = function () {
    //create cookies and save them
    checkCookie();
    newtodobut = document.getElementById("newprompt");
    clrbutt = document.getElementById("clear");
    cookiebut = document.getElementById("cc");
    newtodobut.addEventListener("click", myPromptFunc, false);
    //delete
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
    //draw divs
    var ic = 0;
    while(ic < (todolist.length))
    {
        //alert(todolist.length);
        //alert(JSON.stringify(todolist));
        var tododiv = document.createElement("div");
        var todo = document.createElement("p");
        var t = document.createTextNode(todolist[ic]);
        tododiv.id = ic;
        tododiv.onclick = function (){itemDel(this.id)};
        todo.appendChild(t);
        tododiv.appendChild(todo);
        tododiv.style.backgroundColor = "pink";

        //clear div and redraw from todolist array
        document.getElementById("ft_list").appendChild(tododiv);
        ic++;
    }
    //setCookie();
    
  //  console.log(JSON.stringify(todolist));
   // disPlayAllCookies();
}

function clearDiv()
{
    var delNode = document.getElementById("ft_list");
    while (delNode.firstChild)
    {
        delNode.removeChild(delNode.firstChild);
    }
  //  console.log(document.cookie);
    //alert(document.cookie);
  //  divDraw();
}

function itemDel(key)
{
   // alert("We gettin trid of it" + key);
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