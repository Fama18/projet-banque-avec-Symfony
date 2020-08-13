document.getElementById("h").style.display = "none";
document.getElementById("fraisCompte").style.display = "none";
document.getElementById("labfrais").style.display = "none";
document.getElementById("h1").style.display = "none";
document.getElementById("AgiosCompte").style.display = "none";
document.getElementById("labAgios").style.display = "none";


document.getElementById("fraiss").style.display = "none";
document.getElementById("infoC").style.display = "none";
document.getElementById("infoSupp").style.display = "none";
document.getElementById("field4").style.display = "none";

function testCompte() {
let typeCompte = document.getElementById("typeCompte");

if(typeCompte.selectedIndex == 1) {
    document.getElementById("h").style.display = "";
    document.getElementById("fraisCompte").style.display = "";
    document.getElementById("labfrais").style.display = "";
    document.getElementById("fraiss").style.display = "";
    document.getElementById("infoC").style.display = "";
    document.getElementById("infoSupp").style.display = "none";
    document.getElementById("field4").style.display = "none";
    document.getElementById("h1").style.display = "none";
    document.getElementById("AgiosCompte").style.display = "none";
    document.getElementById("labAgios").style.display = "none";
    document.getElementById("DateOuverture").style.display = "none";
    document.getElementById("labOuv").style.display = "none";
    document.getElementById("labEch").style.display = "none";
    document.getElementById("DateEcheance").style.display = "none";



}
else if(typeCompte.selectedIndex == 2) {
    document.getElementById("infoSupp").style.display = "";
    document.getElementById("field4").style.display = "";
    document.getElementById("h").style.display = "none";
    document.getElementById("fraisCompte").style.display = "none";
    document.getElementById("labfrais").style.display = "none";
    document.getElementById("h1").style.display = "";
    document.getElementById("AgiosCompte").style.display = "";
    document.getElementById("labAgios").style.display = "";
    document.getElementById("DateOuverture").style.display = "none";
    document.getElementById("labOuv").style.display = "none";
    document.getElementById("labEch").style.display = "none";
    document.getElementById("DateEcheance").style.display = "none";
}
else if(typeCompte.selectedIndex == 3) {
    document.getElementById("h").style.display = "";
    document.getElementById("fraisCompte").style.display = "";
    document.getElementById("labfrais").style.display = "";
    document.getElementById("fraiss").style.display = "";
    document.getElementById("infoC").style.display = "";
    document.getElementById("infoSupp").style.display = "none";
    document.getElementById("field4").style.display = "none";
    document.getElementById("h1").style.display = "none";
    document.getElementById("AgiosCompte").style.display = "none";
    document.getElementById("labAgios").style.display = "none";
    document.getElementById("DateOuverture").style.display = "";
    document.getElementById("labOuv").style.display = "";
    document.getElementById("labEch").style.display = "";
    document.getElementById("DateEcheance").style.display = "";
}
}


