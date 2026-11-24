<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veille - Ansible Linux & Windows</title>
    <link rel="stylesheet" href="smr.css">
</head>
<body>
    <nav class="back-nav" aria-label="Navigation de retour">
        <a class="back-link" href="sommaire.php" aria-label="Retour au sommaire"><span aria-hidden="true">&larr;</span> Retour</a>
    </nav>
    <header class="hero">
        <h1>Veille technologique</h1>
        <p>Utilisation d'Ansible avec Linux et Windows</p>
    </header>

    <main class="cv">
        <section class="cv-card">
            <h2>Sujet</h2>
            <p>
                Ma veille porte sur l'utilisation d'Ansible pour automatiser l'administration
                de machines Linux et Windows dans un parc informatique.
            </p>
            <p class="mission-meta">Problématique : comment administrer plusieurs systèmes avec un seul outil d'automatisation ?</p>
        </section>

        <section class="cv-card">
            <h2>Stratégie de veille</h2>
            <p>Objectif SISR : suivre les possibilités et les limites de l’automatisation d’un parc Linux et Windows, en privilégiant des informations vérifiables.</p>
            <ul><li><strong>Sources prioritaires :</strong> documentation officielle Ansible pour les prérequis, la sécurité et les évolutions de support ; forum officiel pour les annonces à recouper avec la documentation.</li>
            <li><strong>Outils :</strong> navigateur et journal de lecture conservé sur cette page. Aucun agrégateur RSS ni alerte n’est déclaré comme déjà configuré.</li>
            <li><strong>Fréquence prévue :</strong> une consultation hebdomadaire et une vérification des prérequis avant toute mise à niveau. Cette fréquence est un objectif, pas un historique de consultations attesté.</li>
            <li><strong>Méthode :</strong> relever la source, sa date de consultation, le changement ou point technique, puis son impact pour mon environnement. Vérifier en laboratoire avant de proposer une utilisation en production.</li></ul>
        </section>

        <section class="cv-card">
            <h2>Qu'est-ce qu'Ansible ?</h2>
            <p>
                Ansible est un outil open source d'automatisation informatique. Il permet
                d'installer des logiciels, configurer des serveurs, deployer des applications
                et executer des taches d'administration sur plusieurs machines.
            </p>
            <p>
                Il fonctionne avec des fichiers appeles <strong>playbooks</strong>, ecrits en YAML.
                Ces playbooks decrivent les actions a effectuer. Ansible applique ensuite ces
                actions sur les machines indiquees dans un <strong>inventaire</strong>.
            </p>
        </section>

        <section class="cv-card">
            <h2>Fonctionnement general</h2>
            <ul>
                <li>Une machine de controle lance les commandes Ansible.</li>
                <li>Un inventaire liste les serveurs Linux et Windows a administrer.</li>
                <li>Les playbooks decrivent les actions a realiser.</li>
                <li>Les modules Ansible executent les actions : installation, copie de fichiers, services, utilisateurs, mises a jour.</li>
                <li>Ansible est agentless : il n'est pas necessaire d'installer un agent permanent sur chaque machine.</li>
            </ul>
        </section>

        <section class="cv-card">
            <h2>Utilisation avec Linux</h2>
            <p>
                Sur Linux, Ansible utilise principalement SSH. C'est simple car SSH est deja
                present sur la plupart des serveurs Linux.
            </p>
            <ul>
                <li>Connexion avec une cle SSH ou un mot de passe.</li>
                <li>Utilisation de <code>become</code> pour executer certaines taches avec les droits administrateur.</li>
                <li>Modules courants : <code>apt</code>, <code>dnf</code>, <code>service</code>, <code>copy</code>, <code>template</code>, <code>user</code>.</li>
                <li>Cas d'usage : installer Apache, configurer un firewall, creer un utilisateur, deployer un fichier de configuration.</li>
            </ul>
        </section>

        <section class="cv-card">
            <h2>Utilisation avec Windows</h2>
            <p>
                Sur Windows, Ansible utilise surtout WinRM, un protocole de gestion a distance
                integre a Windows. Ansible peut aussi utiliser OpenSSH avec Windows, mais il faut
                respecter les versions supportees.
            </p>
            <ul>
                <li>Connexion WinRM en HTTP ou HTTPS, avec une configuration prealable de la machine Windows.</li>
                <li>Modules Windows : <code>win_updates</code>, <code>win_service</code>, <code>win_user</code>, <code>win_copy</code>, <code>win_package</code>.</li>
                <li>Cas d'usage : installer un logiciel, gerer un service Windows, creer un utilisateur, appliquer des mises a jour.</li>
                <li>Bonne pratique : privilegier WinRM en HTTPS ou une authentification adaptee au domaine.</li>
            </ul>
        </section>

        <section class="cv-card">
            <h2>Exemple d'inventaire</h2>
            <pre class="code-block"><code>[linux]
srv-web ansible_host=192.168.1.10 ansible_user=admin

[windows]
pc-support ansible_host=192.168.1.20

[windows:vars]
ansible_connection=winrm
ansible_user=Administrateur
; Secret fourni séparément par une variable chiffrée avec Vault
ansible_winrm_transport=ntlm
ansible_port=5986
ansible_winrm_scheme=https
ansible_winrm_server_cert_validation=validate</code></pre>
        </section>

        <section class="cv-card">
            <h2>Exemple de playbook</h2>
            <p>Exemple pédagogique non exécuté dans cette veille. Il suppose des hôtes accessibles, les droits adaptés et la collection ansible.windows installée. Il ne constitue pas une preuve de déploiement réalisé.</p>
            <pre class="code-block"><code>---
