<?php 
    $subject = "This is my UDID from iOS device";
    $body  = "Hello<br /> This is my UDID: {$_GET['UDID']} <br />";
    $body .= "Device product: {$_GET['DEVICE_PRODUCT']} <br />";
    $body .= "Device version: {$_GET['DEVICE_VERSION']} <br />";
    $body .= "Device name: {$_GET['DEVICE_NAME']} <br />";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>UDID Succesfully fetched!</title>
        <meta name="viewport" content="width=device-width" />
    </head>
    <body>
        <div>
            <h1>Device info</h1>
                <p>UDID: <?php echo $_GET['UDID']; ?></p>
                <p>Device: <?php echo $_GET['DEVICE_PRODUCT']; ?></p>
                <p>Device version: <?php echo $_GET['DEVICE_VERSION']; ?></p>
                <p>Device name: <?php echo $_GET['DEVICE_NAME']; ?></p>

                <p>Send the information by email</p>
                <p>
                    <a href="mailto:?subject=<?php echo $subject ?>&body=<?php echo $body?>">Click Here</a>
                </p>
        </div>
    </body>
</html>
