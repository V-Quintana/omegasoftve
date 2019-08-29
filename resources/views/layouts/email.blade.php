<html>
    <head>
        <style>
            body{
                color: #00325d;
                font-family: helvetica;
                font-size: 12pt;
                text-align:left;
            }
        </style>
    </head>
    <body>
        <h4>{{$title}}</h4>
        <table>
            <?php foreach ($content as $key => $value) { ?>
                <tr>
                    <td><strong>{{$key}}</strong></td>
                    <td>{{$value}}</td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html> 