<html>
        <head>
            <title>Gab's Restaurant</title>
            <link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/cb24559d14.js" crossorigin="anonymous" defer></script>
            <script src="{{asset('js/jsmenu.js')}}" defer="true">
            </script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
    
        <body>
            <nav>
    
    
                <a href="/prenota"> Prenota</a>
                <a href="/home"> Home</a>
                @if(Session::has('user_id'))
                <a href='/areap'>Area Personale</a>
            
            @else    
                <a href='/login'><i class='fas fa-user-friends'></i></a>
            @endif               
             <a href="/contatti"> Contatti</a>
                <a href="/crew"> Crew</a>
    
    
            </nav>
            <div class="container">
                <div id="overlay"> </div>
                <article>
                <div id="nomeM"> Essenza dello Chef:</div>
            <div id="container-nome"></div>
        </div>
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
    </html>