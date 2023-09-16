<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex">
        <div>
            <?php $this->load->view('components/sidebar')?>
        </div>

        <div class="container mt-12">
            <?php $this->load->view('components/navbar')?>
            <div class="overflow-x-auto">
                <div class="grid grid-cols-4 gap-4 w-full">
                    <div class="h-32 rounded-lg bg-gray-100 w-60">
                        <p class="text-xl ml-4 mt-2 font-medium">Jumlah Kelas</p>
                        <p class="ml-4 mt-4 text-3xl font-semibold">13</p>
                    </div>
                    <div class="h-32 rounded-lg bg-gray-100 w-60">
                        <p class="text-xl ml-4 mt-2 font-medium">Jumlah Siswa</p>
                        <p class="ml-4 mt-4 text-3xl font-semibold">8</p>
                    </div>
                    <div class="h-32 rounded-lg bg-gray-100 w-60">
                        <p class="text-xl ml-4 mt-2 font-medium">Jumlah Mapel</p>
                        <p class="ml-4 mt-4 text-3xl font-semibold">9</p>
                    </div>
                    <div class="h-32 rounded-lg bg-gray-100 w-60">
                        <p class="text-xl ml-4 mt-2 font-medium">Jumlah Guru</p>
                        <p class="ml-4 mt-4 text-3xl font-semibold">36</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>