- name: Installer Apache sur Linux
  hosts: linux
  become: true
  tasks:
    - name: Installer apache2
      ansible.builtin.apt:
        name: apache2
        state: present

- name: Verifier un service Windows
  hosts: windows
  tasks:
    - name: Demarrer le service Spooler
      ansible.windows.win_service:
        name: Spooler
        state: started</code></pre>
        </section>

        <section class="cv-card">
            <h2>Interet pour une entreprise</h2>
            <ul>
                <li>Gagner du temps sur les taches repetitives.</li>
                <li>Limiter les erreurs humaines pendant les installations et configurations.</li>
                <li>Gerer Linux et Windows dans un meme outil.</li>
                <li>Documenter les actions grace aux playbooks.</li>
                <li>Rejouer une configuration identique sur plusieurs machines.</li>
            </ul>
        </section>

        <section class="cv-card">
            <h2>Points de vigilance</h2>
            <ul>
                <li>Ne jamais stocker les mots de passe en clair : utiliser Ansible Vault.</li>
                <li>Tester les playbooks sur un environnement de test avant la production.</li>
                <li>Verifier les droits administrateur sur Linux et Windows.</li>
                <li>Bien separer les groupes Linux et Windows dans l'inventaire.</li>
                <li>Sur Windows, verifier la configuration WinRM, le firewall et le mode d'authentification.</li>
            </ul>
        </section>

        <section class="cv-card">
            <h2>Journal de veille — vérification du 22/11/2026</h2>
            <p>Les pages suivantes sont des documentations évolutives, sans date de publication unique affichée. La date indiquée est celle de consultation, et non une date de publication. Cette entrée ne prétend pas reconstituer des lectures antérieures.</p>
            <ul class="source-list">
                <li><strong>Support Windows SSH :</strong> le support officiel a été ajouté à ansible-core 2.18. La documentation précise les prérequis OpenSSH et recommande PowerShell. Impact : vérifier les versions avant de choisir SSH plutôt que WinRM. <a href="https://docs.ansible.com/projects/ansible/latest/os_guide/windows_ssh.html">Ansible — Windows SSH</a>, consulté le 22/11/2026.</li>
                <li><strong>WinRM :</strong> nécessite un listener, une authentification adaptée et des dépendances Python côté contrôle. Impact : préparer la connectivité et valider le certificat HTTPS avant l’exécution. <a href="https://docs.ansible.com/projects/ansible/latest/os_guide/windows_winrm.html">Ansible — Windows Remote Management</a>, consulté le 22/11/2026.</li>
                <li><strong>Validation :</strong> le mode check simule les changements pour les modules compatibles ; le mode diff compare les modifications. Ces modes ne remplacent pas un test fonctionnel et certaines tâches peuvent être forcées à s’exécuter. <a href="https://docs.ansible.com/projects/ansible/latest/playbook_guide/playbooks_checkmode.html">Ansible — Check et diff</a>, consulté le 22/11/2026.</li>
                <li><strong>Protection des secrets :</strong> Vault chiffre des variables ou fichiers sensibles. Impact : ne pas publier de mots de passe en clair avec les playbooks. <a href="https://docs.ansible.com/projects/ansible/latest/vault_guide/index.html">Ansible — Vault</a>, consulté le 22/11/2026.</li>
            </ul>
        </section>

        <section class="cv-card">
            <h2>Synthèse et analyse personnelle</h2>
            <p>Les acteurs principaux de cette veille sont la communauté Ansible, Red Hat et Microsoft pour les composants Windows. L’évolution du support officiel de SSH sur Windows élargit les choix de connexion ; elle ne supprime pas les contraintes propres à chaque système.</p>
            <p>Le point essentiel pour mon parcours SISR est la reproductibilité : un playbook peut rejouer une configuration sur plusieurs serveurs, au lieu de répéter chaque action manuellement. Un serveur doit toutefois déjà être accessible, ou être provisionné par un mécanisme prévu dans l’automatisation. Ansible ne remplace pas à lui seul l’installation physique d’une machine.</p>
            <p>Pour mes missions Ubuntu/Odoo, je pourrais étudier l’automatisation de la préparation du système et des services. Il s’agit d’une piste d’amélioration, pas d’un déploiement Ansible déjà réalisé. Je commencerais par deux machines de test, puis vérifierais une seconde exécution pour repérer les changements inutiles : l’idempotence dépend des modules et de la manière d’écrire les tâches.</p>
            <p>Les enjeux sont le gain de temps, la cohérence des configurations, les droits d’administration et le risque de propager une erreur à plusieurs hôtes. Mon choix serait de tester sur un petit périmètre, protéger les secrets et garder une procédure de retour arrière.</p>
        </section>

        <section class="cv-card">
            <h2>Conclusion</h2>
            <p>
                Ansible est interessant pour administrer un parc mixte Linux et Windows.
                Linux est gere facilement avec SSH, tandis que Windows demande une configuration
                WinRM ou SSH plus precise. Pour une entreprise, Ansible permet de standardiser les
                configurations, gagner du temps et fiabiliser les deploiements.
            </p>
        </section>

        <a class="btn" href="sommaire.php">Retour au sommaire</a>
    </main>
</body>
</html>
