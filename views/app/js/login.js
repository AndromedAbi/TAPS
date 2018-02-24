function runScriptLogin(event){
    // si la tecla presionada es igual al número ASCI de la tecla ENTER
    if(event.keyCode == 13){
      goLogin();
    }
  }
function goLogin()
{
    var connect, form , response, result;
    form = 'variable=contenido'
    connect = window.XMLHttpResquest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    connect.onreadystatechange = function()
    {
      if(connect.readyState == 4 && connect.status == 200)
      {

      }
      else if (connect.readyState !=4)
      {
        
      }
    }
    connect.open('POST','ajax.php?mode=login',true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send(form);
}
