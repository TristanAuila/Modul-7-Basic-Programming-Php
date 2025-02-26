<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-100 flex item-center justify-center">

  <?php       

    $siswa = "";
    $tugas='';
    $uas='';
    $uts='';
    $hasil='';
    $nilai='';
    $kategori='';

    if(isset($_POST['nilai'])){

        $siswa = $_POST['siswa'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $nilai = $_POST['nilai'];
        $hasil = ((30/100)* $tugas) + ((30/100)* $uts) + ((40/100)* $uas);
        switch($nilai){
        case $hasil >=85:
        $kategori = "A";;
        break;
        case $hasil >=70:
        $kategori = "B";;
        break;
        case $hasil >=60:
        $kategori = "C";;
        break;
        case $hasil >=50:
        $kategori = "D"; ;
        break;
        default:
        $kategori = "E"; ;  
        break;
        }
    }

      ?>

    <div class="bg-white p-8 rounded-lg shadow-lg w-96 item-center justify-center">
        <h2 class="text-2x1 font-semibold text-center">
            Form Input Nilai siswa
        </h2>
        <form action="" method="POST">
        <p>Nama siswa</p>
      <input type="text" name="siswa" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="" autocomplete="off">
      <p>Nilai Tugas</p>
      <input type="text" name="tugas" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="" autocomplete="off">
      <p>Nilai UTS</p>
      <input type="text" name="uts" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="" autocomplete="off">
      <p>Nilai UAS</p>
      <input type="text" name="uas" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="" autocomplete="off">


      
      <input type="submit" name="nilai" value="Hitung Nilai" class="w-full p-3 mb-4 border border-gray-300 rounded-md bg-red-500 text-center" >



    </form>
    </div>
    <div class="bg-white p-8 rounded-lg shadow-lg w-140 ml-10 text-center">
        <h2 class="text-2x1 font-semibold text-center mb-5">Hasil Penilaian</h2>
    <table class="table-auto">
                <thead>
                <tr>
                    <th class="p-5">Nama</th>
                    <th class="p-5">Nilai Akhir</th>
                    <th class="p-5">kategori</th>
                </tr>
                </thead>
        <tbody>
            <tr>
                <td class="p-5"><?php echo $siswa                 ?></td>
                <td name="hasil" id=hasil><?php echo $hasil      ?></td>
                <td class="p-5"><?php echo $kategori             ?></td></td>
            </tr>
   
   
        </tbody>
    </table>
  </body>
</html>
