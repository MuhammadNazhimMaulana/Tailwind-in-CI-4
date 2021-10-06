<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Admin Panel</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Untuk Tailwind -->
	<link rel="stylesheet" href="<?= base_url('css/app.css') ?>">

    <!-- Link Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body class="bg-gray-300 h-full text-gray-600 flex flex-col">

    <!-- Navbar -->
    <?= $this->include('Template/bars/navbar.php') ?>

    <div class="flex flex-1 min-h-screen">
        <!-- Side Bar -->
        <?= $this->include('Template/bars/sidebar.php') ?>

        <!-- Awal isi Auth -->
        <?= $this->renderSection('content_admin') ?>
        <!-- Akhir isi Auth -->
    </div>

    <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>
