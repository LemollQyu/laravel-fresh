<?php

// function ini bisa dipanggil jika sudah di definisikan di composer.json
// dan di composer dump-autoload

if(!function_exists('formatRupiah')) {
    function formatRupiah(float $number) {
        return 'Rp. ' . number_format($number);
    }
}
