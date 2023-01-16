<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER &quot; coups !&quot;" texte="Devine un nombre&#xa;&#xa;Au début du game,  l'algo tire un nombre au hasard entre 1 et 100.&#xa;&#xa;Une fois que c'est fait, on demande à l'utilisateur de deviner ce nombre (entre 1 et 100 donc).&#xa;&#xa;On a un compteur qui va nous permettre de compter le nombre d'essais de l'utilisateur pour trouver la bonne réponse.&#xa;&#xa;Tant que l'utilisateur n'a pas trouvé la bonne réponse :&#xa;Quand l'utilisateur tape sa réponse on la compare au nombre qui a été tiré :&#xa;- si c'est le même nombre, on affiche &quot;Tu as gagné en x coups&quot; (x étant le nombre d'essais de l'utilisateur)&#xa;- si le nombre est supérieur, on affiche &quot;Trop haut&quot; (par exemple)&#xa;- si le nombre est inférieur, on affiche... &quot;Trop bas&quot;&#xa;"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2lignes="" F2etat="inactif" F2defaut="" F2para=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurLigne="2" nbDecimales="8" totalAffichages="1000" epaisseurPoint="2" arrondiAuto="vrai" totalBoucles="5000000" maxBoucle="500000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#randomNumber" algoitem="randomNumber EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#userNumber" algoitem="userNumber EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#counter" algoitem="counter EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="19#ici on génère un nb aléatoire entre 1 et 100" algoitem="//ici on génère un nb aléatoire entre 1 et 100"/>
        <item code="5#randomNumber#ALGOBOX_ALEA_ENT(1,100)#pasliste" algoitem="randomNumber PREND_LA_VALEUR ALGOBOX_ALEA_ENT(1,100)"/>
        <item code="19#initialisation du compteur avec la valeur 0" algoitem="//initialisation du compteur avec la valeur 0"/>
        <item code="5#counter#1#pasliste" algoitem="counter PREND_LA_VALEUR 1"/>
        <item code="19#on demande à l'utilisateur de choisir un nombre entre 1 et 100" algoitem="//on demande à l'utilisateur de choisir un nombre entre 1 et 100"/>
        <item code="4#Choisis un nombre entre 1 et 100#0" algoitem="AFFICHER &quot;Choisis un nombre entre 1 et 100&quot;"/>
        <item code="19#on affecte la veleur à userNumber" algoitem="//on affecte la veleur à userNumber"/>
        <item code="2#userNumber#pasliste" algoitem="LIRE userNumber"/>
        <item code="19#tant que les 2 nombres ne sont pas identiques on répète les instructions dans la boucle" algoitem="//tant que les 2 nombres ne sont pas identiques on répète les instructions dans la boucle"/>
        <item code="15#userNumber != randomNumber" algoitem="TANT_QUE (userNumber != randomNumber) FAIRE">
            <item code="16#debuttantque" algoitem="DEBUT_TANT_QUE"/>
            <item code="6#userNumber > randomNumber" algoitem="SI (userNumber > randomNumber) ALORS">
                <item code="7#debutsi" algoitem="DEBUT_SI"/>
                <item code="4#Le nombre choisi est supérieur au nombre aléatoire#1" algoitem="AFFICHER &quot;Le nombre choisi est supérieur au nombre aléatoire&quot;"/>
                <item code="8#finsi" algoitem="FIN_SI"/>
                <item code="9#sinon" algoitem="SINON">
                    <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                    <item code="4#Le nombre choisi est inférieur au nombre aléatoire#1" algoitem="AFFICHER &quot;Le nombre choisi est inférieur au nombre aléatoire&quot;"/>
                    <item code="11#finsinon" algoitem="FIN_SINON"/>
                </item>
            </item>
            <item code="4#Choisis un nombre entre 1 et 100#0" algoitem="AFFICHER &quot;Choisis un nombre entre 1 et 100&quot;"/>
            <item code="2#userNumber#pasliste" algoitem="LIRE userNumber"/>
            <item code="5#counter#counter + 1#pasliste" algoitem="counter PREND_LA_VALEUR counter + 1"/>
            <item code="17#fintantque" algoitem="FIN_TANT_QUE"/>
        </item>
        <item code="19#si on arrive ici c'est que l'utilisateur a trouvé le bon nombre" algoitem="//si on arrive ici c'est que l'utilisateur a trouvé le bon nombre"/>
        <item code="4#Tu as trouvé en #0" algoitem="AFFICHER &quot;Tu as trouvé en &quot;"/>
        <item code="3#counter#0#pasliste" algoitem="AFFICHER counter"/>
        <item code="4# coups !#0" algoitem="AFFICHER &quot; coups !&quot;"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
