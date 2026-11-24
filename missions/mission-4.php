<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 2 : Scripts Python et workflows n8n pour la migration Odoo 12 vers Odoo 19</title>
    <link rel="stylesheet" href="../smr.css">
</head>
<body>
    <nav class="back-nav" aria-label="Navigation de retour">
        <a class="back-link" href="../e5.php" aria-label="Retour aux missions E5"><span aria-hidden="true">&larr;</span> Retour</a>
    </nav>
    <header class="hero">
        <h1>Mission 2 : Scripts Python et workflows n8n pour la migration Odoo 12 vers Odoo 19</h1>
        <p>Du 04/03/2026 au 24/04/2026 — prolongements vers Odoo 19 jusqu’en septembre 2026</p>
    </header>

    <main class="cv mission-page">
        <section class="cv-card">
            <h2>Organisation du projet et mon rôle</h2>
            <p>Mon collègue Ando m’a confié la tâche et indiqué le besoin. J’ai ensuite réalisé le travail principalement seul, en autonomie : recherche des informations nécessaires, choix de la démarche et mise en œuvre technique.</p>
            <p>Son rôle était principalement de me donner la mission ; cela n’excluait pas des échanges ponctuels pour préciser une attente ou débloquer une difficulté, comme ceux consignés dans mon journal de travail.</p>
        </section>

        <section class="cv-card">
            <h2>Durée</h2>
            <p>52 jours calendaires.</p>
        </section>

        <section class="cv-card">
            <h2>Contexte et besoin</h2>
            <p>Après l’analyse de la base, j’ai travaillé sur le transfert des produits, contacts et utilisateurs. L’objectif était d’automatiser la reprise des données et de conserver leurs relations. J’ai commencé les scripts et workflows pour une migration d’Odoo 12 vers Odoo 17. Mon collègue a ensuite préféré Odoo 19, car cette version était plus récente. J’ai donc adapté les traitements pour reprendre les données d’Odoo 12 vers Odoo 19. Les évolutions ultérieures sont distinguées ci-dessous.</p>
        </section>

        <section class="cv-card">
            <h2>Déroulement détaillé — mars et avril 2026</h2>
            <p><strong>4 mars — Première méthode :</strong> j’ai décrit une méthode utilisant une table intermédiaire <code>mig_</code>, l’export CSV de la source, son import dans cette table, puis la reprise des champs communs. Une table de mapping devait conserver l’ancien et le nouvel identifiant.</p>
            <p><strong>6 et 26 mars — Scripts puis n8n :</strong> j’ai commencé à travailler sur le parcours de fichiers CSV avec une aide extérieure, puis constaté que le premier script ne répondait pas au besoin. Je me suis tourné vers n8n. J’ai rencontré des difficultés de syntaxe d’expressions et de sélection des colonnes lors des insertions.</p>
            <p><strong>27 mars — Piste provisoire :</strong> j’ai envisagé de récupérer les requêtes SQL produites par n8n et de les exécuter dans Adminer par groupes de lignes. Mon journal présente cette idée comme une piste, pas comme une solution finale validée.</p>
            <p><strong>2 avril — Premier transfert produit :</strong> le workflow a transféré <code>product_template</code>, mais en conservant les identifiants d’origine, ce qui ne correspondait pas au besoin. J’ai préparé les workflows contacts et utilisateurs pour laisser Odoo attribuer les nouveaux identifiants et gérer leur correspondance.</p>
            <p><strong>3 avril — Contacts en deux passages :</strong> l’insertion directe des relations parentes provoquait des problèmes. J’ai séparé la création des contacts sans parent et leur rattachement ultérieur aux sociétés.</p>
            <p><strong>8 au 10 avril — Images et isolation des tests :</strong> j’ai préparé une nouvelle base de test, séparé les bases de n8n et d’Odoo pour pouvoir restaurer Odoo sans dépendance de n8n, puis retenu des scripts Python pour les images. Le journal du 10 avril indique que les scripts d’images produits et contacts ont été testés et fonctionnent.</p>
            <p><strong>24 avril — Ordre de reprise :</strong> j’ai documenté l’enchaînement des sociétés, civilités, contacts sans liens, liens parents, utilisateurs, catégories, produits et images. Les bases source et cible doivent être adaptées avant chaque exécution.</p>
        </section>

        <section class="cv-card">
            <h2>Prolongements documentés vers Odoo 19</h2>
            <p>Le journal contient également les corrections de septembre 2026 : la chaîne produit reprend les modèles, variantes, taxes, coûts, fabricants et documents. Les devis sont traités par leurs en-têtes puis leurs lignes ; les factures suivent le même principe.</p>
            <p>L’étape finale <code>Upsert Tax Payment Lines</code> prend en charge les lignes comptables de TVA et de créance. Le journal décrit des workflows réexécutables sans doublons, mais rappelle de contrôler les vendeurs et les taxes après une nouvelle migration. Ces évolutions ne sont pas présentées comme réalisées dès avril.</p>
        </section>

        <section class="cv-card">
            <h2>Tests, résultats et limites</h2>
            <p>Le résultat explicitement consigné le 10 avril est le fonctionnement testé des scripts d’images. Le premier transfert des produits a également mis en évidence un défaut de gestion des identifiants. Les difficultés d’affichage de certains noms de sociétés sont mentionnées dans le journal ; leur résolution n’est pas datée dans les entrées d’avril.</p>
            <p>Les contrôles recommandés comprennent les vendeurs, les taxes des lignes et l’équilibre comptable des factures. Une procédure de contrôle ne suffit pas à affirmer que tous ces tests ont réussi sur chaque base.</p>
        </section>

        <section class="cv-card">
            <h2>Compétences et bilan personnel</h2>
            <p>Cette mission mobilise l’analyse des données, la réponse à une évolution, le travail en mode projet et la préparation d’un service. J’ai appris à découper le traitement en étapes et à conserver des correspondances d’identifiants plutôt qu’à forcer ceux de la source.</p>
            <p>Les erreurs rencontrées m’ont amené à séparer les relations parentes, les images et les traitements principaux. Cette approche facilite les reprises et rend les problèmes plus faciles à localiser.</p>
        </section>

        <section class="cv-card">
            <h2>Preuves</h2>
            <div class="mission-proof-images">
                <img src="../assets/preuves/mission4_scripts_python_migration.png" alt="Scripts Python de migration">
                <img src="../assets/preuves/mission4_stack_n8n.png" alt="Configuration n8n">
                <img src="../assets/preuves/visuel_n8n_local.png" alt="Interface n8n locale">
            </div>
        </section>

        <a class="btn" href="../e5.php">Retour aux missions E5</a>
    </main>
</body>
</html>
