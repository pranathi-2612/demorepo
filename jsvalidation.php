<html>
<head>
    <title>Table Align Demo</title>

    <script type="text/javascript">

    function ValidateForm()
    {
        var nameBox = document.getElementById ("name");

        if (nameBox.value.length == 0)
        {
            alert ("Enter name.");
            return false;
        }

        // At most four words, separated with a single white, no punctuation
        var re = /^\w+(?:\s\w+){0,3}$/;

        if (!nameBox.value.match (re))
        {
            alert ("Invalid name.");
            return false;
        }

        var pwBox = document.getElementById ("password");

        if (pwBox.value.length < 6)
        {
            alert ("Password is too short.");
            return false;
        }

        if (pwBox.value.length > 16)
        {
            alert ("Password is too long.");
            return false;
        }

        // 6-16 non-white character
        re = /^\S{6,16}$/;

        if (!pwBox.value.match (re))
        {
            alert ("Invalid password.");
            return false;
        }

        // Telephone may be empty or only 7-16 digits
        re = /^\d{7,16}$/;

        var telBox = document.getElementById ("telephone");

        if (telBox.value.length > 0)
        {
            if (!telBox.value.match (re))
            {
                alert ("Invalid telephone number.");
                return false;
            }
        }

        // regular expression pattern of email:
        // valid patterns:
        // name@organ.com
        // name.another@organ-ex.com
        // name-another@organ-ex.com
        // name+another@organ-ex.com
        // name+another@organ-ex.another-organ.com
        re = /^\w+([\.\-\+]\w+)*@\w+(\-\w+)*\.\w+(\-\w+)*(\.\w+(\-\w+)*)*$/;

        var emailBox = document.getElementById ("email");

        if (!emailBox.value.match (re))
        {
            alert ("Invalid email address: " + emailBox.value);
            return false;
        }

        var maleBox = document.getElementById ("male");
        var femaleBox = document.getElementById ("female");
     
        if(!maleBox.checked && !femaleBox.checked)
        {
           
            alert ("Specify gender");
            return false;
        }
        return true;
    }

    </script>

</head>
<body>
    <form method="get" action="TableAlign.htm">
    <table style="width: 400px;">
        <tr>
            <td style="width: 35%;">
                Name:
            </td>
            <td style="width: 65%;">
                <input id="name" type="text" name="name" maxlength="52" />
            </td>
        </tr>
        <tr>
            <td style="width: 35%;">
                Password:
            </td>
            <td style="width: 65%;">
                <input id="password" type="password" name="password" maxlength="16" />
            </td>
        </tr>
        <tr>
            <td style="width: 35%;">
                Email:
            </td>
            <td style="width: 65%;">
                <input id="email" type="text" name="email" maxlength="2048" />
            </td>
        </tr>
        <tr>
            <td style="width: 35%;">
                Telephone:
            </td>
            <td style="width: 65%;">
                <input id="telephone" type="text" name="email" maxlength="16" />
            </td>
        </tr>
        <tr>
            <td style="width: 35%;">
                Gender:
            </td>
            <td style="width: 65%;">
                <input id="male" type="radio" value="Male" name="gender" />Male   
                <input id="female" type="radio" value="Female" name="gender" />Female
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 100%;">
                <input type="submit" value="Submit" onclick="return ValidateForm()" />
            </td>
        </tr>
    </table>
    </form>
</body>
</html>