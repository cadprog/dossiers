<?php
 include 'template/header.php';
include "../Models/database.php";
 $db = new Database();
$allpubs = $db->getAllpub();
$pubs= $db->trie($allpubs);
?>
<body >

    <!--link rel="stylesheet" href="assets/css/style.css"-->
    <title>Liste Commentaires</title>

<div class="breadcrumbs">
 <marquee behavior="" direction=""><u><mark style="font-size: 28px">Commentaires!!!!</mark></u></marquee>
</div>

 <div class="content mt-3" style="background-color: #282C34; color:white">

<!--MILIEU-->



 <?php include "template/footer.php";?>