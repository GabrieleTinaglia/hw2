
<html>

    <head>
        <title>Gab's Restaurant</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/mhw1.css')); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <script src="<?php echo e(asset('js/home.js')); ?>" defer="true"></script>
        <script src="https://kit.fontawesome.com/cb24559d14.js" crossorigin="anonymous" defer></script>
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
            <a href="/crew">Crew</a>
            <a href="/contatti"> Contattaci</a>

        </nav>
        <div id="bar">
        
        </div>

        <header>
            <div id="sala">
                <div id="overlay"></div>
            </div>

            <div class="container">
                <div id="logo">
                    <img src="<?php echo e(asset('images/log.jpg')); ?>">
                </div>

                <div id="chef">
                    Gab's è il nostro ristorante <br> guidato dallo chef Alfonso Gabriele Tinaglia

                </div>
                <div class="pulsanti">
                    <a href="/prenota">
                        RESERVE
                    </a>
                </div>
            </div>


        </header>
        <article>
            <div id="menu">

                <div id="overlay"></div>
                <div class="pulsanti" style=position:absolute>
                    <a href="/menu">Menù</a>
                </div>
            </div>
            <div class="sezione">
                <div id="s1">
                </div>
                <div id="s2">
                    <p>Let's be Sweet...</p>
                    <div id="chef">
                        Prenota il tuo dolce <br> dei sogni
                    </div>
                    <div class="pulsanti">
                        <a href="" id="order">Coming Soon</a>
                    </div>
                </div>
            </div>
            <div class="sezione">
                <div id="s4">
                    <p>Let's meet the Crew...</p>
                    <div id="chef">
                        Vieni a Conoscere la <br> nostra brigata
                    </div>
                    <div class="pulsanti">
                        <a href="/crew">Crew</a>
                    </div>
                </div>
                <div id="s3">
                </div>
            </div>

            <div id="contact">

                <div class="pulsanti"> <a href="/contatti">Contattaci</a> </div>
            </div>
            <section id="formrecensioni"></section>
            <div id="recensioni">
                <div id="headerbox">
                    Cosa Pensano Di Noi...
        </div>

                <div id="box">
            
                <div id="footer-el">
                    <div class="name-container" id="1"></div>
                    <div class="quotes" id="2"></div>
                </div>
                <div id="footer-el">

                <div class="name-container" id="3"></div>
                    <div class="quotes" id="4"></div>
                </div> 
                <div id="footer-el">

                <div class="name-container" id="5"></div>
                    <div class="quotes" id="6"></div>
                </div>
                </div>
                <div id="pop-up">
                    
                       
                 <div id='review'>
                    <div id='headerr'>
                        <?php if(Session::has("user_id")): ?>
                        
Clicca qui per lasciare una Recensione! </div>
                    <form action="/postReviews" name='rec' id='rece' method='POST' class='hidden'>
                        <?php echo csrf_field(); ?>
                        <input type='hidden' name="username" value="">
                        <input type='hidden' name='data' id='data' value=''>
                        <input type='hidden' name='ora' id='orario'>
                        <textarea name='note' id='nota' cols='30' rows='10' maxlength="180"></textarea>
                       <input type='submit' id="send" value='Invia'>
                    </form>
                    </div>
                    
                    
                </div>
            </div>
         <?php endif; ?>
            
        </article>
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
</html><?php /**PATH C:\xampp\htdocs\laravel\resources\views//home.blade.php ENDPATH**/ ?>