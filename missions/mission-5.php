<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 5 : Deploiement d&#x27;Odoo 17 sur un serveur Ubuntu</title>
    <link rel="stylesheet" href="../smr.css">
</head>
<body>
    <header class="hero">
        <h1>Mission 5 : Deploiement d&#x27;Odoo 17 sur un serveur Ubuntu</h1>
        <p>Du 24/04/2026 au 01/05/2026</p>
    </header>

    <main class="cv mission-page">
        <section class="cv-card">
            <h2>Contexte et acteurs</h2>
            <p>Dans le cadre de mon alternance chez AESysteme, entreprise de solutions de courant faible et de réseaux informatiques, j’ai mis en place un environnement Odoo 17 sur un serveur Ubuntu. Les acteurs concernés sont l’entreprise, les utilisateurs d’Odoo et moi-même pour la mise en œuvre technique.</p>
        </section>

        <section class="cv-card">
            <h2>Expression du besoin</h2>
            <p>Disposer d’un environnement Odoo accessible à distance, relié à PostgreSQL et administrable, avec un accès web en HTTPS.</p>
        </section>

        <section class="cv-card">
            <h2>Solution retenue et justification</h2>
            <p>La solution associe Ubuntu, Docker pour exécuter Odoo, PostgreSQL pour les données, Adminer pour leur administration et Apache en reverse proxy. La séparation des composants facilite la configuration et la maintenance ; HTTPS protège les échanges web. Ce choix ne remplace pas une politique de sauvegarde ni la restriction des accès d’administration.</p>
        </section>

        <section class="cv-card">
            <h2>Étapes de mise en œuvre</h2>
            <ol><li>Préparation de l’environnement serveur Ubuntu.</li><li>Configuration du déploiement Odoo avec Docker et de sa connexion à PostgreSQL.</li><li>Mise à disposition d’Adminer pour l’administration de la base.</li><li>Configuration du reverse proxy Apache et du certificat HTTPS.</li><li>Documentation du déploiement, présentée ci-dessous.</li></ol>
        </section>

        <section class="cv-card">
            <h2>Tests et résultat obtenu</h2>
            <p>La réalisation documentée est la mise en place de l’environnement Odoo 17. Les preuves ci-dessous présentent sa documentation et la configuration d’Adminer.</p><p><strong>Validation à compléter :</strong> fournir les résultats réellement constatés pour l’accès HTTPS, l’ouverture d’Odoo, la connexion à la base et la persistance des données après redémarrage. Aucun compte rendu de ces tests n’est actuellement joint ; ils ne sont donc pas présentés comme validés.</p>
        </section>

        <section class="cv-card">
            <h2>Compétences mobilisées</h2>
            <ul><li>Gérer le patrimoine informatique : identifier les composants et documenter l’environnement.</li><li>Mettre à disposition des utilisateurs un service informatique : déployer et accompagner la mise en service.</li><li>Travailler en mode projet : organiser les étapes de déploiement.</li></ul>
        </section>

        <section class="cv-card">
            <h2>Bilan personnel</h2>
            <p>Cette mission m’a permis de relier l’application, la base de données et le point d’accès web. Pour rendre le déploiement plus facilement reproductible, je dois conserver la procédure, les versions et les résultats des tests, sans publier les secrets de configuration.</p>
        </section>

        <section class="cv-card">
            <h2>Preuves</h2>
            <div class="mission-proof-images">
                <img src="../assets/preuves/mission5_deploiement_odoo17_doc.png" alt="Documentation de deploiement Odoo 17">
                <img src="../assets/preuves/mission9_adminer_postgresql.png" alt="Configuration Adminer">
            </div>
        </section>

        <a class="btn" href="../e6.php">Retour aux missions</a>
    </main>
</body>
</html>
