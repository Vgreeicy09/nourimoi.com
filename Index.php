<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NouriMoi - Luttons contre le gaspillage alimentaire</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            scroll-behavior: smooth;
        }
    #home {
        background-color: #f0f8f0;
        padding: 30px;
        text-align: center;
    }
    .abonnement-container {
        background-color: rgba(33, 102, 20, 0.9);
        padding: 20px;
        color: white;
        margin-top: 20px;
        border-radius: 8px;
    }
    .abonnement-container p {
        font-size: 1.1em;
    }
    .abonnement-container button {
        background-color: #ff9800;
        color: white;
        padding: 12px 30px;
        border: none;
        cursor: pointer;
        font-size: 1.2em;
        border-radius: 5px;
    }
    .abonnement-container button:hover {
        background-color: #f57c00;
    }
        header {
            background-color: rgba(33, 102, 20, 1);
            color: white;
            display: flex;
            padding: 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            align-items: center;
            justify-content: space-around;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        nav ul li {
            display: inline;
        }
        
        nav a {
            color: white;
            text-decoration: none;
        }
        
        .menu-toggle {
            display: none;
            background-color: transparent;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            nav ul {
                display: none;
                flex-direction: column;
                text-align: center;
                background-color: rgba(33, 102, 20, 1);
                position: absolute;
                width: 100%;
                top: 60px;
                left: 0;
                padding: 10px 0;
            }

            nav ul.show {
                display: flex;
            }

            .menu-toggle {
                display: block;
                position: absolute;
                top: 15px;
                right: 15px;
            }
        }

        section {
            padding: 100px 20px 20px;
            text-align: center;
        }
        img {
            max-width: 100%; 
            height: auto;
        }
        
        .logo{
            height: 50px; 
            vertical-align: middle;
            margin-bottom: 10px;
        }
        navbar {
        display: flex;
        align-items: center;
        justify-content: space-between; 
        gap: 20px;
        padding: 0px;
        }
        #mission p, #astuces li {
            text-align: center;
        }
        
        button {
            background-color: rgba(33, 102, 20, 1);
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        
        button:hover {
            background-color: rgba(22, 80, 15, 1);
        }
        
        .sticky-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ff9800;
            color: white;
            padding: 15px;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(33, 102, 20, 1);
            color: white;
        }
        
        .contact-links a {
            display: inline-block;
            margin: 10px;
            padding: 10px 15px;
            background-color: rgba(33, 102, 20, 1);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .contact-links a:hover {
            background-color: rgba(22, 80, 15, 1);
        }

        .form-container {
            display: none;
            margin-top: 20px;
            padding: 20px;
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            transition: all 0.3s ease-in-out;
        }

        .form-container h3 {
            margin-bottom: 15px;
            color: rgba(33, 102, 20, 1);
        }
        
        .form-container input, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .form-container textarea {
            resize: none;
            height: 100px;
        }

        .form-container button {
            width: 100%;
            background-color: rgba(33, 102, 20, 1);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: 0.3s;
        }

        .form-container button:hover {
            background-color: rgba(22, 80, 15, 1);
        }
        #vendre-surplus {
    padding: 20px;
    margin: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
#vendre-surplus h2 {
    color: #216614;
}
#vendre-surplus p {
    font-size: 18px;
    line-height: 1.6;
    color: #555;
}
form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 400px;
    margin: auto;
}
#form-surplus {
    display: none;
}
label {
    font-weight: bold;
}
input, select, textarea {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
}
input[type="text"], input[type="number"], input[type="email"] {
    height: 40px;
}
textarea {
    height: 100px;
    resize: vertical;
}
button {
    background-color: rgba(33, 102, 20, 1);
    color: white;
    padding: 15px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}
button:hover {
    background-color: #45a049;
}
.banner {
            background: white;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1em;
            font-weight: bold;
            text-align: center;
        }

        /* Style du pop-up */
