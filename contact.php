<?php include 'inc/header.php' ?>

<div id="formulaire">
    <form action="./donnees.php" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="nom">
        </div>
        <div>
            <label for="surname">Prénom :</label>
            <input type="text" id="mail" name="prenom">
        </div>
        <div>
            <label for="mail">E-mail :</label>
            <input type="email" id="mail" name="mail">
        </div>
        <div>
            <label for="phone">Téléphone (optionnel) :</label>
            <input type="text" id="number" name="number">
        </div>
        <div>
            <label for="msg">Message :</label> <br /> <textarea id="msg" name="message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>
</div>

<?php include 'inc/footer.php' ?>