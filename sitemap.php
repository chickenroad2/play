<?php header("Content-Type: application/xml; charset=utf-8");
$domain = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http";
$domain .= "://".$_SERVER["HTTP_HOST"];
echo str_replace("##SITE_DOMAIN##", $domain, '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc>##SITE_DOMAIN##/beach-challenge.html</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/blog/discover-ancient-wonders-greece.html</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/blog</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/blog/journey-through-mystical-mountains-peru.html</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/blog/safari-adventure-heart-africa.html</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/cultural-odyssey.html</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>/</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/nature-explorer.html</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/privacy-policy-plinko-trek-games.html</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/urban-quest.html</loc>
<lastmod>2025-01-14T12:21:57+00:00</lastmod>
<priority>0.90</priority>
</url>
</urlset>');
