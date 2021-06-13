<?php $title = 'Inscription';?>
<?php include('partials/_header.php');?>

<div id="main_content">
    <div class="container">
        <h1 class="lead">Devenez menbre imediatemment ?</h1>

        <?php include('partials/_error.php'); ?>

        <form method="post" class="bg-light col-md-6" autocomplete="off">

            <!--name fild -->

            <div class="form-group" >
                    <label class="control-label" for="name">Nom: </label>
                    <input type="text"class="form-control" id="name" name="name"  value="<?= get_input('name')?>" required = "required" />
            </div>

            <!-- pseudo fild -->
            <div class="form-group">
                    <label class="control-label" for="pseudo">Pseudo: </label>
                    <input type="text"  class="form-control" id="pseudo" name="pseudo" value="<?= get_input('pseudo')?>" required="required"/>
            </div>

            <!--mailL fild -->

            <div class="form-group">
                    <label class="control-label" for="email">Adresse-Email: </label>
                    <input type="email"  class="form-control" id="email" name="email" value="<?= get_input('email')?>" required = "required"/>
            </div>

            <!-- password init fild -->

            <div class="form-group">
                    <label class="control-label" for="password">Entrer votre Mot de passe: </label>
                    <input type="password" class="form-control" id="password" name="password" required="required"/>
            </div>

            <!-- password confirmation fild -->

            <div class="form-group">
                    <label class="control-label" for="password_confirm">Confirmez votre Mot de passe: </label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required"/>
            </div>

            <input type="submit" class="btn btn-success" value="Inscription" name="register"/>
        </form>
    </div>
</div>
<?php include('partials/_footer.php');?>