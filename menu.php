<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-Task</title>
    <script type="text/javascript">
        function time()
        {
        today=new Date();
        h=today.getHours();
        m=today.getMinutes();
        s=today.getSeconds();
        document.getElementById('txt').innerHTML=h+":"+m+":"+s;
        setTimeout('time()',500);
        }

    </script>
</head>
<body onload="time()">
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">TaskDev</a>
   
        <form class="d-flex">
            <div class="container-fluid">
                <div class="h4 text-white " id="txt"></div>
            </div>
        </form>
    </div>
</nav>
</body>
</html>