<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'The fields {{ fields }} were not expected.' => 'Les champs {{ fields }} n\'ont pas été prévus.',
    'The fields {{ fields }} are missing.' => 'Les champs {{ fields }} sont manquants.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait',
    'fos_user.username.short' => '[-Inf,Inf]Le nom d\'utilisateur est trop court',
    'fos_user.username.long' => '[-Inf,Inf]Le nom d\'utilisateur est trop long',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait',
    'fos_user.email.short' => '[-Inf,Inf]L\'adresse e-mail est trop courte',
    'fos_user.email.long' => '[-Inf,Inf]L\'adresse e-mail est trop longue',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait',
    'fos_user.password.short' => '[-Inf,Inf]Le mot de passe est trop court',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait',
    'fos_user.new_password.short' => '[-Inf,Inf]Le nouveau mot de passe est trop court',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait',
    'fos_user.group.short' => '[-Inf,Inf]Le nom est trop court',
    'fos_user.group.long' => '[-Inf,Inf]Le nom est trop long',
    'fos_message.recipient.blank' => 'Pas de destinataire spécifié',
    'fos_message.recipients.blank' => 'Pas de destinataires spécifié',
    'fos_message.subject.blank' => 'Vous devez entrer un sujet',
    'fos_message.subject.short' => 'Le sujet est trop court|Le sujet est trop court',
    'fos_message.subject.long' => 'Le sujet est trop long|Le sujet est trop long',
    'fos_message.body.blank' => 'Vous devez entrer un message',
    'fos_message.body.short' => 'Le message est trop court',
    'fos_message.body.spam' => 'Il semble que votre message soit un SPAM, il n\'a pas été envoyé',
    'fos_message.not_authorized' => 'Vous n\'avez pas le droit d\'envoyer ce message',
    'fos_message.reply_not_authorized' => 'Vous n\'avez pas de droit de répondre dans cette discussion',
    'fos_message.self_recipient' => 'Vous ne pouvez pas vous envoyer un message à vous-même',
    'user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé',
    'user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait',
    'user.username.short' => '[-Inf,Inf]Le nom d\'utilisateur est trop court',
    'user.username.long' => '[-Inf,Inf]Le nom d\'utilisateur est trop long',
    'user.email.already_used' => 'L\'adresse e-mail est déjà utilisée',
    'user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait',
    'user.email.short' => '[-Inf,Inf]L\'adresse e-mail est trop courte',
    'user.email.long' => '[-Inf,Inf]L\'adresse e-mail est trop longue',
    'user.email.invalid' => 'L\'adresse e-mail est invalide',
    'user.password.blank' => 'Entrez un mot de passe s\'il vous plait',
    'user.password.short' => '[-Inf,Inf]Le mot de passe est trop court',
    'user.cin.already_used' => 'Un adhérant éxiste déja avec ce CIN',
    'user.barcode.already_used' => 'Un adhérant éxiste déja avec cet identifiant',
    'image.error.mimeType' => 'ce format d\'image est inconnu',
    'image.error.uploadIniSize' => 'Le fichier téléchargé est trop volumineux',
    'image.error.uploadFormSize' => 'Le fichier téléchargé est plus grand que celui autorisé par le champ de saisie du fichier HTML',
    'image.error.uploadError' => 'Le fichier téléchargé ne peut être transféré pour une raison inconnue',
    'image.error.maxSize' => 'Le fichier est trop volumineux',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Nom d\'utilisateur ou mot de passe incorrect',
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour',
    'group.flash.created' => 'Le groupe a été créé',
    'group.flash.deleted' => 'Le groupe a été supprimé',
    'security.login.username' => 'Nom d\'utilisateur :',
    'security.login.password' => 'Mot de passe :',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Enregistrer',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'resetting.password_already_requested' => 'Un nouveau mot de passe a déjà été demandé pour cet utilisateur dans les dernières 24 heures.',
    'resetting.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien sur lequel il vous faudra cliquer afin de réinitialiser votre mot de passe.',
    'resetting.request.invalid_username' => 'Le nom d\'utilisateur ou l\'adresse e-mail "%username%" n\'existe pas.',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail :',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe :',
    'form.username' => 'Nom d\'utilisateur :',
    'form.email' => 'Adresse e-mail :',
    'form.current_password' => 'Mot de passe actuel :',
    'form.password' => 'Mot de passe :',
    'form.password_confirmation' => 'Vérification :',
    'form.new_password' => 'Nouveau mot de passe :',
    'form.new_password_confirmation' => 'Vérification :',
    'User account is disabled.' => 'Vous devez activer votre compte.',
    'User account is locked.' => 'Le compte utilisateur est verrouillé.',
    'User account has expired.' => 'Le compte de l\'utilisateur a expiré.',
    'User credentials have expired.' => 'Les informations d\'identification ont expiré.',
  ),
  'FOSMessageBundle' => 
  array (
    'messenger' => 'Messagerie',
    'inbox' => 'Boîte de réception',
    'sent' => 'Envoyés',
    'deleted' => 'Supprimés',
    'send_new' => 'Envoyer un nouveau message',
    'search' => 'Rechercher',
    'threads_found' => '%num% conversation trouvée avec | %num% conversations trouvées avec',
    'message_info' => 'De %sender%, le %date%',
    'reply' => 'Répondre',
    'subject' => 'Sujet',
    'starter' => 'Débuté par',
    'startdate' => 'Débuté le',
    'messages' => 'Messages',
    'last_message' => 'Dernier message',
    'actions' => 'Actions',
    'new' => 'Nouveau',
    'goto_last' => 'Aller au dernier message',
    'on' => 'Le %date%',
    'by' => 'De %sender%',
    'no_thread' => 'Aucune conversation',
    'delete' => 'Supprimer',
    'undelete' => 'Restaurer',
    'recipient' => 'Destinataire',
    'recipients' => 'Destinataires',
    'body' => 'Corps',
  ),
  'messages' => 
  array (
    'fos.user.group.form.name' => 'Nom du groupe',
    'user.action.new' => 'Ajouter un adhérant',
    'user.action.group' => 'Associer à un groupe',
    'user.action.edit' => 'Mettre à jour un adhérant',
    'user.action.login' => 'Authentifier',
    'user.action.carte.show' => 'Cartes des Membres',
    'user.action.carte.print' => 'Imprimer la carte',
    'user.action.tiquet' => 'Ticket de repas',
    'user.action.print' => 'Imprimer la fiche',
    'user.action.promote.admin' => 'rendre administrateur',
    'user.action.promote.manager' => 'rendre éditeur',
    'user.action.promote.user' => 'un simple utilisateur',
    'user.action.show' => 'afficher mon profile',
    'user.action.setting' => 'Compte',
    'user.action.logout' => 'Déconnexion',
    'user.form.email' => 'Courriel',
    'user.form.enabled' => 'état du compte',
    'user.form.username' => 'Identifiant',
    'user.form.plainpassword' => 'Mot de passe',
    'user.form.groups' => 'Groupes',
    'user.form.role' => 'Responsablité',
    'user.form.created' => 'Date d\'inscription',
    'user.form.lastlogin' => 'Dernière connexion',
    'user.form.rememberme' => 'Garder ma session active',
    'user.form.profile.avatar' => 'Photo',
    'user.form.profile.image.file' => '',
    'user.form.profile.family.name' => 'Nom',
    'user.form.profile.first.name' => 'Prenom',
    'user.form.profile.cin' => 'CIN',
    'user.form.profile.barcode' => 'Codebar',
    'user.form.profile.gender' => 'Genre',
    'user.form.profile.birthday' => 'Date de naissance',
    'user.form.profile.job' => 'Profession',
    'user.form.profile.diplome' => 'Niveau d\'etude',
    'user.form.profile.expertise' => 'Spécialité',
    'user.form.profile.address' => 'Adresse',
    'user.form.profile.post.code' => 'Code Postal',
    'user.form.profile.city' => 'Ville',
    'user.form.profile.contry' => 'Pays',
    'user.form.profile.tel' => 'Tél',
    'user.form.profile.gsm' => 'GSM',
    'user.form.profile.website' => 'site web',
    'user.form.profile.googleplus' => 'Google Plus',
    'user.form.profile.facebook' => 'Facebook',
    'user.form.profile.twitter' => 'Twitter',
    'user.form.profile.description' => 'Autres informations',
    'user.form.profile.frequence' => 'Fréquence de paiement',
    'user.form.profile.montant' => 'Montant',
    'user.form.profile.method' => 'Méthode de paimenent',
    'user.title.main' => 'Gestion des membres',
    'user.title.profile' => 'Profile',
    'user.title.user' => 'utilisateur',
    'user.title.archive' => 'Archive',
    'user.meta.identity' => 'Identité',
    'user.meta.name' => 'Adhérent',
    'user.meta.count' => '%count% adherant | %count% adherants',
    'user.meta.general' => 'Informations générale',
    'user.meta.association' => 'Informations de L\'association',
    'user.meta.contact' => 'Informations de contact',
    'user.meta.calls' => 'Historique des appels',
    'user.meta.man' => 'Homme',
    'user.meta.woman' => 'Femme',
    'group.action.new' => 'ajouter un groupe',
    'group.action.edit' => 'Mettre à jour le groupe',
    'group.action.filter' => 'Filtrer par groupe',
    'group.action.reject' => 'Enlever de ce groupe',
    'group.form.name' => 'Nom du groupe',
    'group.form.type' => 'type',
    'group.form.image.file' => 'Icone',
    'group.form.placeholder.filter' => 'Créer un groupe pour ce filtre',
    'group.meta.name' => 'Groupe',
    'group.meta.members' => 'Nombre d\'adhérents',
    'group.meta.count' => '%count% groupe | %count% groupes',
    'group.title' => 'Gestion des Groupes',
    'status.action.new' => 'ajouter un statut',
    'status.action.edit' => 'Mettre à jour un statut',
    'status.action.filter' => 'Filtrer par statut',
    'status.form.name' => 'nom du statut',
    'status.meta.name' => 'Titre',
    'status.meta.members' => 'Nombre d\'adhérents',
    'status.meta.count' => '%count% statut | %count% statuts',
    'status.meta.logs' => 'Historique des Grades',
    'status.title' => 'Liste des statut',
    'event.action.edit' => 'Mise à jour d\'un événement',
    'event.action.new' => 'Ajout d\'un événement',
    'event.action.letter.show' => 'Afficher les lettres',
    'event.action.letter.print' => 'Imprimer les lettres',
    'event.action.letter.sendletter' => 'Envoyer une lettre',
    'event.action.letter.send' => 'Envoyer par mail',
    'event.action.ftp' => 'Publier l\'agenda',
    'event.form.name' => 'Sujet',
    'event.form.type' => 'Type',
    'event.form.description' => 'Description',
    'event.form.groups' => 'Groupes',
    'event.meta.name' => 'Evenement',
    'event.meta.date' => 'Date',
    'event.meta.calendar' => 'Calendrier des évenements',
    'event.title' => 'Liste des évenements',
    'cotisation.action.new' => 'ajouter une cotisation',
    'cotisation.action.edit' => 'Mettre à jour une cotisation',
    'cotisation.action.filter' => 'Filtrer par cotisation',
    'cotisation.form.price' => 'Montant',
    'cotisation.form.type' => 'type',
    'cotisation.form.date.from' => 'Date début',
    'cotisation.form.date.to' => 'Date fin',
    'cotisation.form.date.created' => 'Date de paimenent',
    'cotisation.form.description' => 'Description',
    'cotisation.form.periode' => 'Periode',
    'cotisation.form.user' => 'Adhérent',
    'cotisation.meta.name' => 'cotisation',
    'cotisation.meta.count' => 'Nombre d\'adhérents',
    'cotisation.meta.number' => 'Cotisation N° %id%',
    'cotisation.meta.logs' => 'Historique des Cotisations',
    'cotisation.title' => 'Liste des cotisations',
    'config.action.fields' => 'Configuration des champs',
    'config.form.logo' => 'logo',
    'config.form.name' => 'nom de l\'association',
    'config.form.description' => 'Description de l\'association',
    'config.form.map.lat' => 'Latitude',
    'config.form.map.long' => 'Longuitude',
    'config.form.theme' => 'Theme',
    'config.form.allowlogin' => 'Auto-Enregistrement actif ?',
    'config.form.allowaccess' => 'Les adhérants peuvent se connécter?',
    'config.form.allowprint' => 'Permettre aux membres d\'imprimer leurs carte ?',
    'config.form.carte.bg' => 'Coleur du background',
    'config.form.carte.fg' => 'Coleur du Texte',
    'config.form.headband.bg' => 'Coleur du background du bandeau',
    'config.form.headband.fg' => 'Coleur du Texte du bandeau',
    'config.form.headband.text' => 'Texte du bandeau',
    'config.form.css' => 'Style css',
    'config.form.letter.header' => 'Entéte de la lettre',
    'config.form.letter.event' => 'Lettre d\'invitation',
    'config.form.letter.cotisation' => 'Lettre de cotisation',
    'config.form.local.name' => 'langue',
    'config.form.local.fr' => 'Français',
    'config.form.local.en' => 'Anglais',
    'config.form.local.ar' => 'Arabe',
    'config.meta.general' => 'Générale',
    'config.meta.social' => 'Réseaux sociaux',
    'config.meta.setting' => 'Paramètres',
    'config.meta.carte' => 'Cartes',
    'config.meta.letters' => 'Lettres',
    'config.meta.field.name' => 'Nom du champ',
    'config.meta.field.visible' => 'Visibilité',
    'config.title' => 'Préférences',
    'ben.menu.dashboard' => 'Tableau de bord',
    'ben.menu.members' => 'adhérants',
    'ben.menu.groups' => 'Groupes',
    'ben.menu.status' => 'Status',
    'ben.menu.cotisation' => 'Cotisations',
    'ben.menu.events' => 'Evénements',
    'ben.menu.reservation' => 'Résérvation',
    'ben.menu.logement' => 'Logement',
    'ben.menu.rooms' => 'Chambres',
    'ben.menu.config' => 'Préférences',
    'ben.menu.collapse' => 'Réduire le menu',
    'ben.menu.messages' => 'messages',
    'ben.menu.notifications' => 'notifications',
    'ben.menu.calendar' => 'calendrier',
    'ben.action.new' => 'Ajouter',
    'ben.action.show' => 'afficher',
    'ben.action.edit' => 'Mettre à jour',
    'ben.action.delete' => 'Supprimer',
    'ben.action.restore' => 'rétaurer',
    'ben.action.empty.history' => 'Supprimer l\'historique',
    'ben.action.valide' => 'Valider',
    'ben.action.send' => 'Envoyer',
    'ben.action.done' => 'Terminer',
    'ben.action.search' => 'Rechercher',
    'ben.action.advanced' => 'Recherche avancée',
    'ben.action.tocsv' => 'Exporter vers csv',
    'ben.action.toxml' => 'Exporter vers xml',
    'ben.action.toexcel' => 'Exporter vers excel',
    'ben.action.import' => 'Importer',
    'ben.action.topdf' => 'imprimer',
    'ben.action.enable' => 'activer',
    'ben.action.disable' => 'désactiver',
    'ben.action.prev' => 'précedant',
    'ben.action.next' => 'suivant',
    'ben.action.more' => 'Plus d\'info',
    'ben.action.call' => 'appeler',
    'ben.action.sms' => 'Envoyer un sms',
    'ben.action.backtolist' => 'Revenir à la liste',
    'ben.action.print' => 'imprimer',
    'ben.action.select' => 'Selectioner une action',
    'ben.action.hangup' => 'Racrocher',
    'ben.meta.id' => 'Id',
    'ben.meta.all' => 'Tous',
    'ben.meta.actions' => 'Actions',
    'ben.meta.perpage' => 'Nombre de ligne par page',
    'ben.meta.total' => 'Le totale',
    'ben.meta.call' => 'Appel en cours',
    'ben.meta.message' => 'message',
    'ben.meta.datecall' => 'date d\'appel',
    'ben.meta.note' => 'remarque',
    'ben.meta.map' => 'Locale',
    'ben.image.form.file' => '',
    'fos.user.action.email' => 'Changer votre adresse email',
    'fos.user.action.account' => 'Reglages Compte',
    'fos.user.action.password.change' => 'Changer votre mot de passe',
    'fos.user.change.password.form.current.password' => 'Mot de passe actuel',
    'fos.user.change.password.form.new.first' => 'Nouveau mot de passe',
    'fos.user.change.password.form.new.second' => 'Confirmer votre mot de passe',
    'fos.user.profile.form.username' => 'Nom d\'utilisateur',
    'fos.user.profile.form.email' => 'Adresse e-mail',
    'fos.user.profile.form.current.password' => 'Mot de passe actuel',
    'message.action.send' => 'Envoyer un nouveau message',
    'message.action.delete' => 'supprimer ce message',
    'message.action.reply' => 'Répondre',
    'message.action.mail' => 'Envoyer par mail',
    'message.meta.main' => 'Messagerie',
    'message.meta.count' => '%count% message| %count% messages',
    'message.meta.no' => 'Pas encore de messages',
    'message.meta.sent' => 'Envoyés',
    'message.meta.inbox' => 'Boîte de réception',
    'message.meta.deleted' => 'Supprimés',
    'message.meta.demo' => 'Modele des lettre envoyées',
    'message.form.message' => 'Message',
    'message.form.subject' => 'Sujet',
    'message.form.sendto' => 'Envoyée à',
    'avancement.form.date.from' => 'Date début',
    'avancement.form.date.to' => 'Date fin',
    'avancement.form.city' => 'Province',
    'avancement.form.status' => 'Status',
    'form.submitFile' => 'Fichier',
  ),
  'flashes' => 
  array (
    'ben.flash.error.general' => 'Désolé, une erreur s\'est produite',
    'ben.flash.error.form' => 'Il y a des erreurs dans le formulaire soumis !',
    'ben.flash.error.user.admin' => 'impossible de modifier un super utilisateur de cette interface',
    'ben.flash.error.user.resetting.password' => 'Un nouveau mot de passe a déjà été demandé pour cet utilisateur dans les dernières 24 heures.',
    'ben.flash.error.group.empty' => 'Ce groupe est vides',
    'ben.flash.error.login' => 'impossible de se connecter au serveur',
    'ben.flash.success.updated' => 'Vos modifications ont été enregistrées.',
    'ben.flash.success.profile.updated' => 'Votre profile a été mis à jour',
    'ben.flash.success.profile.password' => 'Le mot de passe a été réinitialisé avec succès',
    'ben.flash.success.user.created' => 'Adhérent ajouté avec succée.',
    'ben.flash.success.user.deleted' => 'L\'adhérent a été supprimé avec succée !',
    'ben.flash.success.group.updated' => 'Le groupe a été mis à jour',
    'ben.flash.success.group.created' => 'Le groupe a été créé avec succée !',
    'ben.flash.success.group.deleted' => 'Le groupe a été supprimé',
    'ben.flash.success.message.sent' => 'messages envoyées avec succée.',
    'ben.flash.success.event.updated' => 'L\'evenement a été mis à jour',
    'ben.flash.success.event.deleted' => 'L\'evenement a été supprimé',
    'ben.flash.success.status.updated' => 'Le statut a été mis à jour',
    'ben.flash.success.status.created' => 'Le statut a été créé avec succée !',
    'ben.flash.success.status.deleted' => 'Le statut a été supprimé',
    'ben.flash.success.contribution.updated' => 'la cotisation a été mis à jour',
    'ben.flash.success.contribution.created' => 'La cotisation a été créé avec succée !',
    'ben.flash.success.contribution.deleted' => 'La cotisation a été supprimé',
    'ben.flash.success.general' => 'L\'action a été effectuées avec succès',
    'ben.flash.success.info' => 'info',
  ),
));


return $catalogue;