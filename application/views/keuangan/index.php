<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <style>
    body {
        background-image: url('https://media.istockphoto.com/id/585297216/id/foto/wallpaper-keren.jpg?s=612x612&w=0&k=20&c=Ftk5-DZwKVCF8Ntafqd8EFlF-vIl0uPzdfKYZXD8MK8=');
    }
    </style>
</body>

<body>
    <div class="flex">
        <div>
            <?php $this->load->view('components/sidebar_keuangan')?>
        </div>

        <div class="container mt-12">
            <?php $this->load->view('components/navbar_keuangan')?>
            <div class="overflow-x-auto">
                <div class="bg-pink-500 border p-6 rounded-lg relative">
                    <i class="fas fa-coins text-gray-600 text-6xl absolute right-4 top-9"></i>
                    <p class="text-white mb-2">Pembayaran SPP</p>
                    <p class="text-white text-2xl font-bold">1.300.000
                </div>
                <br>
            </div>
            <div class="bg-green-500 border p-6 rounded-lg relative">
                <i class="fas fa-coins text-gray-600 text-6xl absolute right-4 top-9"></i>
                <p class="text-white mb-2">Pembayaran uang Gedung</p>
                <p class="text-white text-2xl font-bold">1.500.000
            </div>
            <br>
            <div class="bg-blue-500 border p-6 rounded-lg relative">
                <i class="fas fa-coins text-gray-600 text-6xl absolute right-4 top-9"></i>
                <p class="text-white mb-2">Pembayaran Seregam</p>
                <p class="text-white text-2xl font-bold">900.000
            </div>
        </div>
    </div>
    </div>
    </div>
</body>


</html>