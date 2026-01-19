<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book manager</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-950 text-stone-200">
  <header class="bg-stone-900">
    <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
      <div class="font-bold text-xl tracking-wide">Book Manager</div>
      <ul class="flex space-x-4 font-bold">
        <li>
          <a href="/" class="text-emerald-400">Explore</a>
        </li>
        <li>
          <a href="/my-books" class="hover:underline">My books</a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="/login" class="hover:underline">Log in</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg space-y-6">
    <?php require "views/{$view}.view.php"; ?>
  </main>
</body>

</html>