<?php require '../resources/views/layout/html_header.blade.php' ?>


<?php require '../resources/views/layout/nav.blade.php' ?>

<div class="min-h-full">
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">TASQUES</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">

            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Id
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Description
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Completed
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($tasques as $tasca): ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6"><?= $tasca->id; ?></td>
                        <td class="py-4 px-6">
                                <?= $tasca->title; ?>
                        </td>
                        <td class="py-4 px-6">
                                <?= $tasca->description; ?>
                        </td>
                        <td class="py-4 px-6">
                                <?= $tasca->done; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<?php require '../resources/views/layout/footer.blade.php' ?>
