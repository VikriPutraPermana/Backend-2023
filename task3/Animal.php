<?php

# membuat class Animal
class Animal
{
    # property animals
    public $animals;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        # Menginisialisasi properti $animals dgn data yang diberikan saat buat objek.
        $this->animals = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        # Gunakan foreach untuk menampilkan data animals (array) satu per satu.
        echo "List of Animals:";
        foreach ($this->animals as $animal) {
            echo $animal . "," ;
        }
        echo "<br>";

    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        # Method array_push untuk menambahkan data baru ke dalam array $animals.
        array_push($this->animals, $data);
        echo "Berhasil Menambahkan Hewan! <br>";

    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        # Mengganti data di indeks tertentu dengan data baru.
        if(isset($this->animals[$index])){
            $this->animals[$index] = $data;
            echo "Berhasil Mengudate Hewan! <br>";
        }
        else {
            echo "Gagal Mengupdate Hewan! <br>";
        }

    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # Menghapus data di indeks tertentu menggunakan unset.
        if(isset($this->animals[$index])){
        array_splice($this->animals, $index, 1);
        echo "Berhasil Menghapus Hewan! <br>";
    }
    else {
        echo "Gagal Menghapus Hewan!";
    }
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["Unta", "Kambing", "Sapi"]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('Ayam');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kelinci');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";