<html>
<input type="radio" id="m" value="male">Male
<input type="radio" id="f" value="female">FeMale
<input type="submit" id="sub" onClick="check()">
<script type="text/javascript">
    function check()
    {
        if((document.getElementById("m").checked==false)&&(document.getElementById("f").checked==false))     
           {
            alert("please select gender");
        }
        else
        {
            alert(document.getElementById('gender').value);
        }
    }
    </script>
    </html>