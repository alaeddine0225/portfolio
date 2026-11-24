<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 4 : Securisation et configuration du serveur Ubuntu</title>
    <link rel="stylesheet" href="../smr.css">
</head>
<body>
    <nav class="back-nav" aria-label="Navigation de retour">
        <a class="back-link" href="../e5.php" aria-label="Retour aux missions E5"><span aria-hidden="true">&larr;</span> Retour</a>
    </nav>
    <header class="hero">
        <h1>Mission 4 : Securisation et configuration du serveur Ubuntu</h1>
        <p>Du 24/04/2026 au 01/05/2026</p>
    </header>

    <main class="cv mission-page">
        <section class="cv-card">
            <h2>Contexte et acteurs</h2>
            <p>Sur le serveur Ubuntu de l’entreprise AESysteme, j’ai travaillé sur les accès d’administration et le filtrage réseau. Cette intervention concerne l’administrateur du serveur et les utilisateurs des services hébergés.</p>
        </section>

        <section class="cv-card">
            <h2>Expression du besoin</h2>
            <p>Encadrer l’accès au serveur et limiter les connexions non nécessaires, tout en conservant les accès utiles à son administration et aux services.</p>
        </section>

        <section class="cv-card">
            <h2>Solution retenue et justification</h2>
            <p>La réalisation comprend la création d’utilisateurs, la configuration de SSH, la limitation des connexions et l’activation du pare-feu. Le filtrage réduit les services exposés. Changer le port SSH peut limiter le bruit des tentatives automatisées, mais ne constitue pas à lui seul une protection : les droits et l’authentification restent essentiels.</p>
        </section>

        <section class="cv-card">
            <h2>Étapes de mise en œuvre</h2>
            <ol><li>Identification des accès d’administration à configurer.</li><li>Création des comptes utilisateurs nécessaires.</li><li>Modification du port SSH et limitation des connexions.</li><li>Activation et configuration du pare-feu.</li><li>Documentation de la configuration.</li></ol>
        </section>

        <section class="cv-card">
            <h2>Tests et résultat obtenu</h2>
            <p>Après la configuration du pare-feu, j’ai vérifié que je pouvais toujours me connecter au serveur en SSH et accéder à Odoo. Ces deux accès fonctionnaient après l’intervention.</p><p>Ce contrôle confirme le maintien des accès nécessaires, mais ne démontre pas le refus des connexions non autorisées : aucun résultat de ce type n’est présenté ici. Pour toute modification future du pare-feu, conserver une session de secours avant de fermer l’accès courant.</p>
        </section>

        <section class="cv-card">
            <h2>Compétences mobilisées</h2>
            <ul><li>Gérer le patrimoine informatique : identifier les accès et les ressources du serveur.</li><li>Répondre aux incidents et aux demandes d’assistance et d’évolution : prendre en compte une demande de sécurisation.</li><li>Mettre à disposition un service informatique : préparer une configuration d’exploitation et sa validation.</li></ul>
        </section>

        <section class="cv-card">
            <h2>Bilan personnel</h2>
            <p>Cette intervention m’a sensibilisé à l’équilibre entre sécurité et disponibilité. Une règle de filtrage incorrecte peut bloquer l’administrateur : les changements doivent être documentés, testés et accompagnés d’une possibilité de retour arrière.</p>
        </section>

        <section class="cv-card">
            <h2>Déroulement technique détaillé</h2>
            <p>La procédure commence par une connexion SSH au serveur. Le changement de port est décrit au niveau de <code>ssh.socket</code> avec une surcharge systemd : remise à zéro des anciennes écoutes, puis définition de nouvelles écoutes IPv4 et IPv6.</p>
            <p>Après modification, la procédure prévoit le rechargement de systemd et le redémarrage du socket. Elle contient un relevé des ports en écoute obtenu avec <code>ss</code>, ainsi que des essais depuis un second terminal.</p>
            <p>Le travail porte ensuite sur les comptes d’administration et leurs droits. La configuration SSH documentée encadre les utilisateurs autorisés et interdit la connexion directe de root. Les noms de comptes, mots de passe et coordonnées du serveur ne sont pas recopiés ici.</p>
            <p>L’étape pare-feu consiste à autoriser l’accès SSH nécessaire avant d’activer UFW, puis à consulter son état. Les accès web sont ajoutés dans la procédure de préparation de la stack. J’ai confirmé que SSH et Odoo restaient accessibles après la configuration.</p>
        </section>

        <section class="cv-card">
            <h2>Analyse critique et limites</h2>
            <p>Changer un port n’est pas une authentification renforcée et ne suffit pas à sécuriser un serveur. La capture documentaire UFW conserve également des règles concernant le port standard : je ne présente donc pas l’ensemble du filtrage comme un audit de sécurité validé.</p>
            <p>Le document historique contient un refus de connexion sur l’ancien port et une connexion sur le nouveau, mais certaines lignes sont contradictoires. Je distingue ces traces de mon contrôle confirmé du maintien de l’accès SSH et d’Odoo. Les versions du système et les règles doivent être revérifiées avant toute réutilisation de cette procédure.</p>
        </section>

        <section class="cv-card">
            <h2>Preuves</h2>
            <div class="mission-proof-images">
                <img src="../assets/preuves/mission8_securisation_serveur.png" alt="Documentation de securisation du serveur">
            </div>
        </section>

        <a class="btn" href="../e5.php">Retour aux missions E5</a>
    </main>
</body>
</html>
