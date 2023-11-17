<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<main>
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Welcome to the home page.</p>

    <ul class="my-3">
        <?php
        foreach ($books as $book) {
            echo "<li><strong>" . $book['title'] . "</strong> by <span>" . $book['author'] . "</span> with " . $book['pages'] ." pages</li>";
        } ?>
    </ul>
    </div>
</main>


<?php
require('partials/footer.php');
?>
