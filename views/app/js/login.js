function runScriptLogin(event)
{
    // si la tecla presionada es igual al número ASCI de la tecla ENTER
    if(event.keyCode == 13)
    {
      goLogin();   
    }
 }
function goLogin()
{
    var connect, form , response, result , email , pass , session ;
    email = __('email_login').value;
    pass = __('pass_login').value;
    session = __('sesion_login').checked ? true : false;
    form = 'email='+ email + '&pass=' + pass + '&sesion=' + session;       
    
    connect = GetXmlHttpObject();

    connect.onreadystatechange = function()
    {
        if(connect.readyState == 4 && connect.status == 200)
        {
            if(connect.responseText == 1)
            {
              result = '<div class="alert alert-dismissible alert-succes">';
              result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
              result +='<h4 class="alert-heading">Bienvedios a Taps Diseños </h4>';
              result +='<p class="mb-0">Ha Iniciado Conrrectamente </p></div>';             
              __('_AJAX_LOGIN_').innerHTML = result;
              location.reload();
            }
            else
            {
              __('_AJAX_LOGIN_').innerHTML = connect.responseText;
            }
        }
        else if (connect.readyState != 4)
        {
              result = '<div class="alert alert-dismissible alert-warning">';
              result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
              result +='<h4 class="alert-heading">Bienvedios a Taps Diseños </h4>';
              result +='<p class="mb-0">Ha Iniciado Conrrectamente </p></div>';             
          __('_AJAX_LOGIN_').innerHTML = result;
        }
     }
    connect.open('POST','ajax.php?mode=login',true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send(form);
}
//Cree esta funcion por que la del video no me sirve :) 24-02-2018
function GetXmlHttpObject()
{ 
    var objXMLHttp=null;
    if (window.XMLHttpRequest)
    {
        objXMLHttp=new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
        objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    return objXMLHttp;
}


