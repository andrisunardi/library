<?php

namespace Andrisunardi\Library;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Utils
{
    public static function boot()
    {
        Schema::defaultStringLength(191);

        Model::preventLazyLoading();
        Model::shouldBeStrict();

        if (app()->isProduction()) {
            URL::forceScheme('https');
        }
    }

    public static function phone(string $value = null): string
    {
        $value = Str::slug($value, '');

        if (Str::substr($value, 0, 3) == '021') {
            return Str::substrReplace($value, '62', 0, 1);
        }
        if (Str::substr($value, 0, 5) == '(021)') {
            return Str::substrReplace($value, '62', 0, 2);
        }
        if (Str::substr($value, 0, 1) == '0') {
            return Str::substrReplace($value, '62', 0, 1);
        }

        return $value;
    }

    public static function oddEven(string $value = null): string
    {
        return $value % 2 == 0 ? 'Even' : 'Odd';
    }

    public static function percentage(string $value = null): string
    {
        return round($value, 2);
    }

    public static function thousand(string $value = null): string
    {
        return number_format($value, 0, ',', '.');
    }

    public static function rupiah(string $value = null): string
    {
        return 'Rp. '.number_format($value, 0, ',', '.');
    }

    public static function idr(string $value = null): string
    {
        return 'IDR. '.number_format($value, 0, ',', '.');
    }

    public static function dollar(string $value = null): string
    {
        return '$ '.number_format($value, 0, ',', '.');
    }

    public static function yesNo(string $value = null): string
    {
        return $value ? 'Yes' : 'No';
    }

    public static function yaTidak(string $value = null): string
    {
        return $value ? 'Ya' : 'Tidak';
    }

    public static function active(string $value = null): string
    {
        return $value ? 'Active' : 'Inactive';
    }

    public static function aktif(string $value = null): string
    {
        return $value ? 'Aktif' : 'Tidak Aktif';
    }

    public static function show(string $value = null): string
    {
        return $value ? 'Show' : 'Not Shown';
    }

    public static function tampil(string $value = null): string
    {
        return $value ? 'Tampil' : 'Tidak Tampil';
    }

    public static function public(string $value = null): string
    {
        return $value ? 'Public' : 'Not Public';
    }

    public static function publik(string $value = null): string
    {
        return $value ? 'Publik' : 'Tidak Publik';
    }

    public static function pastor(string $value = null): string
    {
        return $value ? 'Pastor' : 'Not Pastor';
    }

    public static function subscribe(string $value = null): string
    {
        return $value ? 'Subscribe' : 'Unsubscribe';
    }

    public static function successDanger(string $value = null): string
    {
        return $value == 1 ? 'success' : 'danger';
    }

    public static function textSuccessDanger(string $value = null): string
    {
        return $value == 1 ? 'text-success' : 'text-danger';
    }

    public static function bgSuccessDanger(string $value = null): string
    {
        return $value == 1 ? 'bg-success' : 'bg-danger';
    }

    public static function formatSymbol(string $value, string $symbol): string
    {
        return Str::replace(['~', '`', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '[', '}', ']', '|', '\\', ':', ';', '"', "'", '<', ',', '>', '.', '?', '/', ' '], $symbol, $value);
    }

    public static function color(string $value = null): string
    {
        if ($value % 1 == 0) {
            $color = 'primary';
        }
        if ($value % 2 == 0) {
            $color = 'secondary';
        }
        if ($value % 3 == 0) {
            $color = 'info';
        }
        if ($value % 4 == 0) {
            $color = 'success';
        }
        if ($value % 5 == 0) {
            $color = 'warning';
        }
        if ($value % 6 == 0) {
            $color = 'danger';
        }

        return $color;
    }

    public static function logColor(string $value = null): string
    {
        if ($value == 1) {
            $color = 'primary';
        }
        if ($value == 2) {
            $color = 'success';
        }
        if ($value == 3) {
            $color = 'warning';
        }
        if ($value == 4) {
            $color = 'info';
        }
        if ($value == 5) {
            $color = 'danger';
        }

        return $color;
    }

    public static function formatBytes(string $value, $precision = 2): string
    {
        static $units = ['B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        $step = 1024;
        $i = 0;
        while (($value / $step) > 0.9) {
            $value = $value / $step;
            $i++;
        }

        return round($value, $precision).$units[$i];
    }

    public static function translate(string $value = null): string
    {
        return $value ? trans('index.'.Str::snake(Str::headline($value))) : null;
    }

    public static function setting(string $value = null): string
    {
        return DB::table('settings')->where('key', $value)->first()->value ?? null;
    }

    public static function code(string $prefix, string $table, int $digit, string $date = null): string
    {
        $data = DB::table($table)->latest('id')->first();
        $code = Str::afterLast($data?->code, $prefix);

        if ($date) {
            $date = Carbon::parse($date)->format('ymd');
            $code = DB::table($table)->where('code', 'like', "%{$date}%")->latest('id')->first();
            if ($code) {
                $code = Str::afterLast($code->code, $date);
            }
        }

        $increment = (int) $code + 1;
        $digit = sprintf("%0{$digit}d", $increment);

        return $prefix.$date.$digit;
    }
}