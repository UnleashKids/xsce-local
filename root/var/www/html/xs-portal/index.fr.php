<!DOCTYPE html>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require 'incl/service_list.php'; ?>
<link rel="stylesheet" type="text/css" media="all" href="xs-portal.css" />
<HTML>
<HEAD>

<TITLE>Internet in a Box</TITLE>

</HEAD>
<BODY>
<div id="wrapper">	
<h1>Internet in a Box</h1>
<?php require 'incl/banner.html'; ?>

<div id="main"> 
<br><h2>Des documents intéressants que tu peux découvrir ici:</h2>

<h2>Collection de l' Internet</h2>
<?php hard_link("/rachel", "RACHEL", "contient une partie des plus importantes information disponibles sur Internet en anglais, comme Wikipedia.  Ces informations sont stockées localement pour que tu puisses les lire facilement."); ?>

<h2>autre Wikipedia</h2>
<?php hard_link("/iiab/zim/iframe/wikipedia_en_all_nopic_01_2012", "Wikipedia in English", "The full English Wikipedia","/library/knowledge/modules/wikipedia-zim/wikipedia_en_all_nopic_01_2012.zim"); ?>
<?php hard_link("/iiab/zim/iframe/wikipedia_fr_all_09_2012", "Wikipédia en français", "Wikipédia est une encyclopédie multilingue, universelle et librement diffusable.","/library/knowledge/modules/wikipedia-zim/wikipedia_fr_all_09_2012.zim"); ?>
<?php hard_link("/iiab/zim/iframe/wikipedia_ar_all_02_2013", "ويكيبيديا", "ويكيبيديا كاملة باللغة العربية","/library/knowledge/modules/wikipedia-zim/wikipedia_ar_all_02_2013.zim"); ?>
<?php hard_link("/iiab/zim/iframe/wikipedia_sw_all_04_2011", "Wikipedia katika Swahili", "Wikipedia ni kamusi elezo huru ya lugha nyingi katika mtandao.","/library/knowledge/modules/wikipedia-zim/wikipedia_sw_all_04_2011.zim"); ?>

<h2>cartes</h2>
<?php hard_link("/iiab/static/map.html", "Open Street Maps", "Open Street Maps de Internet-in-a-Box","/library/knowledge/modules/openstreetmap/mod_tile64"); ?>

<h2>AGSHS</h2>
<?php hard_link("/AGSHS", "Contenu de l'école", "documents de l'enseignant , les projets d'étudiants , des fichiers de support"); ?>
<?php hard_link("/info/AGSHS/solar", "(Dé)Charge solaire", "Graphiques batterie : nous aider à maintenir notre bibliothèque numérique sur !", "/home/site/AGSHS/solar"); ?>

<!--
<h2>autre contenu</h2>
<?php hard_link("/content", "parcourir autre contenu", "Ce est l'endroit pour les téléchargements locales."); ?>
-->
<BR> Bon Voyage!
</div><!-- #main -->
</div><!-- #wrapper -->
</BODY>
<script type="text/javascript" src="incl/xs-portal.js"></script>
</HTML>
