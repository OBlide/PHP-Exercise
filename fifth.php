<?php include "menu.php"; ?>

<h1>Post example</h1>

<form class="" action="fifth.php" method="post">
    <label for="">Write two numbers</label><br>
    <input type="number" name="a" value=""><br>
    <input type="number" name="b" value=""><br>
    <input type="submit" name="btn" value="Sum"><br>
    </form>

<?php 
    if(isset($_POST['btn'])){
    $result=$_POST['a'] + $_POST['b'];
    echo 'the sum is '.$result;
}
?>

<?php include "footer.php"; ?>