<html>
  <head>
<title>js</title>
<script src="js\jquery-2.2.4.min.js"></script>
</head>
<body>
        <p class="txt">WELCOME</p>
        <input type="text" id="n1"/>
        <input type="text" id="n2"/>
        <input type="text" id="n3"/>

        <input type="submit" value="submit" id="sub"/>
<script>
   $('#sub').click(function()
    {
       var n1=$('#n1').val();
       var n2=$('#n2').val();
       var n3=$('#n3').val();
alert(n1+n2+n3);
        //$('.txt').hide();
    });
</script>
</body>
</html>