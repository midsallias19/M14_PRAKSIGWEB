<?php
function fibonacci (int $jumlahBilangan) {
    #array ini akan digunakan untuk menampung bilangan fibonacci
    $fibonacci = [];
    if ($jumlahBilangan < 0) {
        #langsung hentikan fungsi jika $jumlahBilangan kurang dari 0
        return $fibonacci;
    }
    #mulai perulangan
    for ($i = 0; $i < $jumlahBilangan; $i++)    {
        if ($i < 2) {
            $bilangan = $i;
        } else {
            $bilangan = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

    #tambahkan $bilangan ke dalam array fibonacci
    array_push($fibonacci, $bilangan) ;
    }
    return $fibonacci;
}

#panggil fungsi fibonacci dengan berbagai parameter
echo implode(" ", fibonacci(5)) . '<br>';
echo implode(" ", fibonacci(8)) . '<br>';
echo implode(" ", fibonacci(10)) . '<br>';
echo implode(" ", fibonacci(13)) . '<br>';

?>