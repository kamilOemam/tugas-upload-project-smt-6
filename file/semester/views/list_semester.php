 <div class="card"> 
   <div class="card-header"> 
     <h4>List Semester</h4> 
   </div> 
   <div class="card-body"> 
     <?php 
     $db = __database(); 
     // buat header table 
     echo "<a class='btn btn-primary btn-sm' href='admin.php?target=semester&action=form'>Tambah</a><br><br>"; 
     echo "<div class='table-responsive'>"; 
     echo "<table class='table table-striped table-bordered'> 
    <thead> 
     <tr> 
       <th>No</th>
       <th>Semester</th>
       <th>Sebaran</th>
       <th>Prodi</th>
       <th>#</th> 
     </tr> 
     </thead> 
     <tbody>"; 
     // ambil data dari database 
     $join = [ 
       "LEFT JOIN prodi as p on p.kd_prodi=s.kd_prodi" 
     ]; 
     $q = __ambil($db, "semester as s", "*", $where, $join); 
     $no = 1; 
     while ($r = $q->fetch_array()) { 
       echo "<tr> 
       <td>" . $no . "</td> 
       <td>" . $r['semester'] . "</td> 
       <td>" . $r['sebaran_semester'] . "</td> 
       <td>" . $r['nama_prodi'] . "</td> 
       <td> 
         <a class='btn btn-success btn-sm' href='admin.php? target=semester&action=edit&id=" . $r['kd_semester'] . "'>Edit</a>  
         <a class='btn btn-danger btn-sm' href='admin.php?target=semester&action=delete&id=" . $r['kd_semester'] . "'>Hapus</a> 
       </td> 
     </tr>"; 
       $no++; 
     } 
     echo "</tbody></table></div>"; ?> 
   </div> 
 </div>