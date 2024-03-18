<!-- cara 1 -->
<html>
    <head>
        <title>Cara 1</title>
    </head>
    <body>
        <p>Tanggal Hari Ini : <?php echo date("d M Y")?></p>
    </body>
</html>

<!-- cara 2 -->
<?php
    echo '<html>';
    echo '<head><title>Cara 2</title></head>';
    echo '<body>';
    echo '<p>Tanggal Hari Ini : '. date('d M Y'). '</p>';
    echo '<body>';
    echo '<html>';
?> 