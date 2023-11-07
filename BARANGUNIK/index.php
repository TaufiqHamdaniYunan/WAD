<?php


$conn = mysqli_connect('localhost','root','','UniqueItemsDB');
$result = mysqli_query($conn,'SELECT * FROM UniqueItems');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $deleteQuery = mysqli_query($conn, "DELETE FROM UniqueItems WHERE item_id = $id");
    if ($deleteQuery) {
        echo "
            <script>
                alert('Data berhasil dihapus!');
                window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus. Silakan ulangi.');
                window.location.href = 'index.php';
            </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="">

</div>

    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-semibold mb-4">Daftar Barang Unik</h1>
        <a href="tambah.php" class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah data</a>

    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
        <?php foreach ($result as $row) : ?>
        <div class="bg-white border border-gray-200 rounded p-4 shadow-lg">
            <h2 class="text-lg font-semibold mb-2"><?php echo $row['item_name']; ?></h2>
            <p class="text-gray-600 mb-2"><?php echo $row['item_description']; ?></p>
            <p class="text-gray-600 mb-2"><strong>Kategori:</strong> <?php echo $row['item_category']; ?></p>
            <p class="text-gray-600 mb-2"><strong>Kondisi:</strong> <?php echo $row['item_condition']; ?></p>
            <p class="text-gray-600 mb-2"><strong>Harga:</strong> <?php echo $row['item_price']; ?></p>
            <p class="text-gray-600 mb-2"><strong>Pemilik:</strong> <?php echo $row['item_owner']; ?></p>
            <img src="<?php echo $row['item_image_url']; ?>" alt="Barang" class="w-full h-32 object-cover mb-2">
            <p class="text-gray-600 mb-2"><strong>Lokasi:</strong> <?php echo $row['item_location']; ?></p>
            <div class="flex justify-between">
                <div>
                    <a href="update.php?id=<?= $row['item_id']; ?>" class="text-blue-500 hover:underline mr-2">Update</a>
                    <a href="index.php?delete=<?= $row['item_id']; ?>" class="text-red-500 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Delete</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>



</body>
</html>
    