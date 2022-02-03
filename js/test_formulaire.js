/* On recupère les id dans le document HTML */
const nom = document.getElementById("nom");
const prenom = document.getElementById("prenom");
const message = document.getElementById("message");
const button = document.getElementById("submit");
const success = document.getElementById("success");
const form = document.getElementById("myform");

/* On créé une fonction pour desactiver la soumission du bouton coté HTML */
const disableSubmit = (disabled) => {
    if (disabled) {
        button.setAttribute("disabled", true);
    } else {
        button.removeAttribute("disabled");
    }
};

/* On teste le champs nom */
nom.addEventListener("input", (event) => {
    let value = event.target.value;
    /* Si le champ ne doit pas commencer les chiffres */
    if (!/[^0-9]+/.test(value)) {
        nom.setAttribute("class", "form-control is-invalid");
        disableSubmit(true);
        /* Si le champ a une longueur inférieur à 3 ou supérieur à 50 */
    } else if (value.length < 3 || value.length > 50) {
        nom.setAttribute("class", "form-control is-invalid");
        disableSubmit(true);
        /* Sinon c'est qu'il n'y a aucune erreur */
    } else {
        nom.setAttribute("class", "form-control is-valid");
        disableSubmit(false);
    }
});

/* On teste le champs prenom */
prenom.addEventListener("input", (event) => {
    let value = event.target.value;
    /* Si le champ ne doit pas commencer les chiffres */
    if (!/[^0-9]+/.test(value)) {
        prenom.setAttribute("class", "form-control is-invalid");
        disableSubmit(true);
        /* Si le champ a une longueur inférieur à 3 ou supérieur à 50 */
    } else if (value.length < 3 || value.length > 50) {
        prenom.setAttribute("class", "form-control is-invalid");
        disableSubmit(true);
        /* Sinon c'est qu'il n'y a aucune erreur */
    } else {
        prenom.setAttribute("class", "form-control is-valid");
        disableSubmit(false);
    }
});

/* On test le champs message */
message.addEventListener("input", (event) => {
    let value = event.target.value;
    if (!/[^0-9]+/.test(value)) {
        message.setAttribute("class", "form-control is-invalid");
    } else if (value.length < 3 || value.length > 2000) {
        message.setAttribute("class", "form-control is-invalid");
    } else {
        message.setAttribute("class", "form-control is-valid");
    }

    /* Si touts les formulaires sont bien remplis, on active le bouton sinon on le laisse desactiver */
    if (
        message.getAttribute("class") === "form-control is-valid" &&
        nom.getAttribute("class") === "form-control is-valid"
    ) {
        disableSubmit(false);
    } else {
        disableSubmit(true);
    }
});

/* A la soumission du formulaire, on affiche un message de succès */
form.addEventListener("submit", (event) => {
    event.preventDefault();
    success.innerHTML =
        '<div class="alert alert-success alert-dismissible fade show" role="alert">message envoyé avec succès !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
});
