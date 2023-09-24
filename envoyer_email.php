<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Récupérer les données du formulaire
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $message =  wordwrap($message, 70, "\r\n");
  
  // Définir les détails de l'e-mail
  $destinataire = "omar.ettabaa@gmail.com"; // Remplacez cette adresse par celle où vous souhaitez recevoir l'e-mail
  $sujet = "Nouveau message du formulaire";
  $corps_message = "Nom: $nom\n";
  $corps_message .= "Email: $email\n";
  $corps_message .= "Message:\n$message";

  // En-têtes de l'e-mail
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Envoi de l'e-mail
  mail( 
    string $destinataire,
    string $sujet,
    string $corps_message,
    $headers);

  // Redirection vers une page de confirmation ou retour à la page du formulaire
  header("Location: confirmation.html"); // Remplacez par le nom de la page de confirmation
  exit();
}
?>
