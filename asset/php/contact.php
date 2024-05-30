<?php

    include_once "header.php";

?>

    <main>
        <h2 id="heading-contact">
            Formulaire de Contact
        </h2>
        <form action="contact.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required><br><br>

            <label for="email">Adresse mail:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br><br>

            <label for="captcha">Veuillez entrer le résultat de 3 + 4:</label>
            <input type="text" id="captcha" name="captcha" required><br><br>

            <input type="submit" value="Envoyer">
        </form>
    </main>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $captcha = htmlspecialchars(trim($_POST['captcha']));

    // Validation des champs
    if (empty($nom) || empty($prenom) || empty($email) || empty($message) || empty($captcha)) {
        echo "Tous les champs sont requis.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse e-mail invalide.";
        exit;
    }

    // Validation du Captcha
    if ($captcha != 7) { // 3 + 4 = 7
        echo "Captcha incorrect.";
        exit;
    }

    // Envoi de l'e-mail
    $to = "nathanprofessionnel1609@gmail.com";
    $subject = "Nouveau message de contact";
    $body = "Nom: $nom\nPrénom: $prenom\nE-mail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode de requête invalide.";
}
?>


<?php

    include_once "footer.php"

?>

    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>