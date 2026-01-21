<?php echo $book->title ?>
<div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
  <div class="flex">
    <div class="w-1/3">image</div>
    <div class="w-2/3 space-y-1">
      <a href="/book?id=<?php echo $book->id ?>" class="font-semibold hover:underline"><?php echo $book->title ?></a>
      <div class="text-xs italic"><?php echo $book->author ?></div>
      <div class="text-xs italic">⭐️⭐️⭐️⭐️⭐️(3 stars)</div>
    </div>
  </div>
  <div class="text-sm mt-2">
    <?php echo $book->description ?>
  </div>
</div>