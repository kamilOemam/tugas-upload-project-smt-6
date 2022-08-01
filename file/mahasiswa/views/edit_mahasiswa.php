

 <?php 
 $db = __database(); 
 $where = [ 
   'npm' => $_GET['id'] 
 ]; 
 $query   = __ambil($db, "mahasiswa", "*", $where); 
 // menampilkaan hasil query dalam bentuk object 
 // anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll 
  
 $rows      = $query->fetch_object(); 
 // print_r($rows); 
 ?> <div class="card"> 
   <div class="card-header"> 
     <h4>Form Mahasiswa</h4> 
   </div> 
   <div class="card-body"> 
     <form method="post" action="admin.php?target=mahasiswa&action=update" data-parsley-validate class="form-horizontal form-label-left"> 
       <div class="mb-3"> 
         <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name"> 
           NPM 
         </label> 
         <div class="col-md-6 col-sm-6 col-lg-12"> 
           <input type="text" name="npm" class="form-control" value="<?php echo $rows->npm; ?>" /> 
         </div> 
       </div> 
       <div class="mb-3"> 
         <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name"> 
           Nama 
         </label> 
         <div class="col-md-6 col-sm-6 col-lg-12"> 
           <input type="text" name="nama" class="form-control" value="<?php echo $rows->nama; ?>" /> 
         </div> 
       </div> 
       <div class="mb-3"> 
         <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name"> 
           Semester 
         </label> 
         <div class="col-md-6 col-sm-6 col-lg-12"> 
           <select name="kd_semester" id="kd_semester" class="form-select"> 
             <option value="">Pilih Semester</option> 
             <?php 
             $where_smt = [ 
               'kd_prodi' => $_SESSION['id'] 
             ]; 
             $semester_data = __ambil($db, "semester", "*", null); 
             while ($s = $semester_data->fetch_array()) { 
             ?> 
               <option value="<?php echo $s['kd_semester']; ?>" <?php echo $s['kd_semester'] == $rows->kd_semester ? "selected" : "" ?>> 
                 <?php echo $s['semester']; ?> 
               </option> 
             <?php 
             } 
             ?> 
           </select> 
         </div> 
       </div> 
       <div class="mb-3"> 
         <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name"> 
           Prodi 
         </label> 
         <div class="col-md-6 col-sm-6 col-lg-12"> 
           <select name="kd_prodi" id="kd_prodi" class="form-select"> 
             <option value="">Pilih Prodi</option> 
             <?php 
             $where_prodi = [ 
               'kd_prodi' => $_SESSION['id'] 
             ]; 
             $prodi_data = __ambil($db, "prodi", "*", null); 
             while ($r = $prodi_data->fetch_array()) { 
             ?> 
               <option value="<?php echo $r['kd_prodi']; ?>" <?php echo $r['kd_prodi'] == $rows->kd_prodi ? "selected" : "" ?>> 
                 <?php echo $r['nama_prodi']; ?> 
               </option> 
             <?php 
             } 
             ?> 
           </select> 
         </div> 
       </div> 
       <div class="mb-3"> 
         <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name"> 
           password 
         </label> 
         <div class="col-md-6 col-sm-6 col-lg-12"> 
           <input type="password" name="password" class="form-control" /> * KOSONGKAN JIKA TIDAK DIRUBAH 
         </div> 
       </div> 
       <div class="mb-3"> 
         <div class="col-md-6 col-sm-6 col-lg-12 "> 
           <input type="submit" class="btn btn-success btn-sm" value="Simpan"> 
           <a class="btn btn-danger btn-sm" href="admin.php?target=mahasiswa">Kembali</a> 
         </div> 
       </div> 
     </form> 
   </div> 
 </div>