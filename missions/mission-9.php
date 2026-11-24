<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 5 : Administration de la base PostgreSQL avec Adminer</title>
    <link rel="stylesheet" href="../smr.css">
</head>
<body>
    <header class="hero">
        <h1>Mission 5 : Administration de la base PostgreSQL avec Adminer</h1>
        <p>Du 24/04/2026 au 01/05/2026 — complément sauvegarde le 30/10/2026</p>
    </header>

    <main class="cv mission-page">
        <section class="cv-card">
            <h2>Enonce</h2>
            <p>Gestion de PostgreSQL pour Odoo : creation d&#x27;utilisateurs, bases de donnees, verification des connexions, administration avec Adminer et preparation des donnees de migration.</p>
        </section>

        <section class="cv-card">
            <h2>Contexte et besoin</h2>
            <p>La préparation des migrations et l’exploitation d’Odoo nécessitent de pouvoir examiner les bases PostgreSQL, les tables et les rôles. Adminer apporte une interface d’administration, tandis que les workflows utilisent les connexions PostgreSQL source et cible.</p>
        </section>

        <section class="cv-card">
            <h2>Déroulement détaillé</h2>
            <p>La procédure serveur prévoit l’installation de PostgreSQL et de son client, le lancement du service et son démarrage automatique. Le rôle utilisé par l’application doit ensuite correspondre aux paramètres configurés côté Odoo.</p>
            <p>Pour préparer les reprises de données, j’ai travaillé sur des tables intermédiaires et de mapping. Les anciennes et nouvelles valeurs d’identifiant doivent être distinguées : l’interface d’administration permet d’examiner la structure et les données sans confondre la source et la destination.</p>
            <p>Le 9 avril, mon journal précise la séparation des bases n8n et Odoo. L’objectif était de pouvoir supprimer ou restaurer la base de test Odoo sans rendre n8n dépendant de ces opérations.</p>
            <p>Avant de lancer les workflows, la documentation demande de vérifier les deux credentials PostgreSQL : l’un doit désigner la source Odoo 12, l’autre la destination choisie. Un workflow local ne doit pas être utilisé sur la préproduction sans adaptation.</p>
        </section>

        <section class="cv-card">
            <h2>Suite de la mission — sauvegarde de préproduction</h2>
            <p>Le 30 octobre 2026, le journal décrit une correction de droits PostgreSQL qui empêchaient la sauvegarde de <code>mig_map_product_document</code>. Après correction, un test de sauvegarde a produit une archive ZIP de la préproduction.</p>
            <p>Le README des outils précise que cette sauvegarde contient la base et le filestore, c’est-à-dire les documents et images. Les modules personnalisés et la configuration Docker doivent être sauvegardés séparément. La génération réussie d’une archive ne démontre pas sa restauration : aucun test de restauration n’est attesté dans cette entrée.</p>
        </section>

        <section class="cv-card">
            <h2>Compétences, résultat et bilan</h2>
            <p>Cette mission mobilise le repérage des ressources de données, l’administration des accès et l’analyse des dépendances. Les preuves ci-dessous présentent l’environnement Adminer ; le test de sauvegarde réussi est rapporté par le journal du 30 octobre, sans capture supplémentaire jointe ici.</p>
            <p>J’ai retenu qu’une sauvegarde applicative dépend aussi des droits sur les tables et du filestore. La séparation des environnements et la vérification de la cible sont essentielles avant d’exécuter une opération de migration ou d’administration.</p>
        </section>

        <section class="cv-card">
            <h2>Preuves</h2>
            <div class="mission-proof-images">
                <img src="../assets/preuves/mission9_adminer_postgresql.png" alt="Configuration Adminer PostgreSQL">
                <img src="../assets/preuves/visuel_adminer_local.png" alt="Interface Adminer locale">
            </div>
        </section>

        <a class="btn" href="../e5.php">Retour aux missions E5</a>
    </main>
</body>
</html>
