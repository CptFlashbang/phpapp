<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<main>
  <div class="w-6/12 py-6 px-8">
    <p>This book has ID <?= htmlspecialchars($_GET['id']) ?></p>
    <p>By <?= $book['author'] ?></p>
    <p class="mb-2">Total Pages <?= $book['pages'] ?> </p>
    <img class="w-2/5 max-w-[300px]" src="<?= $book['imageURL'] ?>" alt="<?= $book['title'] ?>">
    <a class="btn mt-4" href="<?= $book['link'] ?>">More details on <?= $book['title'] ?></a>
  </div>
  <p class="ml-4 mb-6">
    <a href="/phpapp/<?= $returnURL ?>" class="text-blue-500 underline">go back...</a>
  </p>
</main>

<?php
require('partials/footer.php');
?>
