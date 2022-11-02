<?php require '../resources/views/layout/html_header.blade.php'; ?>
<?php require '../resources/views/layout/nav.blade.php'; ?>

<div class="min-h-full">
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">USERS</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">

            <h1 class="mt-5 mb-5"><?= $greeting; ?></h1>

            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Id
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6"><?= $user->id; ?></td>
                        <td class="py-4 px-6">
                                <?= $user->name; ?>
                        </td>
                        <td class="py-4 px-6">
                                <?= $user->email; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>







<?php require '../resources/views/layout/footer.blade.php'; ?>
