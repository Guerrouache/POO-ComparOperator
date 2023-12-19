# Projet ComparOperator

## 🌄 Contexte

Notre client souhaite créer un site de comparaison de Tour Opérateur et il nous a confié le projet. Toute l'étude a été faite en amont et c'est à vous désormais de développer ce comparateur : le ComparOperator ! 🚢

Dans un souci de développement agile, vous devez produire dans un premier temps une preuve de concept (POC) : une version simplifiée qui montrera les fonctionnalités du site et un design attrayant mais sans identification ou sécurité spécifique.

À la fin de cette semaine de sprint, vous devrez avoir un prototype fonctionnel pour le présenter au client afin de récolter ses premières impressions dans le but de faire des modifications à sa convenance.

## 🔬 Fonctionnalités

**Le projet se découpe en 2 grandes parties : l'interface utilisateur (front-office) et l'interface administrateur (back-office).**

### 😎 Utilisateur

- Sur la page d'accueil, l'utilisateur peut visualiser toutes les destinations proposées par ComparOpérator.
- Quand une destination est sélectionnée, l'utilisateur est redirigé vers une page qui liste les Tours Opérateur (TO) pour cette destination.
- Chaque TO affichera sa note d'avis global (grade), le prix de la destination (price) ainsi que des messages d'avis d'autres utilisateurs.
- Un utilisateur peut écrire une review dans un simple champ de saisie. Il doit écrire son nom pour chaque avis laissé (comme pour le mini-chat).
  - 🔥 Bonus : un utilisateur ne peut écrire qu’une seule review par TO.
- Si le TO est premium, un lien vers son site officiel est disponible (au clic d'un bouton ou sur le nom du TO).
  - 🔥 Bonus : un utilisateur peut donner une note à un TO, ce qui augmente ou diminue son score moyen. Il ne peut pas noter deux fois le même TO.
