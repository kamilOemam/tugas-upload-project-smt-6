     <div class="card"> 
   <div class="card-header"> 
     <h4>List Mahasiswa</h4> 
   </div> 
   <div class="card-body"> 
     <?php 
     $db = __database(); 
     // buat header table 
     echo "<a class='btn btn-primary btn-sm' href='admin.php?target=mahasiswa&action=form'>Tambah</a><br><br>"; 
     echo "<div class='table-responsive'>"; 
     echo "<table class='table table-striped table-bordered'> 
     <thead> 
     <tr> 
       <th>No</th>
       <th>NPM</th>
       <th>Nama</th>
       <th>Semester</th>
       <th>Prodi</th>
        <th>#</th> 
     </tr> 
     </thead> 
     <tbody>"; 
     // ambil data dari database 
     $join = [ 
       "LEFT JOIN prodi as p on p.kd_prodi=m.kd_prodi", 
       "LEFT JOIN semester as s on s.kd_semester=m.kd_semester" 
     ]; 
     $where = [ 
       'm.kd_prodi' => $_SESSION['id'] 
     ]; 
     $q = __ambil($db, "mahasiswa as m", "*", null, $join); 
     $no = 1; 
     while ($r = $q->fetch_array()) { 
       echo "<tr> 
       <td>" . $no . "</td> 
       <td>" . $r['npm'] . "</td> 
       <td>" . $r['nama'] . "</td> 
       <td>" . $r['semester'] . "</td> 
       <td>" . $r['nama_prodi'] . "</td> 
       <td> 
         <a class='btn btn-success btn-sm' href='admin.php?target=mahasiswa&action=edit&id=" . $r['npm'] . "'>Edit</a>  
         <a class='btn btn-danger btn-sm' href='admin.php?target=mahasiswa&action=delete&id=" . $r['npm'] . "'>Hapus</a> 
       </td> 
     </tr>"; 
       $no++; 
     } 
     echo "</tbody></table></div>";
      ?> 
   </div> 
 </div>