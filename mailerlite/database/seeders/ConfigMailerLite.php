<?php

namespace Database\Seeders;

use App\Models\ConfigMailerLite as ModelsConfigMailerLite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigMailerLite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         ModelsConfigMailerLite::create([
            'apikey' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiOWJlOGM5OGJhMzlkOTZhMjAzOTBhOGVjNTUxNDNjOTVmNzE2YzlhYzJlZjNiZDcwMjQwZmQ1OTg5M2I2MzI2ZjE5YjVlZTFlMGY1Yjk4MjIiLCJpYXQiOjE2ODAyMDEwOTEuNjg2MzI4LCJuYmYiOjE2ODAyMDEwOTEuNjg2MzMxLCJleHAiOjQ4MzU4NzQ2OTEuNjgxOTk3LCJzdWIiOiI0MTM3NjIiLCJzY29wZXMiOltdfQ.ajfjRJ1MEOx60NtwjPl5qzaZLtQEWsbgrUmwJXTTb1W-Qe7QfAKtaT2DKlkJhcHWH9Wj6ifejAbT805QuURltjNxcv5PwJCV4gxCBXqKTup2BwnLfGXUxG3fajaKo0qGFsjL0ur8dTuqE5hljRgfIchbOJee_HPAFUmhO9woX3uzxCbDRr5GOch1ruy8H5Ayo2nrjStbQWs2WS_-XdASaGXZT3D0k3ywJlvxZwlRxFsxDv5kEZsEyWBd0mNYIjYBXjeP8FFlYkiVXM30pMqwbgRwy-76bE3fNvpVB5es7gR3OJj8ptc0CwO0_Xnf1N7RsYVXq4eKwCRZPUcP2fgCA_C96vox_6vRZbu5lj9CB9H_muCioiKpxMYPRhY3nKG-KiyYrVU36d3Sy16Mlh-zt7TCmFJ50ueD7A8VKAQYyxy8yK-3nOnQ5UjBeirjVBMd0mLTZFliohVEvCZ6MPSkQ-_dq3gakXyLPgKv1CLpbh90iNy72bFrKqrBk8DkIlDQ8Fo6paE07bxU3j6PJaoJ0C6LxhBiIspXNzqrAFk3cWKrs4V40qpfVWK9iXvl4YRIT30ngX2OHtu_gr9Wynv5JR2WRmBfh-X5K3a78hRhFWWDTX5pyg4LuA2hbTeQcZOdFaPdrMd0iP89MseFe0PsDr3_kAyvOoyx5GEpsTs8j1A'
        ]);

    }
}
