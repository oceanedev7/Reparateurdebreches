<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confidentialités</title>
</head>
<body>
    <div class="mx-auto p-6 mt-10">
        <a href="{{route('accueil')}}" class="underline"><i class="fa-solid fa-arrow-left underline"></i> Retour à la page d'accueil </a>

        <div class=" p-6 ">
            <h1 class="text-3xl font-bold mb-4 text-bleu">Politique de Confidentialité</h1>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">1. Introduction</h2>
            <p class="text-noir">Cette Politique de Confidentialité décrit comment nous recueillons, utilisons, et protégeons vos données personnelles lorsque vous utilisez notre site internet et nos services. Nous nous engageons à respecter la confidentialité de vos données et à les protéger conformément à la législation en vigueur.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">2. Données Collectées</h2>
            <p class="text-noir">Nous collectons les données suivantes :
                <ul class="list-disc list-inside pl-5">
                    <li><strong>Données personnelles :</strong> Nom, prénom, adresse e-mail, numéro de téléphone, etc.</li>
                    <li><strong>Données de navigation :</strong> Adresse IP, type de navigateur, pages visitées, etc.</li>
                </ul>
            </p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">3. Utilisation des Données</h2>
            <p class="text-noir">Les données collectées sont utilisées pour les finalités suivantes :
                <ul class="list-disc list-inside pl-5">
                    <li>Gestion des adhésions et des commandes</li>
                    <li>Envoi de newsletters et d’informations</li>
                    <li>Amélioration de notre site et services</li>
                </ul>
            </p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">4. Partage des Données</h2>
            <p class="text-noir">Nous ne partageons pas vos données personnelles avec des tiers, sauf dans les cas suivants :
                <ul class="list-disc list-inside pl-5">
                    <li>Avec votre consentement</li>
                    <li>Pour se conformer à une obligation légale</li>
                    <li>Pour protéger nos droits et intérêts</li>
                </ul>
            </p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">5. Sécurité des Données</h2>
            <p class="text-noir">Nous mettons en place des mesures techniques et organisationnelles pour assurer la sécurité de vos données personnelles. Toutefois, aucun système de sécurité n'est infaillible, et nous ne pouvons garantir une sécurité absolue.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">6. Vos Droits</h2>
            <p class="text-noir">Conformément à la législation en vigueur, vous disposez des droits suivants concernant vos données personnelles :
                <ul class="list-disc list-inside pl-5">
                    <li>Accès et rectification</li>
                    <li>Suppression</li>
                    <li>Opposition au traitement</li>
                </ul>
            </p>
            <p class="text-noir">Pour exercer vos droits, veuillez nous contacter à reparateurs@de-breches.org.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">7. Cookies</h2>
            <p class="text-noir">Nous utilisons des cookies pour améliorer votre expérience sur notre site. Les cookies sont de petits fichiers stockés sur votre appareil. Vous pouvez configurer votre navigateur pour refuser les cookies, mais cela peut affecter le bon fonctionnement du site.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">8. Modifications de la Politique</h2>
            <p class="text-noir">Nous nous réservons le droit de modifier cette Politique de Confidentialité à tout moment. Les modifications seront publiées sur cette page, et nous vous informerons des changements importants.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">9. Contact</h2>
            <div class="p-4 mt-4">
                <p class="text-noir"><strong>Adresse :</strong> 12 Rue des Colibris, Quartier Paradis, 97232 Lamentin</p>
                <p class="text-noir"><strong>E-mail :</strong> contact@reparateursdebreche.fr</p>
            </div>
        </div>
    </div>

    <button onclick="backToTop()" id="bouton" class="fixed bottom-4 right-4 z-50 text-gris-fonce text-3xl"><i class="fa-solid fa-circle-arrow-up"></i></button>

    <script>
var bouton = document.getElementById("bouton");

function scroll() {
  if (document.documentElement.scrollTop > 50) {
    bouton.style.display = "block";
  } else {
    bouton.style.display = "none";
  }
}

function backToTop() {
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
