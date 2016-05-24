<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>{$title}</title>
{$head}
</head>
<body id="page5">
<div id="main">
  <!-- header -->
  <div id="header">
    {$menu}
    <div class="logo"><a href="#"><img src="/files/images/logo.gif" alt="" /></a></div>
  </div>
  <!-- content -->
  <div id="content">
    <div class="indent1">
      <h2>Entre em Contato</h2>
      <p>You are supposed to place some contact infromation on this page. 
        You may place a map here with some instructions on how to get 
        to your office or just a contact form. Note that the contact
        form below is not working.</p>
      <form id="contacts-form" action="/contato/gravar">
        <fieldset>
          <div class="field">
            <label>Your Name:</label>
            <input type="text" value=""/>
          </div>
          <div class="field">
            <label>Your E-mail:</label>
            <input type="text" value=""/>
          </div>
          <div class="field">
            <label>Your Website:</label>
            <input type="text" value=""/>
          </div>
          <div class="field">
            <label>Your Message:</label>
            <textarea cols="1" rows="1"></textarea>
          </div>          
          <div class="alignright">
            <input type="submit" name="btn_enviar" id="btn_enviar"/>
          </div>
          
        </fieldset>
      </form>
    </div>
  </div>
  <!-- footer -->
  {$rodape}
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
