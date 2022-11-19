<html>
<body>
<table>
<tr>
<td>Name</td>
<td><input type="text" name="name" id="n" onSubmit="formjs()"></td>
</tr>
<tr><td>Address</td>
<td><textarea name="txt"name="address" id="txt"></textarea></td>
</tr>
<tr><td>phone</td>
<td><input type="text" name="phone" id="ph"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="rd" value="male" id="r"/>Male
<input type="radio" name="rd" value="female" id="d"/>Female</td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" id="email"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="passwd" id="passwd"></td>
</tr>
<tr>
<td>
<input type="submit" value="submit" onClick="formsub()"/>
</td>
</tr>
</table>
</body>
</html>
<script>
    function formsub()
    {
       // var gender=document.querySelector("input[type='radio'][name=rd]:checked").value;
        if((document.getElementById('r').checked==false)&&(document.getElementById('d').checked==false))
        {
            alert("please select gender");
         //   alert(document.getElementById('r'));
        }
        alert(document.querySelector("input[type='radio'][name=rd]:checked").value);
       // alert(document.getElementById('r'));
    }
</script>
