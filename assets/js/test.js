// Fonction de validation d'adresse e-mail
function isValidEmail(mail) {
    // Expression régulière pour la validation de l'adresse e-mail
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(mail);
  }
document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();

    //récupération des donnée de formulaire
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var mail = document.getElementById("mail").value;
    var msg = document.getElementById("msg").value;
    var mailmsg = document.getElementById("mailmsg");

    //affichage dans la console 
    console.log(nom+" "+prenom+" "+mail+" "+" "+msg);

    //validation des champs 
    if (!isValidEmail(mail)) {
        mailmsg.classList.replace("d-none" , "d-block");
        return;
      }else{
        mailmsg.classList.replace("d-block","d-none");
      }

    // Soumission du formulaire si tout est correct
    alert("Formulaire soumis avec succès !");

});