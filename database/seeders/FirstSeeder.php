<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\pembayaran;
use App\Models\transfer;
use App\Models\User;
use App\Models\tarik_tunai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'arul',
            'email' => 'arul@mail.com',
            'password' => 'password',
            'no_rek' => 12345
        ]);

        User::create([
            'name' => 'zoe',
            'email' => 'zoe@mail.com',
            'password' =>'password',
            'no_rek' => 67890
        ]);

        User::create([
            'name' => 'aldy',
            'email' => 'aldy@mail.com',
            'password' =>'password',
            'no_rek' => 54321
        ]);

        Bank::create([
            'no_rek' => 12345,
            'saldo' => 5000000,
        ]);
        Bank::create([
            'no_rek' => 67890,
            'saldo' => 5000000,
        ]);
        Bank::create([
            'no_rek' => 54321,
            'saldo' => 5000000,
        ]);

        transfer::create([
            'no_rek_pengirim' => 12345,
            'no_rek_penerima' => 54321,
            'nominal' => 100000,
        ]);
        transfer::create([
            'no_rek_pengirim' => 67890,
            'no_rek_penerima' => 12345,
            'nominal' => 100000,
        ]);
        transfer::create([
            'no_rek_pengirim' => 54321,
            'no_rek_penerima' => 67890,
            'nominal' => 100000,
        ]);

        tarik_tunai::create([
            'no_rek' => 12345,
            'nominal' => 50000,
        ]);
        tarik_tunai::create([
            'no_rek' => 67890,
            'nominal' => 50000,
        ]);
        tarik_tunai::create([
            'no_rek' => 54321,
            'nominal' => 50000,
        ]);

        pembayaran::create([
            'no_rek' => 12345,
            'keterangan' => 'listrik',
            'nominal' => 100000,
            'no_pembayaran' => "821387219",
        ]);
        pembayaran::create([
            'no_rek' => 67890,
            'keterangan' => 'listrik',
            'nominal' => 100000,
            'no_pembayaran' => "821387324",
        ]);
        pembayaran::create([
            'no_rek' => 54321,
            'keterangan' => 'pulsa',
            'nominal' => 50000,
            'no_pembayaran' => "821384213",
        ]);



    }
}
