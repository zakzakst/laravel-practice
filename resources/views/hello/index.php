<html>
<head>
  <title>Hello/Index</title>
  <style>
  body {
    font-size: 16pt;
    color: #999;
  }
  h1 {
    font-size: 100pt;
    text-align: right;
    color: #eee;
    margin: -40px 0 -50px 0;
  }
  </style>
</head>
<body>
  <h1>Index</h1>
  <p><?php echo $msg; ?></p>
  <p><?php echo date("Y年n月j日"); ?></p>
  <p>ID=<?php echo $id; ?></p>
</body>
</html>