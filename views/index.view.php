
<?php $title = 'Accueil';?>
<?php include('include/constantes.php');?>
<?php include('partials/_header.php');?>
<div id="main_content">
    <main role="main" class="container">
    <div class="jumbotron">
        <p>
            <h1><?= WEBSITE_NAME ?> ?</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, odio! ⌨ <br>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt alias dolor porro dolorem natus illo dolores possimus animi sint eius! ⌲ <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio non porro laboriosam fugiat, quasi dolorum doloribus dolor recusandae ut doloremque ✍ <br>
            Lorem, ipsum dolor sit amet <a href="register.php"> consectetur adipisicing elit. Pariatur, laboriosam!</a> ✉ <br>
            <span><?= WEBSITE_NAME ?> a le plaisir de vous voir vister son site merci beaucoup</span>
        </p>
        <a href= "register.php" class="btn btn-success btn-lg">Creer un compte</a>
    </div>
    </main>
</div>
   
<?php include('partials/_footer.php');?>