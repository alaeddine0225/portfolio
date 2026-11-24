<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 1 : Analyse et préparation de la migration Odoo 12 vers Odoo 19</title>
    <link rel="stylesheet" href="../smr.css">
</head>
<body>
    <nav class="back-nav" aria-label="Navigation de retour">
        <a class="back-link" href="../e5.php" aria-label="Retour aux missions E5"><span aria-hidden="true">&larr;</span> Retour</a>
    </nav>
    <header class="hero">
        <h1>Mission 1 : Analyse et préparation de la migration Odoo 12 vers Odoo 19</h1>
        <p>Du 21/01/2026 au 30/01/2026</p>
    </header>

    <main class="cv mission-page">
        <section class="cv-card">
            <h2>Organisation du projet et mon rôle</h2>
            <p>Mon collègue Ando m’a confié la tâche et indiqué le besoin. J’ai ensuite réalisé le travail principalement seul, en autonomie : recherche des informations nécessaires, choix de la démarche et mise en œuvre technique.</p>
            <p>Son rôle était principalement de me donner la mission ; cela n’excluait pas des échanges ponctuels pour préciser une attente ou débloquer une difficulté, comme ceux consignés dans mon journal de travail.</p>
        </section>

        <section class="cv-card">
            <h2>Contexte et besoin</h2>
            <p>J’ai commencé par préparer la migration d’Odoo 12 vers Odoo 17. Mon collègue a ensuite préféré utiliser Odoo 19, car cette version était plus récente. J’ai donc poursuivi le travail en adaptant la préparation à une migration d’Odoo 12 vers Odoo 19. L’analyse nécessitait d’abord de comprendre comment les données étaient organisées. Le travail ne consistait pas seulement à exporter des fichiers : il fallait identifier les champs utiles, leurs tables et les relations qui permettraient de conserver des données cohérentes dans la nouvelle version.</p>
        </section>

        <section class="cv-card">
            <h2>Déroulement détaillé</h2>
            <p><strong>21 janvier 2026 — Découverte de la base :</strong> j’ai commencé le traitement de la base de données et l’apprentissage des étapes d’exportation. Cette première phase m’a permis de situer les informations à reprendre.</p>
            <p><strong>22 et 23 janvier — Tableau de correspondance :</strong> j’ai recensé les champs utilisés et leur emplacement dans la base, puis rapproché les champs Odoo 12 de leurs équivalents dans la version cible : Odoo 17 au départ, puis Odoo 19 après le changement de choix. La demande comprenait également l’étude des jointures et de la priorité d’insertion des données.</p>
            <p><strong>28 janvier — Complément demandé :</strong> mon premier tableau contenait les noms des champs, mais cela ne suffisait pas. Après un retour de mon encadrant, j’ai ajouté les clés et les tables référencées par les clés étrangères.</p>
            <p><strong>29 et 30 janvier — Relations autour des produits :</strong> j’ai identifié les tables reliées à <code>product_template</code>. J’ai terminé le repérage des relations puis commencé à reprendre les noms de champs de l’instance de test pour faciliter le transfert. Les schémas présentés ci-dessous rendent ces dépendances visibles.</p>
        </section>

        <section class="cv-card">
            <h2>Difficultés et choix techniques</h2>
            <p>La principale difficulté était de ne pas confondre le libellé visible dans Odoo avec le champ technique stocké dans PostgreSQL. Une relation vers une autre table doit aussi être comprise avant de migrer sa valeur : recopier un identifiant ne garantit pas qu’il désigne le même objet dans la base cible.</p>
            <p>J’ai donc complété le tableau par les clés et les relations plutôt que de me limiter à une liste de champs. Cette analyse préparait l’ordre de migration et le futur mapping des identifiants.</p>
        </section>

        <section class="cv-card">
            <h2>Résultat, compétences et bilan</h2>
            <p>Le journal indique que le repérage des tables liées à <code>product_template</code> était terminé le 30 janvier. Les livrables de cette phase sont le travail de correspondance et les schémas de relations. Ce résultat est une préparation de migration, pas une validation de migration complète.</p>
            <p>J’ai développé le repérage des ressources de données, l’analyse d’une demande d’évolution et l’organisation d’un travail de migration. J’ai surtout appris qu’une bonne compréhension des dépendances évite de traiter les données dans un ordre incohérent.</p>
        </section>

        <section class="cv-card">
            <h2>Preuves</h2>
            <div class="mission-proof-images">
                <img src="../assets/preuves/schema_tableau_odoo.png" alt="Schema genere des tables Odoo pour la migration">
                <img src="../assets/preuves/mission3_schema_freeform_3.png" alt="Schema Freeform des relations Odoo - partie 1">
                <img src="../assets/preuves/mission3_schema_freeform_2.png" alt="Schema Freeform des relations Odoo - partie 2">
                <img src="../assets/preuves/mission3_schema_freeform_1.png" alt="Schema Freeform des relations Odoo - partie 3">
            </div>
        </section>

        <a class="btn" href="../e5.php">Retour aux missions E5</a>
    </main>
</body>
</html>
