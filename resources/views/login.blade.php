<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Cache-control" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/altlogjs.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/altlog.css')}}">
    <script src="https://kit.fontawesome.com/cb24559d14.js" crossorigin="anonymous" defer></script>
    <title>Gab's</title>
</head>

<body>

    <button id="back"> <a href="/home"> torna all'homepage </a> </button>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form name="register" id="registra" method="POST">
                <h1>Crea Account</h1>
                <div class="area">
                </div>
                <div class="area"><e class="errorUser"> </e><e class="errorEm">                @if(Session()->has('errors'))
                    {{ Session()->get('errors') }}
            @endif </e></div>
                @csrf
                <input type="text" name="username" autocomplete= off placeholder="Nome" id="usr" required/>
                <input type="email" id="em" name="email"placeholder="Email" required/>
                <input type="tel" name="telephone" placeholder="Numero telefonico" required>
                <input type="password" name="pass" placeholder="Password" id="field" class="re" required/>
                <i class='fas fa-eye' id="vision"></i>
                <div class="area"><d class="errors"> </d></div>
                <input type="submit" value="REGISTRATI" id="pass" />
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form name='login' id="login" method="POST" action="/log">
                <h1>Accedi</h1>
                <div class="area">
                <div id="displayErr">

                @if(Session()->has('error'))
        {{ Session()->get('error') }}
@endif
</div>

                </div>
                @csrf

                <input type="email" name="username" placeholder="email" autocomplete= off required/>
                <input type="password" name="password" placeholder="Password" id="field" required/>
                <i class='fas fa-eye' id="vision"></i>
                <input type="submit" value="ACCEDI" id="pass" class="lo">
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>BEN TORNATO!</h1>
                    <p>Inserisci le tue credenziali per accedere</p>
                    <button class="ghost" id="signIn" id="pass2">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>BENVENUTO!</h1>
                    <p>Inserisci i tuoi dati personali per registrarti!</p>
                    <button class="ghost" id="signUp" id="pass2">Sign Up</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>