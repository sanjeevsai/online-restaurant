<html>
<head>

<style>
div.container {
    width: 100%;
    border: 1px solid grey;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: #005266;
    clear: left;
    text-align: center;
}


input[type=text], select {
    width: 30%;
    padding: 10px 8px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 30%;
    background-color: #00b8e6;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;

}
</style>
</head>
<body>
<div class="container">

<header>
   <h1>weather monitoring system</h1>
</header>
<div>
<div>

<form name="f1" action="indexed.php" method="post">

    <p style="color:#005266;font-weight:bold;font-size:25px">welcome</p>
<b>startdate(yyyy-mm-dd hh:mm:ss):</b>&nbsp&nbsp&nbsp
<input type="text" name="start"><br><br>
<b>enddate(yyyy-mm-dd hh:mm:ss): </b>&nbsp&nbsp&nbsp
<input type="text" name="end"><br><br>
<input type="submit">

</form>
</div>
<div>
<p>

<a href="main.html">
<img src="home.png" alt="Go to homepage!" width="40" height="40" border="0"align="right">
</a>
</p>
</div><br>
<footer>Copyright &copy; PH bank</footer>
</body>
</html>
