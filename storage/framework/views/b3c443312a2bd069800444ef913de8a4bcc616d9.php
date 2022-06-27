 <html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/redirect.css')); ?>">
    <script src="<?php echo e(asset('js/jsredirect.js')); ?>" defer="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/cb24559d14.js" crossorigin="anonymous" defer></script>
    <title>Gabs</title>
</head>
<body>
<div>
    <?php if(Session()->has('contatti')): ?>
        <?php echo e(Session()->get('contatti')); ?>

<?php endif; ?>
    <span>Reindirizzamento in <d id="countdown"></d></span>
</div></body>

</html> <?php /**PATH C:\xampp\htdocs\laravel\resources\views/redirect.blade.php ENDPATH**/ ?>