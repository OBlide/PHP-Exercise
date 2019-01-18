<?php include "menu.php"; ?>

<h1>Forms</h1>

<h2>POST-method</h2>

    <form class="" action="test1.php" method="post">
    <label for="">Firstname</label><br>
    <input type="text" id="fn" name="fname" value=""><br>
    <input for="">Lastname</label><br>
    <input type="text" id="ln" name="lname" value=""><br>
    <input type="submit" name="" value="Send"><br>
    </form>

<h2>GET-method</h2>

    <form class="" action="test1.php" method="get">
    <label for="">Firstname</label><br>
    <input type="text" id="fn" name="fname" value=""><br>
    <input for="">Lastname</label><br>
    <input type="text" id="ln" name="lname" value=""><br>
    <input type="submit" name="" value="Send"><br>
    </form>



<?php include "footer.php"; ?>