<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

//appel du template twig via la methode Render.

echo $twig->render('products.html.twig', ['products'=>$products]);

?>