<html>
<head>
<meta charset=“UTF-8”>
<title>Title of the document</title>
</head>
<div style="border: 5px solid #000000">
<div style="background-color: #DC143C">
<div style="font-size:40px">

<body>
    <form>
        <strong>Tip Calculator</strong>
        <br><br>
        Bill Subtotal: $
        <input type="text" name="number" value="<?php echo $name;?>">
        <br><br>
        Tip percentage:
        <br>
        <input type="radio" value="0.1" name="percentage"/>10%
        <input type="radio" value="0.15" name="percentage"/>15%
        <input type="radio" value="0.2" name="percentage"/>20%
        <br><br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>

<?php
    if(isset($_GET['submit'])){
        $input = $_GET['number'];
        $percent = $_GET['percentage'];
        $tip = $input * $percent;
        $finalresult = ($input * $percent) + $input;
        echo "Tip: $". number_format ($tip,2);
        echo "<br><br>";
        echo "Total: $". number_format ($finalresult,2);
    }
    ?>

<body>

</html>