
    <?php if(Session::has('user_id')): ?>
    

    <?php $usr=Session('user_id'); 
    ?>
        

    <?php else: ?>
    <script>window.location = "/home";</script>
 
    <?php endif; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(Session::has("permission")==10): ?>
    <script src="<?php echo e(asset('js/areapAdmin.js')); ?>" defer></script>
    <?php else: ?>
    <script src="<?php echo e(asset('js/areap.js')); ?>" defer></script>

    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/arepstyle.css')); ?>">
    <script src="https://kit.fontawesome.com/cb24559d14.js" crossorigin="anonymous" defer></script>
    <title>Area Personale</title>
</head>

<body>
    <div class="container">
        <div class="left-control">
            <div id="back">
                <a href="/home">
                    <i class="fas fa-long-arrow-alt-left"></i> Homepage
                </a>
            </div>
            <?php if(!Session::has("permission")): ?>
            <l  id="modify"> <i class='far fa-file-alt' style='font-size:24px'></i> 
            </l><p class="hidden" id='uno'>Modifica</p>
            <?php endif; ?>

            <l  id="showReview"><i class='far fa-edit' style='font-size:24px'></i>
            </l> <p class="hidden" id='due'>Recensioni</p>

            <l  id="showReservation"><i class='far fa-calendar-alt' style='font-size:24px'></i>
            </l> <p class="hidden" id='tre'>Prenotazioni</p>
            <?php if(Session::has("permission")==10): ?>
            <l id="insertDishes" style><i class='fas fa-hamburger'></i> </l> <p class="hidden" id="quattro"> Portate</p>

            <?php endif; ?>
            <l id="logout"><i class="fa fa-sign-out" style="font-size:24px"></i>
            </l>
  


        </div>
        <div class="right-control">
            <div id="header">
                <?php if(Session::has("permission")): ?>
                Benvenuto Admin
                <br><?php echo "$usr"?>

                <?php else: ?>
                <l>Nome:<br><?php echo "$usr"?>
                </l>
                <l>Email:<div id="email" class="nome"></div>
                </l>
                <l>Numero: <div id="numero"></div>
                </l>

                <?php endif; ?>

               

            </div>
            <div class="generale">
                <div id="contenitore" class="hidden">
                    <?php if(!Session::has("permission")): ?>

                    <form name="email" method="POST" action="/modifyEm" id="email">
                        <?php if(Session()->has('em')): ?>
                        <?php echo e(Session()->get('em')); ?>

                <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <input name="email" id="emailvalue" type="text" placeholder="modifica Email" required>
                        <input id="modem" type="submit" value="Invia" class="bottone">
                    </form>
                   
                    <form action="/modifyNum"method="POST" id="num">   
                        <?php if(Session()->has('num')): ?>
                        <?php echo e(Session()->get('num')); ?>

                <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <input type="text" name="number" id="numval" placeholder="Modifica numero telefonico" required>
                        <input type="submit" id="modnum" value="Invia" class="bottone">
                    </form>
                    <form action="/modifyPass" method="POST" id="pass">
                        <?php if(Session()->has('pass')): ?>
                        <?php echo e(Session()->get('pass')); ?>

                <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <div class="area"></div>
                    <div class="area"></div>
                    <input type="password" name="pass" placeholder="Password" id="field" class="re" required/>
                    <i class='fas fa-eye' id="vision"></i>
                    <div class="area"><d class="errors"> </d></div>
                    <input type="submit" id="modpass" value="Invia" class="bottone">
                    </form>
                    <?php else: ?>
                    <form action="/eliminaP" method="POST" id="portate">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="portata" placeholder="Nome portata" required>
                        <input type="submit" value="Invia">
                    </form>
                    <form action="/aggiungiP" method="POST" id="aggiungi">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="portata" placeholder="Nome portata" required>
                        <select name="categoria" id="">
                            <option>antipasti</option>
                            <option>Primi</option>
                            <option>Secondi</option>
                            <option>Dolci</option>
                        </select>
                        <input type="text" name="prezzo" placeholder="Inserisci il prezzo">
                        <input type="submit" value="Invia">
                    </form>
                    <?php endif; ?>
                </div>
                          </div>
 
                <div id="reviews" class="hidden">

                </div>

                <div id="reservations" class="hidden">
                    

                </div>


     
        </div>
   </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\resources\views/areap.blade.php ENDPATH**/ ?>