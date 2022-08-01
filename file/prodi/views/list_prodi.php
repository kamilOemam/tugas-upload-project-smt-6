<div class="card"> 
   <div class="card-header"> 
     <h4>List Prodi</h4> 
   </div> 
   <div class="card-body"> 
    <?php 
     $db = __database(); 
     // buat header table 
     echo "<a class='btn btn-primary btn-sm' href='admin.php?target=prodi&action=form'>Tambah</a><br><br>"; 
     echo "<div class='table-responsive'>"; 
     echo "<table class='table table-striped table-bordered'> 
     <thead> 
     <tr> 
       <th>No</th>
       <th>Kode Prodi</th>
       <th>Nama Prodi</th>
       <th>#</th> 
     </tr> 
     </thead> 
     <tbody>"; 
     // ambil data dari database 
     $q = __ambil($db, "prodi"); 
     $no = 1; 
     while ($r = $q->fetch_array()) { 
       echo "<tr> 
       <td>" . $no . "</td> 
       <td>" . $r['kd_prodi'] . "</td> 
       <td>" . $r['nama_prodi'] . "</td> 
       <td> 
         <a class='btn btn-success btn-sm' href='admin.php?target=prodi&action=edit&id=" . $r['kd_prodi'] . "'>Edit</a>  
         <a class='btn btn-danger btn-sm' href='admin.php?target=prodi&action=delete&id=" . $r['kd_prodi'] . "'>Hapus</a> 
       </td> 
     </tr>"; 
       $no++; 
     } 
     echo "</tbody></table></div>"; ?> 
   </div> 
 </div>