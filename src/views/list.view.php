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
    <div class="h-16 w-full bg-[#323643] flex items-center justify-between px-2 md:px-14">
        <h2 class="text-white text-lg md:text-2xl font-bold">LIST OF ACCOUNTS:</h2>
        <a href="/" class="bg-[#93DEFF] text-[#323643] font-bold py-2 px-6 rounded-full border-2 border-[#93DEFF] hover:bg-transparent hover:text-white duration-300 flex items-center justify-center gap-2"><i class="fa-solid fa-plus text-lg"></i><span>Add Account</span></a>
    </div>
    <!-- //? END OF HEADER -->
    <!-- //? MAIN  -->
    <main class="-mt-16 flex flex-col min-h-screen justify-center m-auto px-4 lg:px-52">
        <!-- SEARCh -->
        <div class="w-full">
            <!-- <form action="/search" class="flex items-center justify-center gap-4" method="POST"> -->
            <div class="w-full flex flex-col gap-2">
                <div class="flex flex-col md:flex-row justify-between">
                    <h2 class="text-lg font-bold w-72">Filter by Department: </h2>
                    <select name="searchDepartment" id="department" class="w-full outline-none border-[1px] border-[#00000050] rounded-md bg-transparent text-lg pl-3">
                        <option value="None">All Departments</option>
                        <option value="DCS">DCS</option>
                        <option value="DIT">DIT</option>
                        <option value="DMS">DMS</option>
                        <option value="DTE">DTE</option>
                    </select>
                </div>
                <div class="flex flex-col md:flex-row justify-between md:gap-4">
                    <h2 class="text-lg font-bold">Search: </h2>
                    <input type="text" name="searchUser" id="searchUser" class="w-full outline-none border-[1px] border-[#00000050] rounded-md bg-transparent text-lg pl-4" placeholder="Enter Username">
                </div>
            </div>
            <!-- <button class="bg-[#323643] rounded-full"><i class="fa-solid fa-magnifying-glass p-2 text-white text-2xl"></i></button> -->
            <!-- </form> -->
        </div>
        <!-- Search Result -->
        <div class="my-4">
            <!-- TABLE -->
            <div class="my-4 ">
                <table class="bg-[#323643] text-white w-full rounded-md text-center px-4">
                    <tr class="text-xl">
                        <th class="py-2">Username</th>
                        <th class="py-2">Password</th>
                        <th class="py-2 hidden lg:block">Encrypted Password</th>
                        <th class="py-2 ">Department</th>
                        <th class="py-2 hidden md:block"></th>
                    </tr>
                    <tr>
                        <td colspan="5" class="px-2">
                            <div class="bg-white h-[1px] border-none"></div>
                        </td>
                    </tr>

                    <?php foreach ($accounts as $account) : ?>
                        <tr>
                            <td class="py-2 usernames"><?= $account['username'] ?></td>
                            <td class="py-2"><?= $account['password'] ?></td>
                            <td class="py-2 hidden lg:block"><?= $account['hashedPass'] ?></td>
                            <td class="py-2 department "><?= $account['department'] ?></td>
                            <td class="py-2 hidden md:block ">
                                <form action="" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="<?= $account['id'] ?>">
                                    <button class="bg-[#FF5858] py-1 px-2 rounded-md text-sm">Delete</button>
                                </form>
                                <!-- <a href="/delete.php?id=<?= $account['id'] ?>" name="delete" class="bg-[#FF5858] py-1 px-2 rounded-md text-sm">
                                        Delete
                                    </a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </main>

</body>

<script>
    addEventListener('input', () => {
        const searchUser = document.getElementById('searchUser').value.toLowerCase();
        const searchDepartment = document.getElementById('department').value;
        const showAccount = document.querySelectorAll('.usernames');

        showAccount.forEach((item) => {
            const row = item.closest('tr');
            const username = item.textContent.toLowerCase();
            const department = row.querySelector('.department').textContent;

            const usernameMatch = username.includes(searchUser);
            const departmentMatch = searchDepartment === 'None' || department === searchDepartment;

            // if (text.toLowerCase().includes(filter.toLowerCase())) {
            if (usernameMatch && departmentMatch) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        })
    });
</script>

</html>