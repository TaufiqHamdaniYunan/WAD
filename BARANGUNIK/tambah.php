<?php

$conn = mysqli_connect('localhost','root','','UniqueItemsDB');


// CREATE - Menambahkan barang baru
if (isset($_POST['tambah'])) {

    $item_name = $_POST['item_name'];
    $item_description = $_POST['item_description'];
    $item_category = $_POST['item_category'];
    $item_condition = $_POST['item_condition'];
    $item_price = $_POST['item_price'];
    $item_owner = $_POST['item_owner'];
    $item_image_url = $_POST['item_image_url'];
    $item_location = $_POST['item_location'];

    $sql = "INSERT INTO UniqueItems 
        (item_name, item_description, item_category, item_condition, item_price, item_owner, item_image_url, item_location)
        VALUES ('$item_name', '$item_description', '$item_category', '$item_condition', $item_price, '$item_owner', '$item_image_url', '$item_location')";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "
            <script>
                alert('Data berhasil di tambahkan !');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal di tambah !');
                document.location.href = 'index.php';
            </script>
        ";
    }
}


?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow mt-4">
    <h1 class="text-2xl font-semibold mb-4">Tambah Barang</h1>
    <form action="" method="POST" class="space-y-4" onsubmit="return confirmUpdate();" >
        <div>
            <label for="item_name" class="block">Nama Barang:</label>
            <input type="text" name="item_name" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="item_description" class="block">Deskripsi Barang:</label>
            <textarea name="item_description" rows="4" required class="w-full p-2 border border-gray-300 rounded"></textarea>
        </div>

        <div>
            <label for="item_category" class="block">Kategori Barang:</label>
            <input type="text" name="item_category" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="item_condition" class="block">Kondisi Barang:</label>
            <input type="text" name="item_condition" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="item_price" class="block">Harga Barang:</label>
            <input type="number" name="item_price" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="item_owner" class="block">Pemilik Barang :</label>
            <input type="text" name="item_owner" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="item_image_url" class="block">URL Gambar Barang:</label>
            <input type="text" name="item_image_url" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="item_location" class="block">Lokasi Barang:</label>
            <input type="text" name="item_location" required class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <input type="submit" name="tambah" value="Tambah Barang" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 cursor-pointer">
        </div>
    </form>
</div>

    
</body>
<script>
    function confirmUpdate() {
        return confirm("Apakah Anda yakin ingin menambah data?");
    }
</script>
</html>