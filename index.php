<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/styles.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body>
    <div id="container">
        <h1>Transmettre vos informations de contact<h1>

        <form id="usercontact" action="index.php" methode="POST">
            <fieldset id="personal-info">
                <legend id="coordonnees">Coordonnées</legend>
                    <label for="userlname">Nom :</label>
                    <input type="text" id="userlname" name="userlname" placeholder="ex: Dupont" required><br>

                    <label for="userfname">Prénom :</label>
                    <input type="text" id="userfname" name="userfname" placeholder="ex: Pierre" required><br>

                    <label for="useremail">E-mail :</label>
                    <input type="email" id="useremail" name="useremail" placeholder="ex:fifou@domain.com" required><br>

                    <label for="userphone">Téléphone (pas obligatoire) :</label>
                    <input type="tel" id="userphone" name="userphone" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}" 
                    placeholder="ex:06.xx.xx.xx.xx"><br>
            </fieldset>

            <fieldset id="userrequest">
                <legend id="request">Motif de la demande</legend>
                    <label for="subject">Objet :</label>
                    <select id="subject" name="subject" required>
                        <option value="">--Veuillez choisir un sujet--</option>
                        <option value="avis">Donner mon avis</option>
                        <option value="commande">Passer une commande</option>
                        <option value="entretien">Proposer un entretien</option>
                        <option value="autre">Autre demande</option>
                    </select><br>

                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="5" cols="33" maxlength="255" required></textarea><br><br>
            </fieldset>

            <input type="submit" value="Envoyer la demande">
        </form>


</body>
</html>