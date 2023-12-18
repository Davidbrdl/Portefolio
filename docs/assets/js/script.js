function submitForm() {
    // Récupérer les valeurs du formulaire
    var nom = document.getElementById("nom").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    // Validation simple (ajoutez une validation plus avancée si nécessaire)
    if (nom === "" || email === "" || message === "") {
        alert("Veuillez remplir tous les champs du formulaire.");
        return;
    }

    // Envoyer les données (vous pouvez utiliser ici une requête AJAX pour envoyer les données à un serveur)
    // Ici, nous affichons simplement les données dans la console à des fins de démonstration.
    console.log("Nom: " + nom);
    console.log("Email: " + email);
    console.log("Message: " + message);

    // Réinitialiser le formulaire après l'envoi
    document.getElementById("contactForm").reset();
}