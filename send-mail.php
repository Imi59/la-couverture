<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['volunteer-name']);
    $email = htmlspecialchars($_POST['volunteer-email']);
    $service = htmlspecialchars($_POST['job-salary']);
    $message = htmlspecialchars($_POST['volunteer-message']);

    // Préparer les informations de l'email
    $to = "imane.baqua@hotmail.fr"; // Adresse email pour recevoir les messages
    $subject = "Nouvelle demande de devis";
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Service demandé: $service\n";
    $body .= "Message: $message";
    $headers = "From: $email";

    // Envoyer l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre demande a été envoyée avec succès !";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer.";
    }
}
?>
