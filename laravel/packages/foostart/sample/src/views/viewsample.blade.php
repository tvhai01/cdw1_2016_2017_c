
<html>
<head>
	<title>View articles</title>
</head>
<body>
    <table>
            <?php foreach($sample as $value): ?>
         <br>
            <?php echo  $value['sample_id'] ?>
       
            <?php echo $value['sample_name'] ?>
       
            <?php endforeach;?>
        </table>
</body>
</html>