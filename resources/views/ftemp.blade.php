<?php require "style/head-1.php"; ?>

<title>

    FAQ

</title>

<meta name="description" content="David Garcia's Website FAQ Page">

</head>

<?php require "style/head-2.php"; ?>

<h2>

    FAQ Page

</h2>

<?php require "style/head-3.php"; ?>

@foreach ($faqs as $faq)
     <?= $faq->question; ?>
     <?= $faq->answer; ?>
 @endforeach

<hr>

<?php require "style/footer.php"; ?>
