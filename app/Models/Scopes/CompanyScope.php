<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Filament\Facades\Filament;

class CompanyScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        // ⛔ jangan jalan di artisan / migrate / queue
        if (app()->runningInConsole()) {
            return;
        }

        // ⛔ pastikan Filament panel aktif
        if (! Filament::getCurrentPanel()) {
            return;
        }

        $user = Filament::auth()->user();

        // ⛔ belum login
        if (! $user) {
            return;
        }

        // ⛔ pastikan user memiliki company_id
        if (is_null($user->company_id)) {
            // Anda bisa memilih untuk tidak menerapkan scope atau menambahkan kondisi yang selalu false
            // Misalnya: $builder->whereRaw('1=0'); // agar tidak menampilkan data apapun
            return;
        }

        // ⛔ pastikan model memiliki kolom company_id di tabelnya
        // Cara 1: Cek di fillable (tapi tidak selalu kolom ada di fillable)
        // Cara 2: Cek langsung di schema database
        // Karena cek schema bisa berat, kita bisa asumsikan bahwa jika model memiliki fillable company_id atau kolom company_id ada di tabel.
        // Alternatif: kita bisa cek dengan metode hasColumn (tapi perlu koneksi database)
        // Berikut adalah contoh yang lebih fleksibel:

        // Cek apakah model memiliki atribut company_id (baik di fillable atau tidak) dengan mengecek kolom di tabel
        // Namun, mengecek schema setiap apply scope bisa berat. Sebaiknya kita optimalkan dengan cache atau asumsi.
        // Jika Anda yakin bahwa model yang akan menggunakan scope ini selalu memiliki kolom company_id, maka Anda bisa lewati pengecekan ini.
        // Tapi jika tidak, kita bisa lakukan pengecekan.

        // Contoh pengecekan kolom di tabel (hati-hati dengan performance):
        $hasColumn = $model->getConnection()->getSchemaBuilder()->hasColumn($model->getTable(), 'company_id');
        if (! $hasColumn) {
            return;
        }

        $builder->where(
            $model->getTable() . '.company_id',
            $user->company_id
        );
    }
}