<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  {$head}
  <body id="page5">
    <div id="main">
      <!-- header -->
      <div id="header_sistema">
        {$menu_sistema}       
      </div>  
      <div id="content">
        <div class="indent1">
          <h2>Novo Usuarios</h2>
          <form class="form_padrao" 
                name="frm_salvar" 
                id="frm_salvar" 
                action="salvar" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="IDUSER"  value="{$registro[0].IDUSER}"/>
            {if isset($IDUSER)}
            Edição do Usuario cód: {$registro[0].IDUSER}<br>
            {/if}
           
            <label for="USERNAME">USERNAME</label>
            <input type="text" name="USERNAME" id="USERNAME" value="{$registro[0].USERNAME}" required /><br>
            
            <label for="LOGIN">LOGIN</label>
            <input type="text" name="LOGIN" ID="LOGIN" value="{$registro[0].LOGIN}"/><br>
            
            <label for="PASSWORD">PASSWORD</label>
            <input type="password" name="PASSWORD" ID="PASSWORD" value="{$registro[0].PASSWORD}" size="60" /></br>
            
            <label for="EMAIL">EMAIL</label>
            <input type="text" name="EMAIL" ID="EMAIL" value="{$registro[0].EMAIL}" size="60" /></br>
            
            <label for="PRIVILEGED">PRIVILEGED</label>
            <input type="text" name="PRIVILEGED" value="{$registro[0].PRIVILEGED}" size="60" /></br>
            
            <label for="TYPEREC">TYPEREC</label>
            <input type="text" name="TYPEREC" value="{$registro[0].TYPEREC}" size="60" /></br>
            <label for="PROFILE">PROFILE</label>
            <input type="text" name="PROFILE" value="{$registro[0].PROFILE}" size="60" /></br>
            <label for="MYKEY">MYKEY</label>
            <input type="text" name="MYKEY" value="{$registro[0].MYKEY}" size="60" /></br>            
          </form>
            <div class="fleft">
              <button id="btn_usuario_add" onclick="salvar('{$action}')">Salvar</button>
 <button id="btn_usuario_add" onclick="history.go(-1)">Voltar</button>     
 <BR/>
         
              
            </div>
        </div>
      </div>  
      {$rodape} 
    </div>
  </body>
</html>