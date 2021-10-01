<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules

	// Bagian Register

	public $register = [
		'nama_lengkap' => [
			'rules' => 'required',
		],
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'alamat' => [
			'rules' => 'required',
		],
		'password' => [
			'rules' => 'required',
		],
		'password_confirm' => [
			'rules' => 'required|matches[password]',
		]
	];

	public $register_errors = [
		'nama_lengkap' => [
			'required' => '{field} Harus diisi',
		],
		'username' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimal 5 karakter,'
		],
		'alamat' => [
			'required' => '{field} Harus diisi',
		],
		'password' => [
			'required' => '{field} Harus diisi',
		],
		'password_confirm' => [
			'required' => '{field} Harus diisi',
			'matches' => '{field} Tidak sama dengan Password',
		]
	];

	// Bagian Login
	public $login = [
		'username' => [
			'rules' => 'required|min_length[3]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $login_errors = [
		'username' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimal 3 karakter,'
		],
		'password' => [
			'required' => '{field} Harus diisi',
		],
	];
    //--------------------------------------------------------------------
}
