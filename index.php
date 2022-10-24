<html>
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>PHP Test</title>
  </head>
  <body>
    <?php include 'templates/header.php'; ?> <!-- header.php の読み込み -->
    <?php echo '<h1>Hello World!!</h1><br>
                <h2 style="color:red;"> >> phpinfo表示</h2>'; 
    ?>
    <section class="section is-medium">
      <h1 class="title">Large section</h1>
      <h2 class="subtitle">
        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
      </h2>
    </section>
    <?php include 'templates/footer.php'; ?> <!-- footer.php の読み込み -->
  </body>
</html>