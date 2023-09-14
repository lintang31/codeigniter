<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="my-5 text-2xl font-bold">Selamat Datang <?php echo $this->session->userdata('username')?></h1>
    <a href="<?php echo base_url('auth/logout');?>"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Logout
    </a>
</body>

</html>