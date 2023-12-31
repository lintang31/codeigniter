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
            <?php $this->load->view('components/sidebar')?>
        </div>
        <div class="container mt-12">
            <?php $this->load->view('components/navbar')?>
            <div class="overflow-x-auto">
                <a href="<?php echo base_url('admin/tambah_siswa') ?>" class="btn btn-success m-2">
                    <i></i> Tambah
                    <a href="<?php echo base_url('admin/export') ?>" class="btn btn-success m-2">
                        <i></i> export
                    </a>
                    <table class="divide-y-2 divide-gray-200 bg-white text-sm w-full px-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    No
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Foto siswa
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Nama Siswa
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    NISN
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Gender
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-left">
                                    Kelas
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    Aksi
                                </th>
                                <th class="px-4 py-2"></th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            <?php $no=0; foreach($siswa as $row): $no++ ?>
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $no ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <img src="<?php echo base_url('images/siswa/'.$row->foto) ?>" width="50">
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nama_siswa ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nisn ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->gender ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <?php echo tampil_full_kelas_byid($row->id_kelas) ?></td>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-center">
                                    <a href="<?php echo base_url('admin/ubah_siswa/').$row->id_siswa?>"
                                        class="inline-block rounded bg-sky-600 px-4 py-2 text-xs font-medium text-white hover:bg-sky-700">
                                        Ubah
                                    </a>
                                    <button onclick="hapus(<?php echo $row->id_siswa ?>)"
                                        class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">
                                        Hapus
                                    </button>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <form class="mt-5" method="post" enctype="multipart/form-data"
                        action="<?php echo base_url('admin/import'); ?>">
                        <input type="file" name="file" />
                        <input type="submit" name="import"
                            class="inline-block rounded bg-green-600 px-4 py-2 text-xs font-medium text-white"
                            value="Import" />

                    </form>

            </div>
        </div>
    </div>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Di Hapus?');
        if (yes == true) {
            window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id;
        }
    }
    </script>
</body>

</html>