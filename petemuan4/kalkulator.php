<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-100 flex item-center justify-center">

  <?php       

      $bill1 = "";
      $bill2 = ""; 
      $hasil = "";
      $operasi = "";
      if(isset($_POST['hitung'])){
        $bill1 = $_POST['bill1'];
        $bill2 = $_POST['bill2'];
        $operasi = $_POST['operasi'];
      
      switch ($operasi) {
        case 'tambah':
          $hasil = $bill1 + $bill2;
          break;
          case 'kurang':
            $hasil = $bill1 - $bill2;
            break;
            case 'kali':
              $hasil = $bill1 *  $bill2;
              break;
              case 'bagi':
                $hasil = $bill1 / $bill2;
                break;
      }
      }

      ?>

    <div class="bg-white p-8 rounded-lg shadow-lg w-96 item-center justify-center">
        <h2 class="text-2x1 font-semibold text-center">
            kalkulator
        </h2>
        <form action="" method="POST">
      <input type="text" name="bill1" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="Masukkan Bilangan Pertama" autocomplete="off" value = "<?php echo "$bill1" ?>">
      <input type="text" name="bill2" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="Masukkan Bilangan Kedua" autocomplete="off" value = "<?php echo "$bill2" ?>">
      
      <select name="operasi" id= "" class="w-full p-3 mb-4 border border-gray-300 rounded-md "  >
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">;</option>
      </select>

      
      <input type="submit" name="hitung" value="hitung" class="w-full p-3 mb-4 border border-gray-300 rounded-md bg-red-500 " >
      <input type="text" name="bil1" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="Hasil Bilangan" autocomplete="off" readonly value = "<?php echo "$hasil" ?>">


    </form>
    </div>

  </body>
</html>
