
<?php
$url ="https://corona.askbhunte.com/api/v1/myths" ;
$sata = file_get_contents($url) ;
$characters = json_decode($sata) ;
$data = $characters->data ;
?>
<!doctype html>
<html>
<head>
    <title>Myths</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Image</th>
        <th>Source url</th>
        <th>Myths</th>
        <th>Reality</th>
    </tr>
    <?php foreach ($data as $arrays) {
        ?>
        <tr>
            <td><img src="<?php echo $arrays->image_url ?>" height= "40px"

                     width="40px"></td>

            <td><a href="<?php echo trim($arrays->source_url) ?>"> Click

                    here</a> </td>

            <td><?php echo $arrays->myth ?></td>
            <td><?php echo $arrays->reality ?></td>
        </tr>
    <?php } ?>

</table>
</body>
</html>