# **GP5_BD**

![Logo du Groupe](./front/img/b.png)

## **Introduction**

Ce projet est une application de gestion de requêtes universitaires. Il permet aux étudiants de soumettre des requêtes administratives et académiques, et aux administrateurs de les traiter de manière efficace. L'objectif est de simplifier et d'automatiser le processus de gestion des requêtes pour améliorer la communication et la satisfaction des étudiants.

## **Description**

Cette application vise à centraliser et à gérer toutes les requêtes des étudiants dans une faculté de science. Les principales fonctionnalités incluent la soumission de requêtes par les étudiants, la gestion et le suivi des requêtes par les administrateurs, et la génération de rapports pour analyser les tendances et les performances. L'application est conçue pour être intuitive et facile à utiliser, avec une interface utilisateur claire et des notifications pour tenir les utilisateurs informés de l'état de leurs requêtes.

## **Table des Matières**

1. [Installation](#installation)
2. [Fonctionnalités](#fonctionnalités)
3. [Utilisation](#utilisation)
4. [Résolution des problèmes](#résolution-des-problèmes)
5. [Contact](#contact)
6. [Coût du Projet](#coût-du-projet)
7. [Membres du Groupe](#membres-du-groupe)

## **Installation**

### **Prérequis**

- Serveur web (par exemple, XAMPP)
- Navigateur web
- git

### **Étapes d'installation**

1. **Clonez le dépôt :**

   ```bash
   git clone  https://github.com/Warano02/bd2024back.git
   ```

2. **Déplacez le répertoire cloné dans le répertoire `htdocs` de XAMPP :**

   ```bash
   mv bd2024back /c/xampp/htdocs/
   ```

3. **Démarrez le serveur Apache depuis le panneau de contrôle XAMPP.**

4. **Créez une base de données nommée `projet` dans votre serveur MySQL.**

5. **Importez les tables depuis le fichier `projets.sql` situé dans `./backend/security/` :**

   ```bash
   mysql -u root -p projet < ./backend/security/projets.sql
   ```

## **Fonctionnalités**

- Soumission de requêtes par les étudiants
- Gestion et suivi des requêtes par les administrateurs
- Notifications par email
- Génération de rapports
- Gestion du profil utilisateur
- Récupération de compte
- Suppression de compte
- Récupération du mot de passe
- Intelligence artificielle intégrée pour aider à rédiger les requêtes

## **Utilisation**

1. **Accédez à l'application via votre navigateur à l'adresse `http://localhost/bd2024back`.**

## **Résolution des problèmes**

- Si vous rencontrez des problèmes de connexion à la base de données, vérifiez les informations de connexion dans le fichier `connection.php` situé dans `./backend/security/`.
- Consultez les logs du serveur Apache pour plus de détails sur les erreurs.

## **Contact**

Pour toute question ou assistance, veuillez me contacter à l'adresse email suivante : <support@gp5_bd.com>

## **Coût du Projet**

Ce projet, avec toutes ses fonctionnalités impressionnantes, est estimé à environ **3,5 millions de francs CFA**. 🎉

Pour plus de détails sur l'évaluation du coût d'un site web, vous pouvez consulter [ce site](https://storybee.fr/valorisation/start).

Cependant, je vous demande cordialement de ne pas partager mon code source. Après tout, j'ai mis beaucoup de cœur et d'âme dans ce projet, et j'aimerais qu'il reste mon petit secret bien gardé. Merci de votre compréhension et de votre coopération ! 😊

## **Membres du Groupe**

<table style="border: 1px solid black; border-collapse: collapse;">
  <tr>
    <th style="border: 1px solid black; padding: 8px;">Nom</th>
    <th style="border: 1px solid black; padding: 8px;">Matricule</th>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;">Abdourahaman Abbo</td>
    <td style="border: 1px solid black; padding: 8px;">23B276FS</td>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;">Hissein Ousman Mahamat</td>
    <td style="border: 1px solid black; padding: 8px;">23A099FS</td>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;font-weight:bold;">Hinsou Kala Felix(Warano)</td>
    <td style="border: 1px solid black; padding: 8px;font-weight:bold;">23A816FS</td>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;">Maibossa'a Dané Parfaite</td>
    <td style="border: 1px solid black; padding: 8px;">23B164FS</td>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;">Mahamat Tahir Issa</td>
    <td style="border: 1px solid black; padding: 8px;">23A930FS</td>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;">Mamadou Baba Issa</td>
    <td style="border: 1px solid black; padding: 8px;">23A178FS</td>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;">Foulpoul Bienvenu</td>
    <td style="border: 1px solid black; padding: 8px;">22A709FS</td>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;">Outman Nassour Outman</td>
    <td style="border: 1px solid black; padding: 8px;">23A907FS</td>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;">Gonba Paulin</td>
    <td style="border: 1px solid black; padding: 8px;">23A907FS</td>
  </tr>
  <tr>
    <td style="border: 1px solid black; padding: 8px;">Hamoa Pierre Celestin</td>
    <td style="border: 1px solid black; padding: 8px;">23B382FS</td>
  </tr>
</table>
