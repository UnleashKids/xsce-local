<!DOCTYPE html>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require 'incl/service_list.php'; ?>
<link rel="stylesheet" type="text/css" media="all" href="xs-portal.css" />
<HTML>
<HEAD>

<TITLE>Internet-in-a-Box</TITLE>

</HEAD>
<BODY>
<div id="wrapper">
	<div id="xsBanner">
    <?php require 'incl/banner.html'; ?>
  	<div>
	    <h1>Internet-in-a-Box</h1>
      <h3>School Server powered by XSCE</h3>
	  </div>
  </div>
  <div style="clear:both";></div>

<div id="main">
<br><h2>Interesting Things:</h2>

<div class="xsMenuHeading">
	<img src="/common/images/220px-Wikipedia-logo-v2.svg.png">
	<h2>Wikipedia, Gutenberg Books, Wiktionaries</h2>
</div>

<!-- <h2>More Wikipedias</h2>-->

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/wikipedia_en_all_2015-05/" target="_blank">Full English Wikipedia</a></div>
  <div class="xsServiceDesc">The complete English Wikipedia as of May 2015.</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/wiktionary_en_all_2015-05/" target="_blank">English Dictionary</a></div>
  <div class="xsServiceDesc">The English Wiktionary.</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/wikipedia_en_for_schools_opt_2013/" target="_blank">Wikipedia for Schools</a></div>
  <div class="xsServiceDesc">6000 articles selected for school children.</div>
</div>

<!--
<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/wikipedia_ar_all_2015-05/" target="_blank">Wikipedia in Arabic</a></div>
  <div class="xsServiceDesc">The Wikipedia in Arabic as of May 2015.</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/wikipedia_fr_all_2015-03/" target="_blank">Wikipedia in French</a></div>
  <div class="xsServiceDesc">The Wikipedia in French as of March 2015.</div>
</div>
-->

<?php hard_link("/rachel", "RACHEL", "Remote Area Community Hotspot for Education and Learning: best free materials from the Internet!"); ?>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/gutenberg_en_all_10_2014/" target="_blank">Project Gutenberg</a></div>
  <div class="xsServiceDesc">Collection of English classic literature.</div>
</div>

<div class="xsMenuHeading">
	<img src="/common/images/ted-talks-logo-150x150.jpg">
	<h2>Conferences on Technology, Entertainment, Design.</h2>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/ted_en_business_2015-02/" target="_blank">Business</a></div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/ted_en_design_2015-02/" target="_blank">Design</a></div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/ted_en_entertainment_2015-02/" target="_blank">Entertainment</a></div>
</div>
<BR>
<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/ted_en_global_issues_2015-02/" target="_blank">Global Issues</a></div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/ted_en_science_2015-02/" target="_blank">Science</a></div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/ted_en_technology_2015-02/" target="_blank">Technology</a></div>
</div>
<BR><BR>


<!--
<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000" target="_blank">KIWIX</a></div>
  <div class="xsServiceDesc">Special Wikipediae, Wiktionaries, TED Talks, and quality offline content.</div>
</div>
-->

<div class="xsMenuHeading">
	<img src="/common/images/khan-logo-vertical-transparent.png">
	<h2>Khan Academy</h2>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:8008" target="_blank">KA Lite</a></div>
  <div class="xsServiceDesc">Offline version of Khan Academy.</div>
</div>
<!--
<?php hard_link("/iiab/zim/iframe/wikipedia_sw_all_04_2011", "Wikipedia katika Swahili", "Wikipedia ni kamusi elezo huru ya lugha nyingi katika mtandao.","/library/knowledge/modules/wikipedia-zim/wikipedia_sw_all_04_2011.zim"); ?>
-->
<div class="xsMenuHeading">
	<img src="/common/images/osm.jpg">
	<h2>Maps</h2>
</div>

<?php hard_link("/iiab/static/map.html", "OpenStreetMap", "Maps of the entire world from Internet-in-a-Box.","/library/knowledge/modules/openstreetmap/mod_tile64"); ?>

<h2>Collaboration</h2>
<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver/owncloud" target="_blank">ownCloud</a></div>
  <div class="xsServiceDesc">Offline file sharing, calendaring, and collaboration for teachers especially.</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver/elgg" target="_blank">Elgg</a></div>
  <div class="xsServiceDesc">Offline social media for students especially.</div>
</div>

<?php hard_link("/content", "Access Other Content", "TestPrep PDFs and a growing  list of documents."); ?>

<h2>Tools for Administrators</h2>
<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:5984/xovis/_design/xovis-couchapp/index.html" target="_blank">XOvis</a></div>
  <div class="xsServiceDesc">Graphs statistics on XO use of Activities.</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver/munin" target="_blank">Munin</a></div>
  <div class="xsServiceDesc">Drill down to monitor server performance.</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver/admin" target="_blank">Admin Console</a></div>
  <div class="xsServiceDesc">Graphically facilitates control of the server.</div>
</div>

<h2>Temporary Passwords</h2>
<ul>
	<li>KA Lite: kalite/kalite</li>
	<li>ownCloud: Admin/changeme</li>
	<li>Elgg: Admin/changeme</li>
	<li>Munin: admin/munindxs</li>
	<li>Admin Console: x<a href="/software" target="_blank">s</a>ce-admin</li>
</ul>


<!--
<h2>Other Content</h2>
<?php hard_link("/content", "Browse Other Content", "This is the place for local downloads."); ?>
-->
<BR><B> Enjoy Exploring & Building Your Library! &nbsp; <I>volunteer@unleashkids.org</I></B>
</div><!-- #main -->
</div><!-- #wrapper -->
</BODY>
<script type="text/javascript" src="incl/xs-portal.js"></script>
</HTML>
