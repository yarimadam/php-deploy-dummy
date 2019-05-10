<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Deploy Dummy</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <style type="text/css">
        body {
            font-size: 12px
        }
    </style>
</head>
<body>

<div class="container">
    <div><h3>PHP DEPLOY DUMMY</h3></div>
    <p>Click to the related button to show information. | <a href="info.php">PHPInfo</a> </p>
    <div>

        <h5 data-toggle="collapse" data-target="#requestHeaders">Request Headers</h5>
        <table id="requestHeaders" class="collapse table table-bordered table-sm table-hover">
            <?php foreach ($headers as $headerKey => $headerValue) : ?>
                <tr>
                    <th><?php echo $headerKey; ?></th>
                    <td><?php echo $headerValue; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h5 data-toggle="collapse" data-target="#_SERVER">$_SERVER</h5>
        <table id="_SERVER" class="collapse table table-bordered table-sm table-hover">
            <?php foreach ($_SERVER as $_SERVER_Key => $_SERVER_Value) : ?>
                <tr>
                    <th><?php echo $_SERVER_Key; ?></th>
                    <td><?php echo $_SERVER_Value; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h5 data-toggle="collapse" data-target="#awsInstanceIdentity">AWS Instance Identity</h5>
        <table id="awsInstanceIdentity" class="collapse table table-bordered table-sm table-hover">
            <?php foreach ($instanceIdentity as $instanceIdentityKey => $instanceIdentityValue) : ?>
                <tr>
                    <th><?php echo $instanceIdentityKey; ?></th>
                    <td><?php echo $instanceIdentityValue; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</body>
</html>
