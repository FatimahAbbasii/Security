<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hash driver that will be used to hash
    | passwords for your application. By default, the bcrypt algorithm is
    | used; however, you remain free to modify this option if you wish.
    |
    | Supported: "bcrypt", "argon"
    |
    */

    'driver' => 'bcrypt', // You can change this to 'argon2' if needed

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Password Hashing Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of rounds used by the bcrypt algorithm
    | when hashing passwords. This value determines the complexity of the
    | hashing process and is therefore important for its resistance to
    | brute-force attacks.
    |
    */

    'bcrypt' => [
        'rounds' => 10,
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options for the Argon password
    | hashing algorithm. These values are adjusted based on the needs of
    | your application and the hardware specifications of your server.
    |
    */

    'argon' => [
        'memory' => 1024,
        'threads' => 2,
        'time' => 2,
    ],

];

