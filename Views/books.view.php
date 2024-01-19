<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<main>
    <div class="mx-auto max-w-7xl py-6 px-8">
        <p>Hello. Welcome to the Books page.</p>
        <ul class="my-3">
        <?php
        foreach ($books as $book) {
            $output = "<li>" . "<a href='/phpapp/book?id=". $book['ID'] . "&return=books' class='text-blue-500 hover:underline'>" . $book['title'] . "</a> by " . $book['author'] ."</li>";
            echo $output;
        } ?>
    </ul>
    </div>
</main>
<?php
require('partials/footer.php');
?> 
