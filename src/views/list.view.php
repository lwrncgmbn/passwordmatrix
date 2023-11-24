<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accounts</title>
    <link rel="stylesheet" href="src\views\css\output.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-[Poppins]">
    <!-- //? HEADER -->
    <div class="h-16 w-full bg-[#323643] flex items-center justify-end px-2 md:px-14">
        <a href="/" class="bg-[#93DEFF] text-[#323643] font-bold py-2 px-6 rounded-full border-2 border-[#93DEFF] hover:bg-transparent hover:text-white duration-300 flex items-center justify-center gap-2"><i class="fa-solid fa-plus text-lg"></i><span>Add Account</span></a>
    </div>
    <!-- //? END OF HEADER -->
    <!-- //? MAIN  -->
    <main class="-mt-16 flex flex-col min-h-screen justify-center max-w-7xl m-auto px-4">
        <!-- SEARCh -->
        <div class="w-full">
            <form action="/search" class="flex items-center gap-4" method="POST">
                <h1 class="text-lg font-bold">Search: </h1>
                <input type="text" name="searchUser" class="w-full outline-none border-[1px] border-[#00000050] rounded-md bg-transparent text-lg pl-4" placeholder="Enter Username">
                <button class="bg-[#323643] rounded-full"><i class="fa-solid fa-magnifying-glass p-2 text-white text-lg"></i></button>
            </form>
        </div>
        <!-- Search Result -->
        <div class="my-4">
            <?php if ($searchUser == "") : ?>
                <h2 class="text-[#606470] font-bold text-sm">Showing a total of <?= count($accounts) ?> accounts.</h2>
            <?php else : ?>
                <h2 class="text-[#606470] font-bold text-sm">Showing <?= count($searchAccounts) ?> result/s with the username "<?= $searchUser ?>"</h2>
            <?php endif; ?>
            <!-- TABLE -->
            <div class="my-4">
                <table class="bg-[#323643] text-white w-full rounded-md text-center">
                    <tr class="text-xl">
                        <th class="py-2">Username</th>
                        <th class="py-2">Hashed Password</th>
                        <th class="py-2">Password</th>
                    </tr>
                    <tr>
                        <td colspan="3" class="px-2">
                            <div class="bg-white h-[1px] border-none"></div>
                        </td>
                    </tr>
                    <?php if ($searchUser == "") : ?>
                        <?php foreach ($accounts as $account) : ?>
                            <tr>
                                <td class="py-2"><?= $account['username'] ?></td>
                                <td class="py-2"><?= $account['hashedPass'] ?></td>
                                <td class="py-2"><?= $account['password'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <?php foreach ($searchAccounts as $searchAccount) : ?>
                            <tr>
                                <td class="py-2"><?= $searchAccount['username'] ?></td>
                                <td class="py-2"><?= $searchAccount['hashedPass'] ?></td>
                                <td class="py-2"><?= $searchAccount['password'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </table>
            </div>
        </div>
    </main>

</body>

<script>

</script>

</html>