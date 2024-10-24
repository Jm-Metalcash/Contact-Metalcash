<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/form.css?<?= rand() ?>">
</head>

<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <form action="bordereau_achat.php" method="POST" autocomplete="off">
                <input type="hidden" name="uniqueId" value="<?php echo random_int(1000000000, 9999999999); ?>">
                <div class="formbold-form-title">
                    <h2 class="">Créez votre bordereau d'achat</h2>
                    <p>
                        Le bordereau est à inclure dans votre colis à destination de l'adresse suivante :
                    </p>
                    <div class="formbold-address">
                        <p>Avenue André Ernst 3A, 4800 Verviers, Belgique</p>
                    </div>
                </div>

                <h3 class="header-section">Informations générales</h3>
                <div class="formbold-input-flex">
                    <div>
                        <label for="firstname" class="formbold-form-label">
                            Prénom
                        </label>
                        <input type="text" name="firstname" id="firstname" class="formbold-form-input input-value"
                            placeholder="Votre prénom" />
                    </div>
                    <div>
                        <label for="lastname" class="formbold-form-label"> Nom de famille </label>
                        <input type="text" name="lastname" id="lastname" class="formbold-form-input input-value"
                            placeholder="Votre nom de famille" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="email" class="formbold-form-label"> E-mail </label>
                        <input type="email" name="email" id="email" class="formbold-form-input input-value"
                            placeholder="dupont@exemple.com" />
                        <div id="emailError" class="error-message">Veuillez saisir une adresse e-mail valide.</div>
                    </div>
                    <div>
                        <label for="phone" class="formbold-form-label"> Numéro de téléphone </label>
                        <input type="text" name="phone" id="phone" class="formbold-form-input input-value"
                            placeholder="Votre numéro de téléphone" />
                        <div id="phoneError" class="error-message">Veuillez saisir un numéro de téléphone valide.</div>
                    </div>
                </div>

                <h3 class="header-section">Adresse</h3>
                <div class="formbold-input-flex">
                    <div style="width: 100% !important;">
                        <label for="address" class="formbold-form-label">Rue et numéro</label>
                        <input type="text" name="address" id="address" class="formbold-form-input input-value"
                            placeholder="Votre rue et numéro" />
                    </div>
                    <div>
                        <label for="postalCode" class="formbold-form-label">Code postal</label>
                        <input type="text" name="postalCode" id="postalCode" class="formbold-form-input input-value"
                            placeholder="Votre code postal" />
                    </div>
                </div>


                <div class="formbold-input-flex" style="margin-top: 15px;">
                    <div>
                        <label for="locality" class="formbold-form-label">Localité</label>
                        <input type="text" name="locality" id="locality" class="formbold-form-input input-value"
                            placeholder="Votre localité/ville" />
                    </div>
                    <div>
                        <label for="country" class="formbold-form-label">Pays</label>
                        <input type="text" name="country" id="country" class="formbold-form-input input-value"
                            placeholder="Votre pays" />
                    </div>
                </div>


                <h3 class="header-section" style="margin-top: 60px !important;">Coordonnées bancaires</h3>
                <div class="formbold-input-flex" style="margin-bottom: 0px !important;">
                    <div class="formbold-mb-3">
                        <label for="accountHolder" class="formbold-form-label">
                            Titulaire du compte
                        </label>
                        <input type="text" name="accountHolder" id="accountHolder"
                            class="formbold-form-input readonly-input" disabled />
                    </div>


                    <div class="formbold-mb-3">
                        <label for="iban" class="formbold-form-label">
                            IBAN
                        </label>
                        <input type="text" name="iban" id="iban" class="formbold-form-input input-value" placeholder="exemple: BE6800000000011" />
                        <div id="ibanError" class="error-message">L'IBAN fourni n'est pas valide. Veuillez vérifier et réessayer</div>
                    </div>
                </div>



                <div class="formbold-input-flex" style="margin-top: 20px;">
                    <div>
                        <label for="bankName" class="formbold-form-label"> Nom de la banque </label>
                        <input type="text" name="bankName" id="bankName" class="formbold-form-input input-value"
                            placeholder="Le nom de votre banque" />
                    </div>
                    <div>
                        <label for="swift" class="formbold-form-label"> SWIFT </label>
                        <input type="text" name="swift" id="swift" class="formbold-form-input input-value"
                            placeholder="exemple: ECMSBEBBXXX" />
                    </div>
                </div>

                <h3 class="header-section" style="margin-top: 60px !important;">Informations de la carte d'identité</h3>
                <div class="formbold-input-flex" style="margin-bottom: 0px !important;">
                    <div>
                        <label for="idCard" class="formbold-form-label"> Numéro de la carte d'identité </label>
                        <input type="text" name="idCard" id="idCard" class="formbold-form-input input-value"
                            placeholder="exemple: 000-5900000-02" />
                    </div>
                    <div class="formbold-mb-3" style="margin-bottom: 0px !important;">
                        <label for="expiryDate" class="formbold-form-label">
                            Date d'expiration de la carte d'identité
                        </label>
                        <div class="input-wrapper">
                            <input type="text" id="expiryDate" name="expiryDate" class="formbold-form-input masked-input" maxlength="10" placeholder="jj.mm.aaaa">
                            <span class="mask">__/__/____</span>
                        </div>
                        <div id="expiryError" class="error-message">La date saisie n'est pas valide. Veuillez vérifier le jour et le mois.</div>

                    </div>
                </div>


                <h3 class="header-section" style="margin-top: 25px !important;">Informations sur le colis</h3>
                <div id="materials-section">
                    <div class="formbold-input-flex material-entry">
                        <div>
                            <label for="materialType" class="formbold-form-label">Type de matériaux</label>
                            <input type="text" name="materialType[]" class="formbold-form-input" placeholder="exemple: étain" />
                        </div>
                        <div>
                            <label for="weight" class="formbold-form-label">Poids en kg</label>
                            <input type="number" step="1" name="weight[]" class="formbold-form-input" placeholder="Poids en kg" />
                        </div>
                        <div>
                            <label for="description" class="formbold-form-label">Descriptif (facultatif)</label>
                            <input type="text" name="description[]" class="formbold-form-input" placeholder="exemple: couverts" />
                        </div>
                    </div>
                </div>
                <button type="button" id="add-material" class="btn-add">Ajouter un autre matériau</button>


                <div class="formbold-checkbox-wrapper">
                    <label for="supportCheckbox" class="formbold-checkbox-label">
                        <div class="formbold-relative">
                            <input type="checkbox" id="supportCheckbox" class="formbold-input-checkbox" />
                            <div class="formbold-checkbox-inner">
                                <span class="formbold-opacity-0">
                                    <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                                        class="formbold-stroke-current">
                                        <path
                                            d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                            stroke-width="0.4"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        J'accepte les
                        <a href="https://www.metalcash.be/legal" target="_blank"> termes, conditions et politique</a>
                    </label>
                </div>

                <div class="btn-submit-form">
                    <button type="submit" class="formbold-btn">Générer le bordereau d'achat</button>
                    <div id="formError" class="form-error-message">Merci de vérifier et de corriger les informations
                        avant
                        de procéder à la génération du bordereau d'achat.</div>
                </div>
            </form>
        </div>
    </div>

    <!-- IMPORT SCRIPTS JS -->
    <script src="js/main.js"></script>
    <script src="js/inputAnimation.js"></script>
    <script src="js/validateInput.js"></script>
    <script src="js/addMaterial.js"></script>
    <script src="js/addressFindingAPI.js"></script>
    <script src="js/IBANAPI.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSabS4IR4na718B5zm0NB0sPdgg3Da-7E&libraries=places&callback=initAutocomplete"
        defer>
    </script>
</body>

</html>