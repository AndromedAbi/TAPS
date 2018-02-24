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
    var connect, form , response, result;
    form = 'variable=contenido';   
   
    connect = window.XMLHttpResquest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');    

    connect.onreadystatechange = function()
    {
        if(connect.readyState == 4 && connect.status == 200)
        {
            if(connect.responseText == 1)
            {
              result = '<div class="alert alert-dismissible alert-warning">';
              result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
              result +='<h4 class="alert-heading">Bienvedios a Taps Diseños </h4>';
              result +='<p class="mb-0">Ha Iniciado Conrrectamente';            
              result +='<a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>';
              result +='</div>';
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
          result +='<h4 class="alert-heading">Procesando...</h4>';
          result +='<p class="mb-0"> Estamos Iniciando Session Por favor espere...';            
          result +='<a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>';
          result +='</div>';        
          __('_AJAX_LOGIN_').innerHTML = result;
        }
     }
    connect.open('POST','ajax.php?mode=login',true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send(form);
}
