<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CGV</title>
</head>
<body>
    

    <div class="mx-auto p-6 mt-10">
        <a href="{{route('accueil')}}" class="underline"><i class="fa-solid fa-arrow-left underline"></i> Retour à la page d'accueil </a>

        <div class=" p-6 ">
            <h1 class="text-3xl font-bold mb-4 text-bleu">Conditions Générales de Vente</h1>
            
            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">1. Introduction</h2>
            <p class="text-noir">Les présentes conditions générales de vente (CGV) régissent les relations entre l'association Réparateurs de Brèche et ses adhérents ou clients. Elles sont accessibles à tout moment sur le site internet de l'association.</p>
            
            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">2. Objet</h2>
            <p class="text-noir">Les CGV décrivent les modalités d'achat et les conditions de vente des produits et services proposés par l'association. Elles s'appliquent à toutes les transactions réalisées sur le site.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">3. Tarifs</h2>
            <p class="text-noir">Les prix des produits et services sont indiqués en euros et incluent toutes les taxes applicables. L'association se réserve le droit de modifier ses tarifs à tout moment, mais les prix en vigueur au moment de la commande seront ceux appliqués.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">4. Modalités de Paiement</h2>
            <p class="text-noir">Le paiement des produits et services peut se faire par carte bancaire, virement, ou tout autre moyen de paiement accepté par l'association. La commande est confirmée dès réception du paiement.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">5. Livraison</h2>
            <p class="text-noir">Les délais de livraison sont variables en fonction des produits et de la localisation des clients. L'association s'engage à faire son possible pour respecter les délais indiqués. En cas de retard, l'association informera le client.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">6. Réclamations et Retours</h2>
            <p class="text-noir">Pour toute réclamation ou demande de retour, le client doit contacter l'association par e-mail à reparateurs@de-breches.org dans un délai de 14 jours suivant la réception des produits. Les produits doivent être retournés dans leur état d'origine.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">7. Responsabilité</h2>
            <p class="text-noir">L'association ne pourra être tenue responsable des dommages directs ou indirects résultant de l'utilisation des produits ou services proposés. La responsabilité de l'association est limitée au montant de la commande.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">8. Propriété Intellectuelle</h2>
            <p class="text-noir">Tous les éléments du site internet (textes, images, logos, etc.) sont protégés par les droits de propriété intellectuelle. Toute reproduction ou utilisation de ces éléments est interdite sans l'autorisation préalable de l'association.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">9. Données Personnelles</h2>
            <p class="text-noir">Les informations personnelles recueillies lors des commandes sont traitées conformément à la législation en vigueur sur la protection des données personnelles. Pour plus de détails, veuillez consulter notre Politique de Confidentialité.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">10. Loi Applicable et Juridiction</h2>
            <p class="text-noir">Les présentes conditions générales de vente sont régies par le droit français. Tout litige sera soumis aux tribunaux compétents de Paris.</p>

            <h2 class="text-2xl font-semibold mt-6 mb-2 text-bleu-fonce">11. Contact</h2>
            <div class=" p-4  mt-4">
                <p class="text-noir"><strong>Adresse :</strong> 12 Rue des Colibris, Quartier Paradis, 97232 Lamentin</p>
                <p class="text-noir"><strong>E-mail :</strong> reparateurs@de-breches.org </p>
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