<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="flex h-screen flex-col justify-between border-e bg-gray-900 w-60 sticky top-0">
        <div class="px-4 py-6">
            <a href="<?php echo base_url('admin'); ?>" class="block rounded-lg px-4 py-2 text-xl font-bold text-white">
                Dashboard Admin
            </a>
            <ul class="mt-6 space-y-1">
                <li>
                    <a href="<?php echo base_url('admin'); ?>"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('admin/siswa'); ?>"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
                        Siswa
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/akun'); ?>"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">
                        akun
                    </a>
                </li>
            </ul>
            </details>
            </li>
            </ul>
        </div>

        <div class="sticky inset-x-0 bottom-0 border-t border-gray-900">
            <a href="<?php echo base_url('Auth/logout'); ?>"
                class="flex items-center gap-2 bg-gray-900 p-4 hover:bg-gray-700 text-white">
                <div>
                    <p class="text-base">
                        <strong class="block font-medium">Log out</strong>
                    </p>
                </div>
            </a>
        </div>
    </div>
</body>

</html>