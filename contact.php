<!DOCTYPE html>
<html>
    <?php
        include("head.php");
    ?>
    <?php
        include("header.php");
    ?>
    <body>
        <div class="container-fluid bebas p-5 bg-secondary">
        <br>
        <br>
            <div class="row text-center py-5 ">

            <!--------------mes coordonnées-------------->

                <div class="col-sm-12 col-md-4 col-lg-4 py-3 px-5">
                 
                    <h3>Mon CV en ligne</h3>
                    <br>
                    <h2 class="text-dark zoom">Mes coordonnées</h2>
                    <P class="adresse text-white zoom">
                    Madeleine Lomendja<br>
                    rue Jean Jaurès<br>
                    77176 Savigny le temple <br>
                    </P>
                    <div id="contacts ">
                        <p class="text-white"><i class="fab fa-whatsapp"></i> <i class="fas fa-phone"></i> 06 09 77 26 04</p>
                        <p class="text-white"><i class="fab fa-linkedin"></i> linkedin.com/in/madeleine-lomendja-8a9303225</p>
                        <p class="text-white"><img src="img/logo.png" alt="logo git hub"> https://github.com/madlomendja</p>
                        <p class="text-white"><i class="fas fa-at"></i> mady.lomendja@laposte.net</p>
                
                    </div>
                </div>

            <!-------------------formulaire----------------------->

                <div class="col-sm-12 col-md-4 col-lg-6 py-3 px-5 border border border-dark rounded">
                    <h2 class="text-dark">Contactez-moi</h2>
                    <form>

                    <!-- Nom -->
                        <div class="form-group">
                            <label class="invisible" for="name">Nom</label>
                            <input type="text" id="nom" class="form-control " placeholder="Votre nom :" value="" required>
                            <div class="invalid-feedback">
                            Le nom ne peut commencer par un chiffre et doit avoir 3 caractères au minimum !
                            </div>
                        </div>

                    <!-- Prénom -->
                        <div class="form-group">
                            <label class="invisible" for="surname">Prénom</label>
                            <input type="text" id="prenom" class="form-control border rounded ligneSimple" placeholder="Votre prénom :"
                            value="" required>
                            <div class="invalid-feedback">
                            Le prénom ne peut commencer par un chiffre et doit avoir 3 caractères au minimum !
                            </div>
                        </div>


                        <!--- Email -->
                        <div class="form-group">
                            <label class="invisible" for="mail">Addresse Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Votre email :" value="" required>
                        </div>

                        <!-- Message-->
                        <div class="form-group">
                            <label class="invisible" for="msg">Message</label>
                            <textarea class="form-control form-control-lg" id="message" rows="4" placeholder="Laissez-moi un message :"
                            value="" required></textarea>
                            <div class="invalid-feedback">
                            Le champ message est mal renseigné, il faut un minimum de 3 caractères !
                            </div>
                        </div>

                        <div class="mt-5 zoom text-center">
                            <button type="submit" id="submit" class="btn btn-secondary bg-primary"><span class="mx-3">Envoyer</span><i
                                class=""></i></button>
                        </div>
                    </form>
                </div>



            </div>

        </div>

        </div>

        <?php
            include("scriptjs.php");
        ?>
    </body>
    <?php
  include("footer.php");
?>

</html>