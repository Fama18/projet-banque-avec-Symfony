
let form1 = document.getElementById("form1").addEventListener("submit", function(e) {

        let numCni = document.getElementById("numCni");
        let nom = document.getElementById("nom");
        let prenom = document.getElementById("prenom");
        let civilite = document.getElementById("civilite");
        let DateDeNaissance = document.getElementById("DateDeNaissance");
        let adresse = document.getElementById("adresse");
        let email = document.getElementById("email");
        let telephone = document.getElementById("telephone");

        let ValidNumCni = /^[0-9\s]+$/;
        let ValidNom_Prenom = /^[a-zA-Z\s]+$/;
        let ValidCivilite = /^[a-zA-Z]+$/;
        let ValidAdresse = /^[a-zA-Z0-9-\s]+$/;
        let ValidEmail = /^[a-z0-9-@.\s]+$/;
        let ValidTelephone = /^[0-9+]+$/;

        //traitement num CNI
        if(numCni.value.trim() == "") {
            e.preventDefault();
            alert("Veuillez remplir votre numero de CNI");
        }
        else if(ValidNumCni.test(numCni.value) == false) {
            alert("le numero de CNI ne doit comporter que des chiffres et des espaces !\nEntrer un CNI valide SVP ! ");
            e.preventDefault();
            numCni.value = "";
        }
        else if(numCni.value.length > 16) {
            alert("le numero de CNI ne doit pas dépasser 16 caracteres !");
            e.preventDefault();
            numCni.value = "";
        }
        else {

            //traitement nom
            if(nom.value.trim() == "") {
                e.preventDefault();
                alert("Veuillez remplir votre nom !");
                }
            else if(ValidNom_Prenom.test(nom.value) == false) {
                alert("le nom ne doit comporter que des lettres ! \nEntrer un nom valide");
                e.preventDefault();
                nom.value = "";
            }
            else if(nom.value.length > 20) {
                alert("le nom ne doit pas dépasser 20 caracteres !");
                e.preventDefault();
                nom.value = "";
            }

            else {

                //traitement prenom
                if(prenom.value.trim() == "") {
                    e.preventDefault();
                    alert("Veuillez remplir votre prénom !");
                    }
                else if(ValidNom_Prenom.test(prenom.value) == false) {
                    alert("le prénom ne doit comporter que des lettres !\nEntrer un prénom valide");
                    e.preventDefault();
                    prenom.value = "";
                }
                else if(prenom.value.length > 30) {
                    alert("le prénom ne doit pas dépasser 30 caracteres !");
                    e.preventDefault();
                    prenom.value = "";
                }

                else {
                    if(civilite.value.trim() == "") {
                        e.preventDefault();
                        alert("Veuillez renseigner votre civilité !");
                        }
                    else if(ValidCivilite.test(civilite.value) == false) {
                        alert("format de civilité invalide !");
                        e.preventDefault();
                        civilite.value = "";
                    }
                    else {
                        //traitement Date de naissance
                        if(DateDeNaissance.value.trim() == "") {
                            e.preventDefault();
                            alert("Veuillez renseigner votre date de naissance !");
                        }

                        else {
                             //traitement adresse
                             if(adresse.value.trim() == "") {
                                e.preventDefault();
                                alert("Veuillez renseigner votre adresse !");
                            }
                            else if(ValidAdresse.test(adresse.value) == false) {
                                alert("format Adresse invalide !\nEntrer une adresse valide");
                                e.preventDefault();
                                adresse.value = "";
                            }
                            else if(adresse.value.length > 40) {
                                alert("l'adresse ne doit pas dépasser 40 caracteres !");
                                e.preventDefault();
                                adresse.value = "";
                            }


                            else {
                                //traitement email
                                if(email.value.trim() == "") {
                                    e.preventDefault();
                                    alert("Veuillez renseigner votre email !");
                                }
                                else if(ValidEmail.test(email.value) == false) {
                                    alert("format d'email invalide !\nEntrer un email valide");
                                    e.preventDefault();
                                    email.value = "";
                                }
                                else if(email.value.length > 35) {
                                    alert("l'email ne doit pas dépasser 35 caracteres !");
                                    e.preventDefault();
                                    email.value = "";
                                }

                                else {
                                    if(telephone.value.trim() == "") {
                                        e.preventDefault();
                                        alert("Veuillez remplir votre numero de téléphone!");
                                    }
                                    else if(ValidTelephone.test(telephone.value) == false) {
                                        alert("format Numero de téléphone invalide !\nEntrer un numero de téléphone valide");
                                        e.preventDefault();
                                        telephone.value = "";
                                    }
                                    else if(telephone.value.length > 9) {
                                        alert("le numéro de téléphone ne doit pas dépasser 9 caracteres !");
                                        e.preventDefault();
                                        telephone.value = "";
                                    }
                                    else {

                                    }
                                }
                            }
                       }   }
                }
            }
        }



 });
