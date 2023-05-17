<?php include_once 'classes/fetch.php'?>
<?php 
$newuser = new Fetch();
$myuser = $newuser->show();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AutoBay</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/main.css" rel="stylesheet" />
</head>

<body>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User age
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User feedback
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($myuser as $item):?>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $item['fullname'];?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $item['email'];?>

                    </td>
                    <td class="px-6 py-4">
                        <?php echo $item['age'];?>

                    </td>
                    <td class="px-6 py-4">
                        <?php echo $item['feedback'];?>

                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="edit.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                    </td>


                </tr>
                <?php endforeach;?>
                <a href="create.php"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</a>
            </tbody>
        </table>
    </div>


</body>

</html>