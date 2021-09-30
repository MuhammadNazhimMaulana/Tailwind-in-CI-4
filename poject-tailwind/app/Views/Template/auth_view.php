<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Untuk Tailwind -->
	<link rel="stylesheet" href="<?= base_url('css/app.css') ?>">

<body>
    
    <!-- Awal isi Auth -->
    <?= $this->renderSection('content_auth') ?>
    <!-- Akhir isi Auth -->

</body>
</html>
