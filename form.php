
<?php
require "emp.php";
if(isset($_POST['fullName'])&& isset( $_POST['DateN'])&& isset($_POST['Balance'])&& isset( $_POST['devise'])){
  $FullName = $_POST['fullName'];
  $DateN = $_POST['DateN'];
  $Balance= $_POST['Balance'];
  $devise = $_POST['devise'];
 
 if(empty($FullName)|| empty($DateN) || empty($Balance) || empty($devise)){
  echo 'file is empty';
 }else{
  mysqli_query($con ,"INSERT INTO formcards(FullName ,DateN,Balance,devise) VALUES ('$FullName','$DateN','$Balance','$devise')");
  echo "done";
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<!-- <style>
    .crediCard:hover {
  transform: rotateY(-180deg);
}
</style> -->
<body>
<main class="flex min-h-screen flex-col items-center justify-between p-24 bg-slate-100">
  <form class="bg-white w-full max-w-3xl mx-auto px-6 py-8 shadow-md rounded-md" action="" method="POST">
    <label class="text-neutral-800 font-bold text-sm mb-2 block">Full name :</label>
    <input type="text" class="flex h-10 w-full rounded-md border-2 px-4 py-1.5 text-lg ring-offset-background focus-visible:outline-none focus-visible:border-purple-600 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mb-4" name="fullName" />
    <div class="flex gap-x-2 mb-4">
      <div class="flex-1">
        <label class="text-neutral-800 font-bold text-sm mb-2 block">Date:</label>
        <input type="date" class="flex h-10 w-full rounded-md border-2 px-4 py-1.5 text-lg ring-offset-background focus-visible:outline-none focus-visible:border-purple-600 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mb-4" name="DateN"/>
      </div>
      <div class="flex-1">
        <label class="text-neutral-800 font-bold text-sm mb-2 block">Balance :</label>
        <input type="number" class="flex h-10 w-full rounded-md border-2 px-4 py-1.5 text-lg ring-offset-background focus-visible:outline-none focus-visible:border-purple-600 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mb-4" name="Balance"/>
      </div>
    </div>
  <label for="countries" class="text-neutral-800 font-bold text-sm mb-2 block">Select an devise</label>
  <select id="countries" class="flex h-10 w-full rounded-md border-2 px-4 py-1.5 text-lg ring-offset-background focus-visible:outline-none focus-visible:border-purple-600 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mb-4" name="devise" >
    <option selected>Select an devise</option>
    <option value="US">USD</option>
    <option value="CA">EUR</option>
    <option value="FR">MAD</option>
    
  </select>

    <button type="submit" class="my-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

  </form>

<!-- <main class="flex min-h-screen flex-col items-center justify-between p-24 bg-slate-100">
  
  <form class="bg-white w-full max-w-3xl mx-auto px-6 py-8 shadow-md rounded-md flex">
    <div class="w-1/2 pr-8 border-r-2 border-slate-300">
      <label class="text-neutral-800 font-bold text-sm mb-2 block">Card number:</label>
      <input type="text" class="flex h-10 w-full rounded-md border-2 px-4 py-1.5 text-lg ring-offset-background focus-visible:outline-none focus-visible:border-purple-600 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mb-4" />
      <div class="flex gap-x-2 mb-4">
        <div class="flex-1">
          <label class="text-neutral-800 font-bold text-sm mb-2 block">Exp. date:</label>
          <input type="text" class="flex h-10 w-full rounded-md border-2 px-4 py-1.5 text-lg ring-offset-background focus-visible:outline-none focus-visible:border-purple-600 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mb-4" />
        </div>
        <div class="flex-1">
          <label class="text-neutral-800 font-bold text-sm mb-2 block">CCV:</label>
          <input type="text" class="flex h-10 w-full rounded-md border-2 px-4 py-1.5 text-lg ring-offset-background focus-visible:outline-none focus-visible:border-purple-600 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mb-4" />
        </div>
      </div>

      <label class="text-neutral-800 font-bold text-sm mb-2 block">Card holder:</label>
      <input type="text" class="flex h-10 w-full rounded-md border-2 px-4 py-1.5 text-lg ring-offset-background focus-visible:outline-none focus-visible:border-purple-600 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
    </div>
    <div class="w-1/2 pl-8">
      <div class="w-full h-56" style="perspective: 1000px">
        <div class="crediCard relative cursor-pointer transition-transform duration-500" style="transform-style: preserve-3d">
          <div class="w-full m-auto rounded-xl shadow-2xl absolute" style="backface-visibility: hidden">
            <img src="https://i.ibb.co/B2vQ0xG/Card-1.jpg" class="object-cover w-full h-full" />
          </div>
          <div class="w-full m-auto rounded-xl shadow-2xl absolute" style="backface-visibility: hidden; transform: rotateY(180deg)">
            <img src="https://i.ibb.co/ThGc8mn/Card-2.jpg" class="object-cover w-full h-full" />
          </div>
        </div>
      </div>
      <p class="text-center text-neutral-800 font-bold text-sm mb-2 block">Hover the card</p>
    </div>
  </form>
</main> -->
</main>
</body>
</html>