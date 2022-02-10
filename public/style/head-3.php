<?php $page = $_SERVER["REQUEST_URI"]?>
<?php trim($page, '/') ?>

</header>

<img src="/img/logo.png" id="logo" href="https://www.crunchyroll.com/" target="_blank" rel="noopener noreferrer">

<nav>

    <ul>

        <?php if($page === '/') {
            echo '<li> <a href="/" class="active"> Home </a> </li>';
        }else {
            echo '<li> <a href="/"> Home </a> </li>';
        }
        ?>

        <?php if($page === '/profile') {
            echo '<li> <a href="/profile" class="active"> Profile </a> </li>';
        }else {
            echo '<li> <a href="/profile"> Profile </a> </li>';
        }
        ?>

        <?php if($page === '/faq') {
            echo '<li> <a href="/faq" class="active"> FAQ </a> </li>';
        }else {
            echo '<li> <a href="/faq"> FAQ </a> </li>';
        }
        ?>

        <?php if($page === '/dashboard') {
            echo '<li> <a href="/dashboard" class="active"> Dashboard </a> </li>';
        }else {
            echo '<li> <a href="/dashboard"> Dashboard </a> </li>';
        }
        ?>

        <?php if($page === '/blog' || $page === '/blog/blog-post-company-safari' || $page === '/blog/blog-post-section-article' || $page === '/blog/blog-post-study-choice' || $page === '/blog/blog-post-stow' || $page === '/blog/blog-post-programming-experience' || $page === '/blog/blog-post-first-feedback') {
            echo '<li> <a href="/blog" class="active"> Blog </a> </li>';
        }else {
            echo '<li> <a href="/blog"> Blog </a> </li>';
        }
        ?>

    </ul>

</nav>

</div>

<br>
<br>
<br>
<br>
<br>
<br>
