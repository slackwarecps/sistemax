function showNotificacao(text, timeout, layout, type, redirect) {
  timeout = timeout || 2000;
  layout = layout || 'center';
  redirect = redirect || null;

  var noty_id = noty({
    text: text,
    layout: layout,
    theme: 'defaultTheme',
    type: type,
    dismissQueue: true, // If you want to use queue feature set this true
    template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
    animation: {
      open: {
        height: 'toggle'
      },
      close: {
        height: 'toggle'
      },
      easing: 'swing',
      speed: 500 // opening & closing animation speed
    },
    timeout: timeout, // delay for closing event. Set false for sticky notifications
    force: false, // adds notification to the beginning of queue when set to true
    modal: false,
    closeWith: ['button'], // ['click', 'button', 'hover']
    callback: {
      onClose: function() {
        if (redirect != null)
          window.location = redirect;
      }
    }
  })
}

function showConfirmNotificacao(text, layout, callback) {
  var noty_id = noty({
    text: text,
    layout: layout,
    theme: 'defaultTheme',
    type: 'confirm',
    template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
    animation: {
      open: {
        height: 'toggle'
      },
      close: {
        height: 'toggle'
      },
      easing: 'swing',
      speed: 500 // opening & closing animation speed
    },
    modal: true,
    buttons: [
      {
        addClass: 'btn btn-primary',
        text: 'Confirmar',
        onClick: function($noty) {
          eval(callback + "()");
          $noty.close();
        }
      },
      {
        addClass: 'btn btn-danger',
        text: 'Cancelar',
        onClick: function($noty) {
          $noty.close();
        }
      }
    ]
  });
}

function openDialog(title, message, width, height) {
  $('#dialog-modal').attr('title', title);
  $('#dialog-modal p').html(message);
  $('#dialog-modal').dialog({
    resizable: false,
    width: width,
    height: height,
    modal: true,
    close: function() {
      $('#dialog-modal p').html('');
    }
  });
}


function valida_cnpj(cnpj) {
  var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
  digitos_iguais = 1;
  if (cnpj.length != 14)
    return false;
  for (i = 0; i < cnpj.length - 1; i++)
    if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
      digitos_iguais = 0;
      break;
    }
  if (!digitos_iguais) {
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0, tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
        pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
      return false;
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
        pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
      return false;
    return true;
  }
  else
    return false;
}

//Retorna a data String de Hoje pelo JS
//br -> data brasil en -> data Mysql
// ex: agora('br')
function agora(formato_data) {
  var d = new Date();
  if (formato_data === 'br') {
    console.log('Mês: ' + d.getMonth() + 1);
    return d.getDate() + "/" + (d.getMonth() + 1) + "/" + d.getFullYear();

  }
  else
    return d.getFullYear() + "/" + d.getMonth() + "/" + d.getDate();
}


function checkTime(i)
{
  if (i < 10)
  {
    i = "0" + i;
  }
  return i;
}

function agora_hora() {
  var dt = new Date();
  var h = dt.getHours();
  var m = dt.getMinutes();
  var s = dt.getMinutes();
  h = checkTime(h);
  m = checkTime(m);
  s = checkTime(s);
  var currentTime = h + ":" + m + ":" + s;
  return currentTime;
}

//Retorna a Data de Hoje no formato Brasileiro
function getToday_br() {
  var d = new Date();

  var month = d.getMonth() + 1;
  var day = d.getDate();

  //    var output = d.getFullYear() + '/' +
  //        (month<10 ? '0' : '') + month + '/' +
  //        (day<10 ? '0' : '') + day;
  var output = (day < 10 ? '0' : '') + day + '/' +
          (month < 10 ? '0' : '') + month + '/' +
          d.getFullYear();
  return output;
}

//Retorna o primeiro dia do mes corrente geralmente usado para ser colocado 
//nas telas de parametros dos relatorios
function getFirstDayMonth_br() {
  var d = new Date();

  var month = d.getMonth() + 1;
  var day = d.getDate();
  var output = '01/' + (month < 10 ? '0' : '') + month + '/' + d.getFullYear();
  return output;
}


function rgb2hex(rgb) {
  var hexDigits = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f"];
  rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
  function hex(x) {
    return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
  }
  var hexResult = hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
  return "#" + hexResult.toUpperCase();
}

var delay = (function() {
  var timer = 0;
  return function(callback, ms) {
    clearTimeout(timer);
    timer = setTimeout(callback, ms);
  };
})();

function validateEmail(email) {
  er = /^[a-zA-Z0-9][a-zA-Z0-9\.\-_-a]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
  if (er.exec(email))
    return true;
  else
    return false;
}

function showMessage(errorText, time, type, redirect) {

  if (time == null)
    time = 4000;
  if (type == null)
    type = 'error';
  redirect = redirect || null;

  $().toastmessage('showToast', {
    text: errorText,
    sticky: false,
    stayTime: time,
    position: 'middle-center',
    type: type,
    close: function() {
      if (redirect != null)
        window.location = redirect
    }
  });
}
