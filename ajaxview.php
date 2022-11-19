<html>
<head>
</head>
<body>
    <form>
        <input type="text" id="txt" value="sample">
        <input type="submit" name="sub"  id="sub" value="submit">
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script  type="text/javascript">
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    $('#sub').click(function()
    {
    var txt=$('#txt').val();
   // alert(txt);
    $.ajax({
        type:post,
        url:'ajaxurl.php',
        cache:false,
        success:function(data)
        {
alert("hi");
        },
    error:function(error)
    {
        console.log(error);
    }
    });
    });
    </script>
</body>
</html>