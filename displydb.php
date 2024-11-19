<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
      

  <?php 
  require "emp.php";

  $sql = "SELECT id,fullName,DateN,Balance,devise from formcards";
$resulte = $con -> query($sql);
if ($resulte -> num_rows > 0) {
    while($row = $resulte-> fetch_assoc()){
      //  echo "<div class='flex center '><div class='bg-green-700'><h1>". $row["fullName"]."</div></h1> <div><h1>". $row["DateN"]."</div></h1><div><h1>". $row["Balance"]."</div></h1> <div><h1>". $row["devise"]."</div></h1> <br></div>"; 
      echo '
      
      

<div class="relative ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 min-w-[200px]">
                   full Name                </th>
                <th scope="col" class="px-6 py-3 min-w-[200px]">
                   Date
                </th>
                <th scope="col" class="px-6 py-3 min-w-[200px]">
                  Balance
                </th>
                <th scope="col" class="px-6 py-3 min-w-[200px]">
                    devise
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  '.$row["fullName"].'
                </th>
                <td class="px-6 py-4">
                   '. $row["DateN"].'
                </td>
                <td class="px-6 py-4">
                   '. $row["Balance"].'
                </td>
                <td class="px-6 py-4">
                 '. $row["devise"].'
                </td>
            </tr>
           
        </tbody>
    </table>
</div>

      
      ';
    }
}
  ?>
</body>
</html>