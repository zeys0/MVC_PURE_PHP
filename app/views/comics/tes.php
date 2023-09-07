<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/sweet/package/dist/sweetalert2.min.css">

</head>


<body>
    <div class="fire"></div>

    <script src="<?php echo BASEURL; ?>/sweet/package/dist/sweetalert2.all.min.js">

    </script>

    <script>
        Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
        )
    </script>


</body>

</html>