<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NouriMoi - Luttons contre le gaspillage alimentaire</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgba(33, 102, 20, 1);
            color: white;
            padding: 15px;
            text-align: center;
        }

        .logo {
            width: 80px;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }

        h1 {
            font-size: 28px;
            margin-top: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        nav ul li {
            margin: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        section {
            padding: 20px;
            margin: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, select, textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #ff9800;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 10px;
        }

        button:hover {
            background-color: #e68900;
        }

        @media screen and (max-width: 768px) {
            header {
                padding: 10px;
            }
            .logo {
                width: 60px;
            }
            h1 {
                font-size: 22px;
            }
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            nav ul li {
                margin: 5px 0;
            }
            section {
                margin: 10px;
                padding: 15px;
            }
            button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="assets/Logo.png" alt="Logo Nourri-moi" class="logo">
        <h1>NouriMoi<br>Ensemble, réduisons le gaspillage pour nourrir les plus vulnérables.</h1>
        <nav>
            <ul>
                <li><a href="Index.php">Accueil</a></li>
                <li><a href="#mission">Notre Mission</a></li>
                <li><a href="#astuces">Astuces Anti-Gaspillage</a></li>
                <li><a href="don.php">Faire un don</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="don">
        <h2>Faire un Don</h2>
        <p>Choisissez le type de don et fournissez les informations nécessaires.</p>
        <form action="publier_annonce.php" method="POST" enctype="multipart/form-data">
            <label for="titre">Titre de l'annonce :</label>
            <input type="text" id="titre" name="titre" required>

            <label for="type_don">Type de don :</label>
            <select id="type_don" name="type_don" required onchange="toggleDonDetails()">
                <option value="nourriture">Nourriture</option>
                <option value="argent">Argent</option>
            </select>

            <div id="nourriture_details" class="don_details">
                <label for="aliment">Aliment :</label>
                <input type="text" id="aliment" name="aliment" required>
                
                <label for="quantite">Quantité :</label>
                <input type="text" id="quantite" name="quantite" required>
                
                <label for="description">Description :</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>

            <div id="argent_details" class="don_details" style="display: none;">
                <label for="montant">Montant :</label>
                <input type="text" id="montant" name="montant" required>
                
                <label for="mode_transfer">Mode de transfert :</label>
                <select id="mode_transfer" name="mode_transfer" required>
                    <option value="virement">Virement bancaire</option>
                    <option value="paypal">PayPal</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <button type="submit">Publier l'annonce</button>
        </form>
    </section>

    <script>
        function toggleDonDetails() {
            const typeDon = document.getElementById("type_don").value;
            document.getElementById("nourriture_details").style.display = typeDon === "nourriture" ? "block" : "none";
            document.getElementById("argent_details").style.display = typeDon === "argent" ? "block" : "none";
        }
    </script>
</body>
</html>
