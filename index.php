
<?php 

require 'emp.php';
if(isset( $_POST['first_name'])&& isset($_POST['last_name'])&& isset( $_POST['naissance'])&& isset($_POST['Nationalité'])&& isset($_POST['Genre'])){
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $naissance = $_POST['naissance'];
    $Nationalité = $_POST['Nationalité'];
    $Genre = $_POST['Genre'];
    if (empty($firstName)||empty($lastName)||empty($naissance)||empty($Nationalité)||empty($Genre)) {
     echo 'folder is empty';
    }else{
        mysqli_query($con, "INSERT INTO logintbs (firstName, lastName, naissance, Nationalité, Genre) VALUES ('$firstName', '$lastName', '$naissance', '$Nationalité', '$Genre')");
        echo 'done';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Bancaire en PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <h1 class="text-center text-red-500"></h1>
    <form class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md" action="" method ="POST">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    First Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane" name="first_name">
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
                    Last Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" name="last_name">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password" >
                date de naissance
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="date" placeholder="" name="naissance">
                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                Nationalité
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Nationalité" name="Nationalité">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                Genre
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="Genre">
                        <option>F</option>
                        <option>M</option>
                       
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="flex justify-end">
            <input type="submit" value="add" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded" name="add">
        </div>
    </form>

    <!-- Tailwind CSS Playground : https://play.tailwindcss.com/ATVteKFRxw -->

<figure class="absolute my-[100px]">
    <div class="credit-card w-max h-max relative select-none pointer-events-none">
        <!-- Card verso -->
        <div
            class="verso z-1 absolute overflow-hidden transform translate-y-12 left-16 w-96 h-56 rounded-2xl bg-gray-400 shadow-2xl">
            <div class="w-full h-12 bg-gray-200 absolute top-10">&nbsp;</div>
        </div>

        <!-- Card recto -->
        <div
            class="recto z-2 absolute overflow-hidden w-96 h-56 rounded-2xl px-8 py-6 bg-black text-white shadow-xl flex flex-col justify-end gap-6">
            <!-- Visa logo -->
            <div class="logo absolute top-6 right-8 w-16 h-8 flex justify-items-center items-center">
                <svg viewBox="0 0 1000 324.68">
                    <path
                        d="m651.19 0.5c-70.933 0-134.32 36.766-134.32 104.69 0 77.9 112.42 83.281 112.42 122.42 0 16.478-18.884 31.229-51.137 31.229-45.773 0-79.984-20.611-79.984-20.611l-14.638 68.547s39.41 17.41 91.734 17.41c77.552 0 138.58-38.571 138.58-107.66 0-82.316-112.89-87.536-112.89-123.86 0-12.908 15.502-27.052 47.663-27.052 36.287 0 65.892 14.99 65.892 14.99l14.326-66.204s-32.213-13.897-77.642-13.897zm-648.97 4.9966-1.7176 9.9931s29.842 5.4615 56.719 16.356c34.607 12.493 37.072 19.765 42.9 42.354l63.511 244.83h85.137l131.16-313.53h-84.942l-84.278 213.17-34.39-180.7c-3.1539-20.681-19.129-32.478-38.684-32.478h-135.41zm411.87 0-66.634 313.53h80.999l66.4-313.53h-80.765zm451.76 0c-19.532 0-29.88 10.457-37.474 28.73l-118.67 284.8h84.942l16.434-47.467h103.48l9.9931 47.467h74.948l-65.385-313.53h-68.273zm11.047 84.707 25.178 117.65h-67.454l42.276-117.65z"
                        fill="#fff" />
                </svg>
            </div>

            <!-- PIN -->
            <div class="pin w-11 h-7 rounded bg-yellow-100">&nbsp;</div>

            <!-- Card number -->
            <div class="number whitespace-nowrap text-2xl font-semibold" style="font-family:Courier new, mono;">
                4242&nbsp;4242&nbsp;4242&nbsp;4242
            </div>

            <!-- Card infos -->
            <div class="credentials flex gap-8">
                <div class="owner flex flex-col w-max">
                    <span class="text-xs uppercase">Card holder</span>
                    <span class="whitespace-nowrap text-lg">John DOE</span>
                </div>
                <div class="expires flex flex-col w-max">
                    <span class="text-xs uppercase">Expires</span>
                    <span class="whitespace-nowrap text-lg">09/21</span>
                </div>
                <div class="cvc flex flex-col w-max">
                    <span class="text-xs uppercase">cvc</span>
                    <span class="whitespace-nowrap text-lg">123</span>
                </div>
            </div>
        </div>
    </div>
</figure>
</body>
</html>
