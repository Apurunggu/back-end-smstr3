<?php

# Membuat class Animal
class Animal
{
    # Property animals
    private $animals;

    # Method constructor - mengisi data awal
    # Parameter: data hewan (array)
    public function __construct()
    {
        # Mengisi data awal dengan array hewan
        $this->animals = ["Harimau", "Singa", "Kambing"];
    }

    # Method index - menampilkan data animals
    public function index()
    {
        # Gunakan foreach untuk menampilkan data animals (array)
        foreach ($this->animals as $animal) {
            echo $animal . "<br>";
        }
    }

    # Method store - menambahkan hewan baru
    # Parameter: hewan baru
    public function store($animal)
    {
        # Gunakan method array_push untuk menambahkan data baru
        array_push($this->animals, $animal);
    }

    # Method update - mengupdate hewan
    # Parameter: index dan hewan baru
    public function update($index, $animal)
    {
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $animal;
        } else {
            echo "Index tidak ditemukan!<br>";
        }
    }

    # Method destroy - menghapus hewan
    # Parameter: index
    public function destroy($index)
    {
        # Gunakan method unset untuk menghapus data array
        if (isset($this->animals[$index])) {
            unset($this->animals[$index]);
            # Re-index array setelah data dihapus
            $this->animals = array_values($this->animals);
        } else {
            echo "Index tidak ditemukan!<br>";
        }
    }
}

# Membuat object
$animal = new Animal();

echo "Index - Menampilkan seluruh hewan";
$animal->index();


echo "Store - Menambahkan hewan baru";
$animal->store('Burung');
$animal->index();


echo "Update - Mengupdate hewan ";
$animal->update(0, 'Kucing Anggora');
$animal->index();


echo "Destroy - Menghapus hewan";
$animal->destroy(1);
$animal->index();


?>
