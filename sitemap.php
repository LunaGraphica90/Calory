<?php
/*******************************************/
/* E-Concept Applications - Site web       */
/* Copyright 2014 - E-Concept Applications */
/*******************************************/

header('Content-Type: text/xml; charset=UTF-8');

$pages = array("" => "1.0",
               "mentions-legales" => "0.1",
               "cgv" => "0.1");


echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?><?php
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

$timeHeader = filemtime("include/header.php");
$timeFooter = filemtime("include/footer.php");

foreach($pages AS $page => $priority) {
    if($page == "") {
        $fichierpage = "index.php";
    } else {
        $fichierpage = $page . ".php";
    }
    if (file_exists($fichierpage)) {
        $timePage = filemtime($fichierpage);
        echo "   <url>\n";
        echo "      <loc>https://calory.fr/";
        if($page != "") {
            echo $page.".html";
        }
        echo "</loc>\n";
        if($timeHeader > $timePage) {
            echo "      <lastmod>".date("Y-m-d", $timeHeader)."</lastmod>\n";
        } elseif($timeFooter > $timePage) {
            echo "      <lastmod>".date("Y-m-d", $timeFooter)."</lastmod>\n";
        } else {
            echo "      <lastmod>".date("Y-m-d", $timePage)."</lastmod>\n";
        }
        echo "      <changefreq>monthly</changefreq>\n";
        echo "      <priority>".$priority."</priority>\n";
        echo "   </url>\n";
    }
}
echo "</urlset>\n";

?>