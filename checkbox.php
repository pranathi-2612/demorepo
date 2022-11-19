<html>
    <form action="" method="POST">
        Red<input type="checkbox" name="check[]" value="Red">
        Blue<input type="checkbox" name="check[]" value="Blue">
        <input type="submit" name="sub" value="sub">
    </form>
    <?php 
    if(isset($_POST['sub']))
    {

        $ch=$_POST["check"];
        foreach($ch as $c)
{
    echo $c;

}
        
    }
    ?>