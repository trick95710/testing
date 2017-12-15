<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
    	<form action="" method="get">
    		<input type="text" name="name">
    		<input type="text" name="number">
    		<input type="submit" name="submit">
    	</form>
    		
    	</form>
        <?php 
        	if($_GET){
        		echo $_GET["name"]."<br>";
        		echo $_GET["number"];
        	}
        ?>
    </body>
</html>
