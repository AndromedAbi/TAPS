function runScriptReg(event)
{
    // si la tecla presionada es igual al número ASCI de la tecla ENTER
    if(event.keyCode == 13)
    {
      goReg();   
    }
 }
function goReg()
{
    var connect, form , response, result , email , pass , pass2 , tyc , user;
    email = __('email_reg').value;
    user = __('user_reg').value;
    pass = __('clave_reg').value;
    pass2 = __('clave_reg1').value;   
    tyc = __('tyc_reg').checked ?  true : false;
    
    if(true == tyc)
    {
        if(email !='' && pass != '' && pass2 !='' && user !='')
        {
            if(pass == pass2)
            {
                form = 'email='+ email + '&pass=' + pass;   
                connect = GetXmlHttpObject();
            
                connect.onreadystatechange = function()
                {
                    if(connect.readyState == 4 && connect.status == 200)
                    {
                        if(connect.responseText == 1)
                        {
                          result = '<div class="alert alert-dismissible alert-succes">';
                          result +='<h4>Registro Completado!</h4>';
                          result +='<p><strong>Bienvedios a Taps Diseños</strong></p>';
                          result +='</div>';             
                          __('_AJAX_REG_').innerHTML = result;
                          location.reload();
                        }
                        else
                        {
                          __('_AJAX_REG_').innerHTML = connect.responseText;
                        }
                    }
                    else if (connect.readyState != 4)
                    {
                          result = '<div class="alert alert-dismissible alert-warning">';
                          result +='<button type="button" class="close" data-dismiss="alert">x</button>';
                          result +='<h4> Procesando...</h4>';
                          result +='<p><strong>Procesando tu Registro... </strong></p></div>';             
                      __('_AJAX_REG_').innerHTML = result;
                    }
                 }
                connect.open('POST','ajax.php?mode=reg',true);
                connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                connect.send(form);
            }
            else
            {
                result = '<div class="alert alert-dismissible alert-warning">';
                result +='<button type="button" class="close" data-dismiss="alert">x</button>';
                result +='<h4> Error</h4>';
                result +='<p><strong>Las contraseñas no coinciden.</strong></p></div>';             
            __('_AJAX_REG_').innerHTML = result;
            }
        }
        else
        {
            result = '<div class="alert alert-dismissible alert-warning">';
            result +='<button type="button" class="close" data-dismiss="alert">x</button>';
            result +='<h4> Error</h4>';
            result +='<p><strong>Todo los campos deben estar llenos.</strong></p></div>';             
        __('_AJAX_REG_').innerHTML = result;
        }

    }
    else
    {
        result = '<div class="alert alert-dismissible alert-warning">';
        result +='<button type="button" class="close" data-dismiss="alert">x</button>';
        result +='<h4> Error</h4>';
        result +='<p><strong>Los Terminos y condiciones deben ser Aceptados.</strong></p></div>';             
    __('_AJAX_REG_').innerHTML = result;
    } 
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

