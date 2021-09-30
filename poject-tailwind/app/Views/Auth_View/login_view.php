<?= $this->extend('Template/Source/auth_looks') ?>
<?= $this->section('content_auth') ?>
<?php

$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Login',
    'class' => 'btn btn-danger w-50',
    'type' => 'submit'
];

$session = session();
$errors = $session->getFlashdata('errors');
?>

   <!-- Awal Login -->

    <!-- Akhir Login -->

    <?= $this->endSection() ?>
