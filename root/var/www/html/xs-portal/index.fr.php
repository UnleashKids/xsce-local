<!DOCTYPE html>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require 'incl/service_list.php'; ?>
<link rel="stylesheet" type="text/css" media="all" href="xs-portal.css" />
<HTML>
<HEAD>

<TITLE>Bienvenue sur le site de l’école</TITLE>

</HEAD>
<BODY>
<div id="wrapper">	
<h1>Bienvenue sur le site de l’école</h1>
<?php require 'incl/banner.html'; ?>

<div id="main"> 
<br><h2>Des documents intéressants que tu peux découvrir ici:</h2>

<h2>Wikipedia</h2>
<?php hard_link("/iiab/zim/iframe/schools-wikipedia-full-20081023-rc5", "Wikipedia for Schools", "Selection of 6.000 Wikipedia articles for school children","/library/knowledge/modules/wikipedia-zim/schools-wikipedia-full-20081023-rc5.zim"); ?>
<?php hard_link("/iiab/zim/iframe/wikipedia_en_all_nopic_01_2012", "Wikipedia in English", "The full English Wikipedia","/library/knowledge/modules/wikipedia-zim/wikipedia_en_all_nopic_01_2012.zim"); ?>
<?php hard_link("/iiab/zim/iframe/wikipedia_en_simple_all_08_2011", "Wikipedia in Simplified English", "For non-native speakers of English","/library/knowledge/modules/wikipedia-zim/wikipedia_en_simple_all_08_2011.zim"); ?>
<?php hard_link("/iiab/zim/iframe/wikipedia_fr_all_09_2012", "Wikipédia en français", "Wikipédia est une encyclopédie multilingue, universelle et librement diffusable.","/library/knowledge/modules/wikipedia-zim/wikipedia_fr_all_09_2012.zim"); ?>
<?php hard_link("/iiab/zim/iframe/wikipedia_ar_all_02_2013", "ويكيبيديا", "ويكيبيديا كاملة باللغة العربية","/library/knowledge/modules/wikipedia-zim/wikipedia_ar_all_02_2013.zim"); ?>
<?php hard_link("/iiab/zim/iframe/wikipedia_sw_all_04_2011", "Wikipedia katika Swahili", "Wikipedia ni kamusi elezo huru ya lugha nyingi katika mtandao.","/library/knowledge/modules/wikipedia-zim/wikipedia_sw_all_04_2011.zim"); ?>
<h2>Khan Academy</h2>
<?php hard_link("/iiab/video/khan/3", "Math Khan Academy", "Math Vidéos de la Khan Academy","/library/knowledge/modules/khanacademy/khanlinks/3"); ?>
<?php hard_link("/iiab/video/khan/4", "Science Khan Academy", "Sciences Vidéos de la Khan Academy","/library/knowledge/modules/khanacademy/khanlinks/4"); ?>
<h2>cartes</h2>
<?php hard_link("/iiab/static/map.html", "Open Street Maps", "Open Street Maps de Internet-in-a-Box","/library/knowledge/modules/openstreetmap/mod_tile64"); ?>
<h2>Other Content</h2>

<?php service_link("pathagar", "Lire des livres sur Pathagar", "Pathagar est un serveur qui contient une collection de livres que tu peux lire sans avoir à les télécharger depuis Internet."); ?>
<?php hard_link("/content/livkreyol", "Lire des livres en creole haitien", "Ici sont des livres et audio en creole haitien."); ?>
<?php hard_link("/content/syans", "Lire des livres de sciences", "Ici sont des livres educatifs sur sciences en creole haitien pour enfants de 7 - 9 ans."); ?>

<?php // iiab_link("Internet-in-a-Box", 
//                "Internet-in-a-Box contient une partie des plus importantes information disponibles sur Internet, comme Wikipedia.  Ces informations sont stockées localement pour que tu puisses les lire facilement.",
//                "Recherche de Internet-in-a-Box"); 
?>
<?php service_link("iiab", "Internet-in-a-Box", "Internet-in-a-Box contient une partie des plus importantes information disponibles sur Internet, comme Wikipedia.  Ces informations sont stockées localement pour que tu puisses les lire facilement."); ?>
<?php service_link("moodle", "Accueil Moodle", "Moodle est une collection de leçons et de contenus scolaires organisés pour t’aider à apprendre des choses fascinantes."); ?>
<?php service_link("upload", "Télécharge Fichiers", "A partir de ce lien, tu peux télécharger une variété de fichiers, des images, des activité."); ?>
<?php service_link("activity-server", "Télécharge une activité", "Tu peux ajouter une nouvelle activité sur ton XO depuis ce lien."); ?>

<BR> Bon Voyage!
</div><!-- #main -->
</div><!-- #wrapper -->
</BODY>
<script type="text/javascript" src="incl/xs-portal.js"></script>
</HTML>
