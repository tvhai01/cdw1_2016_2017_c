
<html>
    <head>
        <title>View articles</title>
    </head>
    <body>
        <table>
            <?php foreach ($sample as $value): ?>
                <br>
                <?php echo $value['sample_id'] ?>
                <?php echo $value['sample_name'] ?>
            <?php endforeach; ?>
        </table>
         <table>
            <?php foreach ($catalog as $value): ?>
                <br>
                <?php echo $value['catalog_id'] ?>
                <?php echo $value['catalog_name'] ?>
                <?php echo $value['catalog_parentid'] ?>
                <?php echo $value['catalog_sortoder'] ?>
            <?php endforeach; ?>
        </table>
    </body>
</html>