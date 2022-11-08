<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>layout</title>
    <style media="screen">
      .header{
        margin:-8 -8px 0px;
        background-image:linear-gradient(145deg,#7379ff,#b524ef);
        color:white;
        text-align:center;
        padding:10px;
      }
      .container{width:100%;float:left;}
      .left{width:15%;
        float:left;}
      .body{width:65%;
        float:left;
        background-color:pink;
        padding:5px}
        .right{width:15%;
          float:left;}
        .footer{
          margin:-8px;
          clear:both;
          background:linear-gradient(145deg,#7379ff,#b524ef);
          color:white;
          text-align:center;
          padding:10px
        }
        ul.pg{
       padding:8px 16px;
       list-style:none;
       background-color:#eee;
     }
     ul.pg li{display:inline;}
     ul.pg li+li:before{
       padding:8px;
       color:black;
       content:"/\00a0";
     }
     ul.pg li a{color:green;}
    </style>
  </head>
  <body>
    <div class="header">
       <h2>technoapps</h2>
    </div>
    <div class="container">
      <div class="left">
        left page
      </div>
      <div class="body">
        <h1 style="text-align:center">body page</h1>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
        <p>page content goes heree</p>
      </div>
      <div class="right">
        <p>right page</p>
        <p>right page</p>
      </div>
      <div class="footer">
        <h1>footer</h1>
        <ul class="pg">
      <li><a href="#">java</a></li>
      <li><a href="#">php</a></li>
      <li><a href="#">oracle</a></li>
      <li>angularjs</li>
    </ul>
      </div>

    </div>
  </body>
</html>
