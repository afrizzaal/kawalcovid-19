 <div class="col-lg-4 col-6">
   <div class="small-box bg-warning">
     <div class="inner">
       <h3><?= $nasional[0]['positif']; ?></h3>
       <p>Total Positif</p>
     </div>
     <div class="icon">
       <i class="fa fa-hospital"></i>
     </div>
   </div>
 </div>

 <div class="col-lg-4 col-6">
   <div class="small-box bg-success">
     <div class="inner">
       <h3><?= $nasional[0]['sembuh']; ?></h3>
       <p>Total Sembuh</p>
     </div>
     <div class="icon">
       <i class="fa fa-home"></i>
     </div>
   </div>
 </div>

 <div class="col-lg-4 col-6">
   <div class="small-box bg-danger">
     <div class="inner">
       <h3><?= $nasional[0]['meninggal']; ?></h3>
       <p>Total Meninggal</p>
     </div>
     <div class="icon">
       <i class="fa fa-bed"></i>
     </div>
   </div>
 </div>

 <div class="col-lg-12">
   <div class="card card-info">
     <div class="card-header">
       <h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
     </div>
     <div class="card-body">
       <table id="example1" class="table table-bordered table-striped">
         <thead>
           <tr class="text-center">
             <th>No</th>
             <th>Provinsi</th>
             <th>Positif</th>
             <th>Sembuh</th>
             <th>Meninggal</th>
           </tr>
         </thead>
         <tbody>
           <?php $no = 1;
            foreach ($provinsi as $key => $value) { ?>
             <tr>
               <td class="text-center"><?= $no++; ?></td>
               <td><?= $value['attributes']['Provinsi']; ?></td>
               <td class="text-center"><span class="badge badge-warning"><?= number_format($value['attributes']['Kasus_Posi'], 0); ?></span></td>
               <td class="text-center"><span class="badge badge-success"><?= number_format($value['attributes']['Kasus_Semb'], 0); ?></span></td>
               <td class="text-center"><span class="badge badge-danger"><?= number_format($value['attributes']['Kasus_Meni'], 0); ?></span></td>
             </tr>
           <?php } ?>
         </tbody>
       </table>
     </div>
   </div>
 </div>