<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER noteMoyenne" texte="Bulletin de notes&#xa;&#xa;L'algo génère une liste de 10 notes aléatoires entre 0 et 20 qu'on stocke dans une variable de type liste&#xa;&#xa;Les objectifs sont :&#xa;- afficher la meilleure note&#xa;- afficher la note la plus basse&#xa;- afficher la moyenne des notes "/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2lignes="" F2etat="inactif" F2defaut="" F2para=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurLigne="2" nbDecimales="8" totalAffichages="1000" epaisseurPoint="2" arrondiAuto="vrai" totalBoucles="5000000" maxBoucle="500000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#LISTE#listeNotes" algoitem="listeNotes EST_DU_TYPE LISTE"/>
        <item code="1#NOMBRE#position" algoitem="position EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#noteMax" algoitem="noteMax EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#noteMin" algoitem="noteMin EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#noteMoyenne" algoitem="noteMoyenne EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="12#position#0#9" algoitem="POUR position ALLANT_DE 0 A 9">
            <item code="13#debutpour" algoitem="DEBUT_POUR"/>
            <item code="5#listeNotes#ALGOBOX_ALEA_ENT(0,20)#position" algoitem="listeNotes[position] PREND_LA_VALEUR ALGOBOX_ALEA_ENT(0,20)"/>
            <item code="3#listeNotes#1#position" algoitem="AFFICHER listeNotes[position]"/>
            <item code="14#finpour" algoitem="FIN_POUR"/>
        </item>
        <item code="5#noteMin#ALGOBOX_MINIMUM(listeNotes,0,9)#pasliste" algoitem="noteMin PREND_LA_VALEUR ALGOBOX_MINIMUM(listeNotes,0,9)"/>
        <item code="4#La note minimum est : #0" algoitem="AFFICHER &quot;La note minimum est : &quot;"/>
        <item code="3#noteMin#1#pasliste" algoitem="AFFICHER noteMin"/>
        <item code="5#noteMax#ALGOBOX_MAXIMUM(listeNotes,0,9)#pasliste" algoitem="noteMax PREND_LA_VALEUR ALGOBOX_MAXIMUM(listeNotes,0,9)"/>
        <item code="4#La note maximum est : #0" algoitem="AFFICHER &quot;La note maximum est : &quot;"/>
        <item code="3#noteMax#1#pasliste" algoitem="AFFICHER noteMax"/>
        <item code="5#noteMoyenne#ALGOBOX_MOYENNE(listeNotes,0,9)#pasliste" algoitem="noteMoyenne PREND_LA_VALEUR ALGOBOX_MOYENNE(listeNotes,0,9)"/>
        <item code="4#La moyenne des notes est : #0" algoitem="AFFICHER &quot;La moyenne des notes est : &quot;"/>
        <item code="3#noteMoyenne#1#pasliste" algoitem="AFFICHER noteMoyenne"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
