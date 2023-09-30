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
    <div class="flex">
        <div>
            <?php $this->load->view('components/sidebar_keuangan')?>
        </div>
        <div class="container mt-12">
            <?php $this->load->view('components/navbar_keuangan')?>
            <div class="overflow-x-auto">
                <a href="<?php echo base_url('keuangan/tambah_pembayaran') ?>"
                    class="inline-block rounded bg-green-600 px-4 py-2 text-xs font-medium text-white hover:bg-pink-700">
                    <i></i> Tambah
                </a>
                <table class="divide-y-2 divide-gray-200 bg-white text-sm w-full px-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                No
                            </th>
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                Siswa
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                jenis pembayaran
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                total pembayaran
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                Aksi
                            </th>
                            <th class="px-4 py-2"></th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <?php $no=0; foreach($pembayaran as $row): $no++ ?>
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $no ?></td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo nama_siswa(
                                $row->id_siswa
                            ); ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->jenis_pembayaran ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                <?php echo convRupiah($row->total_pembayaran) ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('keuangan/ubah_pembayaran/') . $row->id ?>"
                                    class="inline-block rounded bg-pink-600 px-4 py-2 text-xs font-medium text-white hover:bg-green-700">
                                    Ubah
                                </a>
                                <button onClick="hapus(<?php echo $row->id; ?>)"
                                    class="inline-block rounded bg-yellow-600 px-4 py-2 text-xs font-medium text-white hover:bg-violet-700">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Di Hapus?');
        if (yes == true) {
            window.location.href = "<?php echo base_url('keuangan/hapus_pembayaran/')?>" + id;
        }
    }
    </script>
</body>

</html>