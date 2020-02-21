# pwa-adianti-template7.1
PWA para adianti template 7.1

# Para o PWA funcionar corretamente, o sistema precisa estar na raiz de um dominio ou subdominio com o protocolo SSL ativado ex: https://www.dominio.com.br ou https://subdominio.dominio.com.br

# Instruções

Coloque o manifest e o service work e informações de meta na sua tag head da pagina login.html e layoult.html

```
<link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#367fa9">
<meta name="apple-mobile-web-app-capable" content="yes">
<script src="sw-register.js"></script>
```
Gere os icones para android pelo link:
https://app-manifest.firebaseapp.com/

Gere os icones para ios pelo link:
https://iconifier.net/

Os icones do android são apontados pelo arquivo de manifest.

Os icones para ios sao colocados na head do arquivo login.html e layoult.html
```
<link rel="shortcut icon" href="app/templates/theme3/icons/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="app/templates/theme3/icons/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="app/templates/theme3/icons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="app/templates/theme3/icons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="app/templates/theme3/icons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="app/templates/theme3/icons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="app/templates/theme3/icons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="app/templates/theme3/icons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="app/templates/theme3/icons/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="app/templates/theme3/icons/apple-touch-icon-180x180.png" />
```
Para o splash funcionar corretamente no ios, sera preciso gerar as imagens abaixo e inserir as mesmas na tag head do arquivo login.html e layoult.html

```
<link href="app/templates/theme3/icons/iphone5_splash.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="app/templates/theme3/icons/iphone6_splash.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="app/templates/theme3/icons/iphoneplus_splash.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="app/templates/theme3/icons/iphonex_splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="app/templates/theme3/icons/iphonexr_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="app/templates/theme3/icons/iphonexsmax_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="app/templates/theme3/icons/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="app/templates/theme3/icons/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="app/templates/theme3/icons/ipadpro3_splash.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="app/templates/theme3/icons/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
```
