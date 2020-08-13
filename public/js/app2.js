
let form_Moral = document.getElementById("form_Moral").addEventListener("submit", function(e) {

    let nomEmployeur = document.getElementById("nomEmployeur");
    let AdresseEmployeur = document.getElementById("AdresseEmployeur");
    let raisonSocial = document.getElementById("raisonSocial");
    let numIdent = document.getElementById("numIdent");

    let ValidNom_Prenom = /^[a-zA-Z\s]+$/;
    let ValidRaisonSocial = /^[a-zA-Z\s]+$/;
    let ValidNumIdent = /^[a-zA-Z0-9-\s]+$/;
    let ValidAdresse = /^[a-zA-Z0-9-\s]+$/;

    if(nomEmployeur.value.trim() == "") {
        e.preventDefault();
        alert("Veuillez entrer le nom de votre employeur!");
    }
    else if(ValidNom_Prenom.test(nomEmployeur.value) == false) {
        alert("format de nom invalide ! \nEntrer un nom valide");
        e.preventDefault();
        nomEmployeur.value = "";
    }
    else if(nomEmployeur.value.length >= 20) {
        alert("le nom ne doit pas dépasser 20 caracteres !");
        e.preventDefault();
        nomEmployeur.value = "";
    }
    else {
        if(AdresseEmployeur.value.trim() == "") {
            e.preventDefault();
            alert("Veuillez entrer l'adresse de votre employeur!");
        }
        else if(ValidAdresse.test(AdresseEmployeur.value) == false) {
            alert("format d'adresse invalide !\nEntrer une adresse valide");
            e.preventDefault();
            AdresseEmployeur.value = "";
        }
        else if(AdresseEmployeur.value.length >= 50) {
            alert("l'adresse ne doit pas dépasser 50 caracteres !");
            e.preventDefault();
            AdresseEmployeur.value = "";
        }
        else {
            if(raisonSocial.value.trim() == "") {
                e.preventDefault();
                alert("Veuillez renseigner la raison sociale !");
            }
            else if(ValidRaisonSocial.test(raisonSocial.value) == false) {
                alert("format de raison sociale invalide !\nEntrer une raison sociale valide");
                e.preventDefault();
                raisonSocial.value = "";
            }
            else if(raisonSocial.value.length >= 25) {
                alert("la raison sociale ne doit pas dépasser 25 caracteres !");
                e.preventDefault();
                raisonSocial.value = "";
            }
            else {
                if(numIdent.value.trim() == "") {
                    e.preventDefault();
                    alert("Veuillez renseigner votre numéro d'identification !");
                }
                else if(ValidNumIdent.test(numIdent.value) == false) {
                    alert("format numero d'identification invalide !\nEntrer un numero d'identification valide");
                    e.preventDefault();
                    numIdent.value = "";
                }
                else if(numIdent.value.length >= 20) {
                    alert("le numero d'identification ne doit pas dépasser 20 caracteres !");
                    e.preventDefault();
                    numIdent.value = "";
                }
            }
        }
    }



});