<?php ob_start() ?>

<title>DK-CASSE | Nous contacter</title>

<body>
  <div class="container">
    <h1 class="mt-5">Nous contacter</h1>

    <div class="border rounded border-dark" style="background-color: #f5f5f5; padding: 30px">
    <form>
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control border border-dark" id="nom" name="nom" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control border border-dark" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control border border-dark" id="message" name="message" rows="5" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
</div>

</body>
</html>

<?php $content = ob_get_clean();
require 'template.php' ?>