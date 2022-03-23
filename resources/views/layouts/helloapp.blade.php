<html>
<head>
  <title>@yield('title')</title>
  <style>
    body {font-size: 16pt; color: #999; margin: 5px;}
    h1 {font-size: 50pt; text-align: right; color: #f6f6f6; margin: -20px 0 -30px 0; letter-spacing: -4pt}
    ul {font-size: 12pt;}
    th {background-color: #999; color: #fff; padding: 5px 10px;}
    td {border: solid 1px #aaa; color: #999; padding: 5px 10px;}
    hr {margin: 25px 100px; border-top: 1px dashed #ddd;}
    .menutitle {font-size: 14pt; font-weight: bold; margin: 0;}
    .content {margin: 10px;}
    .footer {text-align: right; font-size: 10pt; margin: 10px; border-bottom: 1px solid #ccc; color: #ccc;}
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  @section('menubar')
  <h2 class="menutitle">※メニュー</h2>
  <ul>
    <li>@show</li>
  </ul>
  <hr size="1">
  <div class="content">
    @yield('content')
  </div>
  <div class="footer">
    @yield('footer')
  </div>
</body>
</html>