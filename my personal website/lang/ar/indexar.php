<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <title>Esmail EL BoB [Personal-Beta Website] (V 2.5)</title>
 <meta charset = "UTF-8">
 <link rel="stylesheet" type="text/css" href="stylear.css">
 </head>

 <header>
<ul>
  <li><a href="../../index">English Version</a></li>
</ul>
</header>

<body>

  <div class="container-fluid">

  <div class="row">

  <div id="logo"><img src="../../img/logo.png"></div>

  <div id="hello">أهلاً</div>

  <div id="my-name">أنا إسماعيل محمد</div>


  <div id="noob"></div>


  <script type="text/javascript">    
   var myArray = [
     "انا مبرمج محترف",
     "أفضل مبرمج هتشوفة فى حياتك هههه",
     "علشان كدا متوقليش يا بيبى <br> إيد شيران-",
     "كىكى انت بتحبينى ؟ <br> دريك-"
    ];

   var randomItem = myArray[Math.floor(Math.random()*myArray.length)];

   document.getElementById('noob').innerHTML = randomItem;
  </script>


  </div>

  </div>

    <form id="button1place">
        <input id="button" type="button" value="إيميلاتى" onclick="window.location.href='https://pastebin.com/raw/eA3Vv6sw'" />
    </form> 

</body>

</html>