.popup {
    display: none; /* caché par défaut */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* fond sombre */
    justify-content: center;
    align-items: center;
}

.popup-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    max-width: 500px;
    text-align: center;
}

.popup-content h3 {
    color: #216614;
}

.popup-content label {
    font-size: 1.1em;
    margin-top: 10px;
    display: block;
}

.popup-content input {
    padding: 10px;
    font-size: 1em;
    margin-top: 10px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.popup-content button {
    margin-top: 20px;
    background-color: rgba(33, 102, 20, 1);
    color: white;
    padding: 12px 30px;
    font-size: 1.2em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.popup-content button:hover {
    background-color: rgba(22, 80, 15, 1);
}

/* Style général du pop-up */
.popup {
    display: none; /* Masquer le pop-up par défaut */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Ombre en arrière-plan */
    z-index: 9999;
}

/* Contenu du pop-up */
.popup-content {
    position: relative;
    margin: 10% auto;
    padding: 20px;
    background-color: white;
    width: 300px;
    border-radius: 8px;
}

/* Icône de fermeture */
.popup-close-icon {
    font-size: 1.5em;
    color: #333;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.popup-close-icon:hover {
    color: #d9534f; /* Couleur rouge au survol */
}

/* Style du formulaire */
form {
    display: flex;
    flex-direction: column;
}

label, input, button {
    margin-bottom: 10px;
}

input, button {
    padding: 8px;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}


    </style>

</head>
<body>
    <header>
        <navbar>
        <h1>NouriMoi</h1>
        <img src="assets/Logoverde.png" alt="Logo Nourri-moi" class="logo">
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        </navbar>
        <nav>
            <ul>
                <li><a href="#home" class="nav-link">Accueil</a></li>
                <li><a href="#mission" class="nav-link">Notre Mission</a></li>
                <li><a href="#astuces" class="nav-link">Astuces Anti-Gaspillage</a></li>
                <li><a href="#don" class="nav-link">Faire un don</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="banner">
        Bienvenue sur NouriMoi - Ensemble contre le gaspillage alimentaire !
    </div>
    <section id="home">
    <h2>Abonnez-vous à notre Panier Alimentaire</h2>
    <p>Recevez des denrées alimentaires en surplus, soutenant ainsi la lutte contre le gaspillage !</p>
    <div class="abonnement-container">
        <p>Notre service vous permet de vous abonner à des paniers alimentaires contenant des produits invendus mais parfaitement consommables.</p>
        <!-- Le bouton d'abonnement -->
<!-- Le bouton d'abonnement -->
<button onclick="openPopup()">Je m'abonne</button>

<!-- Le pop-up -->
<div id="abonnement-popup" class="popup">
    <div class="popup-content">
        <!-- Icône de fermeture -->
        <span class="popup-close-icon" onclick="closePopup()">&#10006;</span>
        <h3>Abonnement à notre Panier Alimentaire</h3>
        <form id="abonnement-form">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>

            <button type="submit">S'abonner</button>
        </form>
    </div>
</div>


    </div>
    </section>
    <section id="mission">
    <h2>Notre Mission</h2>
        <p>Réduire le gaspillage alimentaire en connectant les personnes ayant des surplus avec celles qui en ont besoin.
        Chez Nourri-Moi, notre mission est simple : lutter activement contre le gaspillage alimentaire en connectant les personnes qui ont des aliments en surplus avec celles qui en ont besoin. En réduisant le gaspillage alimentaire, nous contribuons à la fois à la protection de l'environnement et à la solidarité entre les individus.</p>
        <h3>Pourquoi lutter contre le gaspillage alimentaire ?</h3>
        <p>Chaque année, des millions de tonnes de nourriture sont gaspillées dans le monde entier. Pendant ce temps, de nombreuses personnes souffrent de la faim ou ont du mal à se nourrir. Nous croyons qu'en créant un système de partage alimentaire entre les individus, nous pouvons réduire ce gaspillage et aider ceux qui en ont besoin.</p>
        <h3>Comment ça marche ?</h3>
        <p>Si vous avez des aliments en excédent ou des produits dont vous n'avez plus besoin, vous pouvez les offrir à d'autres personnes via notre plateforme. De plus, si vous cherchez de la nourriture, vous pouvez vous abonner aux paniers alimentaires pour récupérer les denrées proposées.</p>
    joignez-nous dans cette mission et aidez-nous à réduire le gaspillage alimentaire pour un monde plus solidaire et responsable.</p>
    </section>
    <section id="vendre">
            <h2>Vendre le surplus</h2>
            <p>Vous avez des aliments en trop ? Mettez-les en vente pour qu'ils profitent à d'autres au lieu d'être jetés.</p>
            <button onclick="toggleFormSurplus()">Déposer une annonce</button>
<form id="vente-form" style="display:none;">
    <label for="nom">Nom du produit :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="quantite">Quantité :</label>
    <input type="number" id="quantite" name="quantite" required>

    <label for="prix">Prix (FCFA) :</label>
    <input type="number" id="prix" name="prix" required>

    <button type="submit">Publier</button>
</form>

        </section>
        
        <section id="don">
            <h2>Faire un Don</h2>
            <p>Partagez vos excédents alimentaires avec ceux qui en ont besoin.</p>
            <button onclick="window.location.href='don.php'">Donner</a></button>
        </section>
    
</section>


    <section id="contact">
        <h2>Nous Contacter</h2>
        <p>Retrouvez-nous sur nos réseaux sociaux ou contactez-nous directement par email.</p>
        <div class="contact-links">
            <a href="mailto:nourimoi445@gmail.com">📧 Email</a>
            <a href="https://www.linkedin.com/posts/nourimoi_nourimoi-votre-solution-innovante-r%C3%A9cup%C3%A9rer-activity-7276925603021221888-I2Id?utm_source=share&utm_medium=member_android" target="_blank">💼 LinkedIn</a>
            <a href="https://www.facebook.com/share/p/cvnX3FrRYPtnsXYn/" target="_blank">📘 Facebook</a>
        </div>
        
        <h3>Rejoignez-nous</h3>
        <button onclick="toggleForm('partenaire')">Devenir Partenaire</button>
        <button onclick="toggleForm('benevole')">Devenir Bénévole</button>
        
        <div id="form-partenaire" class="form-container">
            <h3>Formulaire Partenaire</h3>
            <input type="text" placeholder="Nom" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Pourquoi souhaitez-vous devenir partenaire?" required></textarea>
            <button>Envoyer</button>
        </div>
        
        <div id="form-benevole" class="form-container">
            <h3>Formulaire Bénévole</h3>
            <input type="text" placeholder="Nom" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Pourquoi souhaitez-vous être bénévole?" required></textarea>
            <button>Envoyer</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 NouriMoi. Tous droits réservés.</p>
        <p><em>Ensemble, réduisons le gaspillage pour nourrir les plus vulnérables.</em></p>
    </footer>
    
    <button class="sticky-button" onclick="window.location.href='don.php'">Faire un Don</button>
    
    <script>
        function toggleMenu() {
            document.querySelector("nav ul").classList.toggle("show");
        }
        function toggleForm(id) {
            document.getElementById('form-partenaire').style.display = id === 'partenaire' ? 'block' : 'none';
            document.getElementById('form-benevole').style.display = id === 'benevole' ? 'block' : 'none';
        }
    
        function toggleFormSurplus() {
    var form = document.getElementById("vente-form");
    if (form.style.display === "none" || form.style.display === "") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
}
   // Ouvre le pop-up
function openPopup() {
    document.getElementById("abonnement-popup").style.display = "block";
}

// Ferme le pop-up
function closePopup() {
    document.getElementById("abonnement-popup").style.display = "none";
}



</script>
</body>
</html>