<?= $this->extend('Template/auth_view') ?>
<?= $this->section('content_auth') ?>
<?php

$attributes = ['class' => 'w-1/4 py-16 px-8 shadow-lg rounded-lg'];

$labels = ['class' => 'absolute text-xl py-0 px-1 bg-white transition-all ease-in-out duration-300 text-gray-700 z-10 label'];

$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'input absolute top-0 left-0 h-full w-full text-base outline-none p-4 bg-transaparent z-10 border-2 border-google'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'value' => null,
    'class' => 'input absolute top-0 left-0 h-full w-full text-base outline-none p-4 bg-transaparent z-10 border-2 border-google'
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

<div class="bg-white flex justify-center items-center h-screen">
    <!-- Awal Login -->

    <?= form_open('Auth/Authorisasi/login', $attributes) ?>
        <img src="<?= base_url('img/Bonevian.png') ?>" alt="" class="w-32 mx-auto mb-2">
        <h1 class="m-0 font-normal mb-12 text-center text-xl">Login With Tailwind</h1>

        <div class="relative h-12 mb-6">
            <?= form_input($username) ?>
            <?= form_label("Username", "username", $labels) ?>
            <div class="flex justify-end">
                <svg class="w-6 h-6 text-google bg-white z-10 mt-3 mr-3" xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
        </div>

        <div class="relative h-12 mb-6">
            <?= form_password($password) ?>
            <?= form_label("Password", "password", $labels) ?>
            <div class="flex justify-end">
                <svg class="w-6 h-6 text-google bg-white z-10 mt-3 mr-3" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
        </div>

        </div>

    <?= form_close() ?>

     <!-- Akhir Login -->
</div>

    <?= $this->endSection() ?>
