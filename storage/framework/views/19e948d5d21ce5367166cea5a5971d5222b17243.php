<html>

    <head>
        <title>Gab's Restaurant</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/contatti.css')); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/cb24559d14.js" crossorigin="anonymous" defer></script>
        <script src="<?php echo e(asset('js/jsContatti.js')); ?>" defer="true">
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <nav>


            <a href="/prenota"> Prenota</a>
            <a href="/menu"> Menù</a>
            <?php if(Session::has('user_id')): ?>
            <a href='/areap'>Area Personale</a>
        
        <?php else: ?>    
            <a href='/login'><i class='fas fa-user-friends'></i></a>
        <?php endif; ?>        
            <a href="/home"> Home</a>
            <a href="/crew"> Crew</a>


        </nav>
        <div class="container">
            <div id="overlay"> </div>
            <article>

                <form action="/conta" name="contatta" method="POST" id="form">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="access_key" value="c79dc210-8732-4991-90b3-83a6a450730b">
                    <input type="hidden" name="subject" value="Hai ricevuto una richiesta di contatto">
                    <input type="checkbox" name="botcheck" id="" style="display: none;">
                    <input type="hidden" name="from_name" value="Form Contatto Gab's">
                    <div class="Form-cont">Email:</div>
                    <input type="email" name="email" required>
                    <div class="Form-cont">Nome e Cognome:</div>
                    <input type="text" name="name" required>
                    <div class="Form-cont">Recapito Telefonico:</div>
                    <input type="text" name="phone" required>
                    <div class="Form-cont">Note:</div>
                    <textarea name="message" required style="resize:none"></textarea>
                    <br>
                    <button type="submit">Invia</button>

                    <div id="result">                    <?php if(Session()->has('contatti')): ?>
                        <?php echo e(Session()->get('contatti')); ?>

                <?php endif; ?></div>

                </form>
                


            </article>
        </div>
        <footer>

            <div id="footer-el">
                <i class="far fa-clock"></i> <j>Orari <br> Lun-Ven 12-15/20-24 <br> Sab-Dom 19-01</j>
            </div>
            <div id="footer-el">
                <i class="far fa-map"></i> <j>Via Re Leonida 33, Roma <br> Alfonso Gabriele Tinaglia
                <br> 100006087 </j>
            </div>
            <div id="footer-el">
                <i class="far fa-id-card"></i> <j>+39 3338889291 <br> Crew@Gabs.it <br></j>

            </div>
            
            
        </footer>
    </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\resources\views/contatti.blade.php ENDPATH**/ ?>