<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

<div>
<h1>Tic Tac Toe par Jules Herduin</h1>
    <table>
        <thead>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <button id="reset">Vider</button>
</div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            let textcircle = '<i class="fa fa-circle-o"></i>';
            let textcross = '<i class="fa fa-times"></i>';
            let iscircle = false;
            $("table tbody tr td").click(function () {
                iscircle = !iscircle;
                let texticon = (iscircle) ? textcircle : textcross;
                if ($(this).html() == "") {
                    $(this).html(texticon);
                }
            })
            $("#reset").click(function () {
                $("table tbody tr td").html("")
            })
        });
    </script>
</body>

</html>