let form2 = document.getElementById("form2").addEventListener("submit", function(ev) {

    let NumAgence = document.getElementById("NumAgence");
    let NumCompte = document.getElementById("NumCompte");
    let cleRib = document.getElementById("cleRib");
    let infoclient = document.getElementById("infoclient");
    let typeCompte = document.getElementById("typeCompte");
    let DateOuverture = document.getElementById("DateOuverture");
    let DateEcheance = document.getElementById("DateEcheance");

    let ValidNumAgence_Numcompte_cleRib = /^[a-zA-Z0-9-\s]+$/;
    let ValidcleRib = /^[0-9\s]+$/;


    if(typeCompte.selectedIndex == 1) {

            if(NumAgence.value.trim() == "") {
            ev.preventDefault();
            alert("Veuillez renseigner le numero de l'agence");
            }
            else if(ValidNumAgence_Numcompte_cleRib.test(NumAgence.value) == false) {
            alert("format numero agence invalide !");
            ev.preventDefault();
            NumAgence.value = "";
            }
            else if(NumAgence.value.length > 14) {
            alert("le numero de l'Agence ne doit pas dépasser 14 caracteres !");
            ev.preventDefault();
            NumAgence.value = "";
            }

            else {
            if(NumCompte.value == "") {
                ev.preventDefault();
                alert("Veuillez renseigner le numero du compte");
            }
            else if(ValidNumAgence_Numcompte_cleRib.test(NumCompte.value) == false) {
                alert("format numero compte invalide !");
                ev.preventDefault();
                NumCompte.value = "";
            }
            else if(NumCompte.value.length > 16) {
                alert("le numero de compte ne doit pas dépasser 16 caracteres !");
                ev.preventDefault();
                NumCompte.value = "";
            }


            else {
                    if(cleRib.value == "") {
                        ev.preventDefault();
                        alert("Veuillez renseigner la clé Rib");
                    }
                    else if(ValidcleRib.test(cleRib.value) == false) {
                        alert("clé Rib invalide !");
                        ev.preventDefault();
                        cleRib.value = "";
                    }
                    else if(cleRib.value.length > 3) {
                        alert("la clé Rib ne doit pas dépasser 3 caracteres !");
                        ev.preventDefault();
                        cleRib.value = "";
                    }
                    else {
                        if(infoclient.value == "") {
                            ev.preventDefault();
                            alert("Choisisser un client ! ");
                        }
                    }
            }
        }
    }

    if(typeCompte.selectedIndex == 2) {
        if(NumAgence.value.trim() == "") {
            ev.preventDefault();
            alert("Veuillez renseigner le numero de l'agence");
            }
            else if(ValidNumAgence_Numcompte_cleRib.test(NumAgence.value) == false) {
            alert("format numero agence invalide !");
            ev.preventDefault();
            NumAgence.value = "";
            }
            else if(NumAgence.value.length > 14) {
            alert("le numero de l'Agence ne doit pas dépasser 14 caracteres !");
            ev.preventDefault();
            NumAgence.value = "";
            }

            else {
            if(NumCompte.value == "") {
                ev.preventDefault();
                alert("Veuillez renseigner le numero du compte");
            }
            else if(ValidNumAgence_Numcompte_cleRib.test(NumCompte.value) == false) {
                alert("format numero compte invalide !");
                ev.preventDefault();
                NumCompte.value = "";
            }
            else if(NumCompte.value.length > 16) {
                alert("le numero de compte ne doit pas dépasser 16 caracteres !");
                ev.preventDefault();
                NumCompte.value = "";
            }


            else {
                    if(cleRib.value == "") {
                        ev.preventDefault();
                        alert("Veuillez renseigner la clé Rib");
                    }
                    else if(ValidcleRib.test(cleRib.value) == false) {
                        alert("clé Rib invalide !");
                        ev.preventDefault();
                        cleRib.value = "";
                    }
                    else if(cleRib.value.length > 3) {
                        alert("la clé Rib ne doit pas dépasser 3 caracteres !");
                        ev.preventDefault();
                        cleRib.value = "";
                    }
                    else {
                        if(infoclient.value == "") {
                            ev.preventDefault();
                            alert("Choisisser un client ! ");
                        }
                        else {
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
                        }
                    }
            }
        }
    }

    if(typeCompte.selectedIndex == 3) {

        if(NumAgence.value.trim() == "") {
        ev.preventDefault();
        alert("Veuillez renseigner le numero de l'agence");
        }
        else if(ValidNumAgence_Numcompte_cleRib.test(NumAgence.value) == false) {
        alert("format numero agence invalide !");
        ev.preventDefault();
        NumAgence.value = "";
        }
        else if(NumAgence.value.length > 14) {
        alert("le numero de l'Agence ne doit pas dépasser 14 caracteres !");
        ev.preventDefault();
        NumAgence.value = "";
        }

        else {
        if(NumCompte.value == "") {
            ev.preventDefault();
            alert("Veuillez renseigner le numero du compte");
        }
        else if(ValidNumAgence_Numcompte_cleRib.test(NumCompte.value) == false) {
            alert("format numero compte invalide !");
            ev.preventDefault();
            NumCompte.value = "";
        }
        else if(NumCompte.value.length > 16) {
            alert("le numero de compte ne doit pas dépasser 16 caracteres !");
            ev.preventDefault();
            NumCompte.value = "";
        }


        else {
                if(cleRib.value == "") {
                    ev.preventDefault();
                    alert("Veuillez renseigner la clé Rib");
                }
                else if(ValidcleRib.test(cleRib.value) == false) {
                    alert("clé Rib invalide !");
                    ev.preventDefault();
                    cleRib.value = "";
                }
                else if(cleRib.value.length > 3) {
                    alert("la clé Rib ne doit pas dépasser 3 caracteres !");
                    ev.preventDefault();
                    cleRib.value = "";
                }
                else {
                    if(infoclient.value == "") {
                        ev.preventDefault();
                        alert("Choisisser un client ! ");
                    }
                    else {
                        if(DateOuverture.value == "") {
                            ev.preventDefault();
                            alert("Veuillez renseigner la date d'ouverture du compte");
                        }
                        else {
                            if(DateEcheance.value == "") {
                                ev.preventDefault();
                                alert("Veuillez renseigner la date échéance du compte");
                            }
                        }
                    }
                }
        }
    }
}

});

let form_Employeur = document.getElementById("form_Employeur").addEventListener("submit", function(e) {
    let nomEmployeur = document.getElementById("nomEmployeur");
    let AdresseEmployeur = document.getElementById("AdresseEmployeur");
    let raisonSocial = document.getElementById("raisonSocial");
    let numIdent = document.getElementById("numIdent");
    let salaire = document.getElementById("salaire");
    
    let ValidNom_Prenom = /^[a-zA-Z\s]+$/;
    let ValidRaisonSocial = /^[a-zA-Z\s]+$/;
    let ValidNumIdent = /^[a-zA-Z0-9-\s]+$/;
    let ValidAdresse = /^[a-zA-Z0-9-\s]+$/;

    if(typeCompte.selectedIndex == 2) {

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
                                        else {
                                            if(salaire.value.trim() == "") {
                                                e.preventDefault();
                                                alert("Veuillez renseigner votre salaire !");
                                            }
                                        }
                                    }
                                }
                            }
                        }
});