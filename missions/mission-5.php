<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 3 : Deploiement d&#x27;Odoo 19 sur un serveur Ubuntu</title>
    <link rel="stylesheet" href="../smr.css">
</head>
<body>
    <nav class="back-nav" aria-label="Navigation de retour">
        <a class="back-link" href="../e5.php" aria-label="Retour aux missions E5"><span aria-hidden="true">&larr;</span> Retour</a>
    </nav>
    <header class="hero">
        <h1>Mission 3 : Deploiement d&#x27;Odoo 19 sur un serveur Ubuntu</h1>
        <p>Odoo 17 : du 24/04/2026 au 01/05/2026 — Odoo 19 : du 21/05/2026 au 24/05/2026</p>
    </header>

    <main class="cv mission-page">
        <section class="cv-card">
            <h2>Organisation du projet et mon rôle</h2>
            <p>Mon collègue Ando m’a confié la tâche et indiqué le besoin. J’ai ensuite réalisé le travail principalement seul, en autonomie : recherche des informations nécessaires, choix de la démarche et mise en œuvre technique.</p>
            <p>Son rôle était principalement de me donner la mission ; cela n’excluait pas des échanges ponctuels pour préciser une attente ou débloquer une difficulté, comme ceux consignés dans mon journal de travail.</p>
        </section>

        <section class="cv-card">
            <h2>Durée</h2>
            <p>8 jours pour Odoo 17, puis 4 jours pour Odoo 19 calendaires.</p>
        </section>

        <section class="cv-card">
            <h2>Contexte et acteurs</h2>
            <p>Dans le cadre de mon alternance chez AESysteme, entreprise de solutions de courant faible et de réseaux informatiques, j’ai d’abord mis en place un environnement Odoo 17 sur un serveur Ubuntu. Mon collègue a ensuite préféré Odoo 19, car cette version était plus récente. J’ai donc également réalisé le déploiement sur Odoo 19. Les acteurs concernés sont l’entreprise, les utilisateurs d’Odoo et moi-même pour la mise en œuvre technique.</p>
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
            <p>Après le déploiement, j’ai ouvert le site Odoo en HTTPS et me suis connecté à l’application. L’accès au site et la connexion fonctionnaient.</p><p>Ce contrôle valide l’accès web et l’utilisation de l’application au moment du test. Aucun résultat de test de persistance après redémarrage n’est présenté ici. Les preuves ci-dessous documentent le déploiement ; elles ne constituent pas un compte rendu de ce test.</p>
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
            <h2>Déroulement technique détaillé</h2>
            <p>La procédure de travail commence par la préparation d’Ubuntu et l’installation d’Apache. Elle prévoit l’ouverture des accès web dans le pare-feu, puis la configuration du certificat avec Certbot. Le navigateur sert ensuite à vérifier le point d’entrée web.</p>
            <p>PostgreSQL et son client sont installés séparément du conteneur Odoo. La procédure prévoit le démarrage du service et son activation au démarrage du système, puis la préparation du rôle applicatif utilisé par Odoo.</p>
            <p>Le déploiement utilise Docker Compose : d’abord avec l’image Odoo 17, puis avec l’image Odoo 19 pour le nouvel environnement. Les répertoires de configuration et de modules personnalisés sont montés dans le conteneur ; les données Odoo disposent d’un volume persistant. Cette organisation sépare les fichiers de l’application et les données à conserver.</p>
            <p>La configuration Odoo précise les chemins des modules et des données ainsi que les paramètres de connexion PostgreSQL. Les échanges entre le réseau Docker et la base hébergée sur le serveur nécessitent des règles réseau adaptées. Les secrets ne sont pas reproduits dans le portfolio.</p>
            <p>Apache reçoit les requêtes destinées au nom de domaine et les transmet à Odoo par un virtual host utilisant <code>ProxyPass</code> et <code>ProxyPassReverse</code>. La procédure prévoit l’activation du site puis le certificat HTTPS.</p>
            <p>Enfin, la documentation couvre le lancement avec Compose, l’identification du conteneur actif et sa gestion. Mon contrôle confirmé porte sur l’ouverture du site en HTTPS et la connexion à Odoo ; je ne présente pas le redémarrage ou le renouvellement du certificat comme des tests personnellement confirmés.</p>
        </section>

        <section class="cv-card">
            <h2>Recul sur la procédure</h2>
            <p>Les documents d’installation contiennent des exemples hérités et quelques incohérences de noms de comptes ou de commandes. Ils servent à expliquer l’architecture et le déroulement, pas à publier une procédure prête à exécuter sans relecture. Les droits des fichiers, les privilèges PostgreSQL et les ports exposés doivent être revus selon le principe du moindre privilège.</p>
        </section>

        <section class="cv-card">
            <h2>Preuves</h2>
            <p>La documentation Odoo 17 correspond au premier déploiement. Les configurations et vues Odoo 19 ci-dessous présentent le nouvel environnement.</p>
            <div class="mission-proof-images">
                <img src="../assets/preuves/mission5_deploiement_odoo17_doc.png" alt="Documentation du premier déploiement sur Odoo 17">
                <img src="../assets/preuves/mission9_adminer_postgresql.png" alt="Configuration Adminer">
                <img src="../assets/preuves/mission6_docker_compose_redacted.png" alt="Configuration Docker Compose du déploiement Odoo 19, secrets masqués">
                <img src="../assets/preuves/mission6_odoo_conf_redacted.png" alt="Configuration Odoo 19, secrets masqués">
                <img src="../assets/preuves/mission6_odoo19_en_ligne_discuss_desktop.png" alt="Interface du serveur Odoo 19 en ligne">
            </div>
        </section>

        <a class="btn" href="../e5.php">Retour aux missions E5</a>
    </main>
</body>
</html>
