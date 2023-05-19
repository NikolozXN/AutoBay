<?php 
include_once 'classes/edit_user.php';
include_once 'classes/fetch.php';
$fetch = new Fetch();
$show = $fetch->show();
$sanitizedName = '';
$sanitizedEmail = '';
$sanitizedAge = '';
$sanitizedFeedback = '';
    $sanitizedName = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sanitizedEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $sanitizedAge = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sanitizedFeedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $edited = new Edit($show['id'], $sanitizedName, $sanitizedEmail, $sanitizedAge, $sanitizedFeedback);
    $result = $edited->edit();
    if($result){
    header('Location: index.php');
    };


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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        <div class="mb-6">
            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                Full name</label>
            <input type="text" id="fullname" name="fullname" value=""
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Jon Doe" required>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" name="email" value="<?php echo $sanitizedEmail; ?>"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-6">
            <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your age</label>
            <input type="number" id="age" name="age" value="<?php echo $sanitizedAge; ?>"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="23" required>
        </div>
        <div class="mb-6">
            <label for="feedback" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                feedback</label>
            <input type="text" id="feedback" name="feedback" value="<?php echo $sanitizedFeedback; ?>"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="I found my own car here!" required>
        </div>

        <button type="submit" name="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</body>

</html>