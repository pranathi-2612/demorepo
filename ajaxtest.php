<html>
    <head><script src="js\jquery-2.2.4.min.js"></script>
</head>
    <body>
<table border=1>
        <thead id="th" style="display:none"><th>Name</th>
    <th>Age</th>
    <th>place</th></thead>
<tbody id="tb">
</tbody>
</table>
 <input type="button" value="Submit" id="btn">  

<script type="text/javascript" language="javascript">  
  
$("#btn").on("click",function(){  
      
    $.ajax({  
              
    type:"GET",  
    url:"demo.php",  
    success:function(data){  
   //debugger;
   $('#th').show();
   $.each(data,function(key,value)
   {
   $('#tb').append('<tr><td>'+value['name']+'</td><td>'+value['age']+'</td><td>'+value['place']+'</td></tr>');
   });        
    }  
      
    });  
      
});  
  
</script>  
</body>
</html> 

<!-- <html>
    <head>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script> 
    </head>
<body>
<form>
    <table>
        <thead id="th" style="display:none"><th>Name</th>
    <th>Age</th>
    <th>place</th></thead>
<tbody id="tb">
</tbody>
</table>
<input type="submit" value="submit" id="txt">
</form>
<script type="text/javascript" language="javascript">  
   $("#txt").on('click',function(){  
      $.ajax({  
         type:"GET",  
         url:"demo.php",  
        
         success: function(data){ 
alert(data);
            $('#th').show();
           
        //   alert(data);
        //    $.each(data,function(key,value)
        //    {
        //     $('#th').show();
        //     $('#txt').hide();
        //     $('#tb').append('<tr><td>'+value['name']+'</td><td>'+value['age']+'</td><td>'+value['place']+'</td></tr>');
        //    });
         }, 
      });  
   });   
</script> 

</body>
</html> -->