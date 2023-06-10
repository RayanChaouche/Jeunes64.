Comment le site marche?

schéma d'action:


utilisateur jeune -> accueil -> creation/connection compte -> peut modifier profil -> demande reference -> regarde ses demades -> fait cv et envoie celles valides à utilisateur consultant

demamnde reference -> enoie lien par mail utilisateur referent -> utilisateur referent valide

envoie celles valide à utilisateur consultant -> envoie lien par mail -> consulte



schema par page:

accueil -> creation/connexion -> (profil) ->  demande ref -> envoie du lien valide ref -> liste des refs -> envoie du lien consulte ref


///////////////////////////////  CSV
2 csv:
compte
demande


(3 csv:
compte jeune : id du compte, autre champs necessaires creation comptes	se fait dans creation, s'actualise si modif profil et ptet si dmde ref depend si liste
demande de ref : id de la ref, id du compte jeune, autres champs necessaires	se fait dans demande de ref, s'actualise si demande valider (si id de ref valide)
validation ref : id de la validation, id de la demande, autres champs						se fait dans validation dmde


On les fait s'imriquer les uns dans les autres :					compte jeune -> demande -> validation
pour chercher tel compte tel demande on cherche id compte dans demande
pour chercher tel validation de tel demande on cherche id demande dans validation
)


////////////////////////////// LISTE CONSULTANT
Pour voir les demandes et references sans les changer faire un modele?

////////////////////////////// DEMANDE REF
le jeune doit d'abord remplir sa demande sur jeune.php puis remplir les coordonnees du referent sur la page referent.php mais version jeune le referent recoit un mail
avec un lien qui envoit sur la description la demande du jeune et la ref. faut un moyen d'avoir la demande du jeune en fonction de l'id, la mettre dans le 
lien envoyé et la recupere pour afficher la bonne demande et bonne ref. on a le bon truc avec get.


OK NOUVELLE IDEE PTET MIEUX SUREMENT PSK L'AUTRE IL PEUT FAIRE UNE DEMANDE ET REVENIR EN ARRIERE ET ON EST NIQUER
ON fait une page pour la demande et une page pour la validation
MAIS chaque page possede les 2 formulaires
ET on display celle qu'il faut à l'aide de javascript
COMMME CA pas de souci de rentrer les donnees mais qu'a moitie psk on met les donnees qd il a tout valider 
DONC le 1er valider cache le 1er form et display le 2eme et le 2eme valider rentre/modifie les infos


DONC index->description->creation/connexion->menu, ca bouge pas
1. menu -> profil et modifie profil
2. menu -> demande -> verificationDemande --ecrit-+-mail--> Validation -> verificationValidation --modifie(+mail facultatif)--> merci.php
3. menu --cv--> menu
4. menu --mail--> liste a consulter (consultant)



ON fait une page pour chaque possibilite donc on a: referent_versionjeune.php, jeune_versionreferent.php, etc
DONC index->description->creation/connexion->menu
1. menu-> profil et modifie profil
2. menu -> demande -> referent jeune (pas acces a tout) --mail-> demande referent -> referent og -> merci.php
3. menu --cv--> menu
4. menu --mail--> liste a consulter (consultant)







IL MANQUE TT CA LA PR L'INSTANT
-CSS
-RAPPORT
-ARCHIVE
-LE CV SUR MENU
-TESTER LE CODE AU DELA DE CREATION (MM CONNEXION PAS FAIT) + HASHAGE DES MDP SI BESOIN




<!--/*(

une autre maniere de faire fonctionner les csv mais pas sur que ce soit utile,
dans ce modele, il faut la liste des demandes dans compte et l'id de validation dans demande


Soit a partir demande on fait le lien entre les 2 autre fichiers : 		compte jeune -> demande <- validation
pour chercher tel compte tel demande on cherche id des demandes dans demande
pour chercher tel validation de tel demande on cherche id validation dans validation


)-->*/


bibli
https://stackoverflow.com/questions/3004041/replace-a-whole-line-where-a-particular-word-is-found-in-a-text-file
http://www.finalclap.com/faq/203-jquery-checkbox-is-checked
https://www.tutorialspoint.com/how-to-read-and-write-a-file-using-javascript
https://www.formget.com/php-checkbox/
https://stackoverflow.com/questions/7206978/how-to-pass-an-array-via-get-in-php
https://www.w3schools.com/php/func_string_implode.asp
https://www.php.net/manual/fr/function.mail.php
https://stackoverflow.com/questions/3507958/how-can-i-make-an-entire-html-form-readonly
https://stackoverflow.com/questions/3004041/replace-a-whole-line-where-a-particular-word-is-found-in-a-text-file
https://www.php.net/manual/fr/function.password-hash.php
https://stackoverflow.com/questions/15620620/js-uncaught-typeerror-object-is-not-a-function-onclick
https://www.w3schools.com/colors/colors_picker.asp
https://developer.mozilla.org/fr/docs/Web/CSS/position_value
https://stackoverflow.com/questions/3984726/how-do-i-make-a-link-unclickable
https://levelup.gitconnected.com/how-to-download-with-javascript-1777ec0457eb
https://dev.to/rajeshkumaryadavdotcom/html-disable-resizing-of-textarea-4m6k
https://cssgradient.io/blog/css-gradient-text/


https://www.youtube.com/watch?v=yuOK6D7deTo
https://www.youtube.com/watch?v=Fywr8gIVdLY
https://www.gmass.co/smtp-test

wamp mail:


stmp sample

projet.cytech@gmail.com
ssudddrfmazlkfto



