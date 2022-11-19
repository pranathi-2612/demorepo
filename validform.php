<?php
include('validaction.php')
?><html>
    <head>
        <title>
            Form validation
        </title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
       <tr> <td>Name <input type="text" name="name">
       <?php if($nameErr!=1)
        {
            echo $nameErr;
        }
        ?>
       </td> </tr>
        <tr><td>
        Address <textarea name="address"></textarea>
        <?php if($addrErr!=1)
        {
            echo $addrErr;
        }
        ?>
        </td>
        </tr>
        <tr>
            <td>
        Phone <input type="text" name="phone">
        <?php if($phErr!=1)
        {
            echo $phErr;
        }
        ?>
        </td>
        </tr>
        <tr>
            <td>
        Email <input type="email" name="email">
    </td>
    </tr>
    <tr><td>
        Password <input type="password" name="password">
        <?php if($passErr!=1)
        {
            echo $passErr;
        }
        ?>
        </td>
        </tr>
        <tr><td>
        <input type="submit" name="sub">
    </td>
    </tr>
    </table>  
       </form>
    </body>
    </html>