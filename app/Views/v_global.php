 <div class="col-lg-3 col-6">
   <!-- small box -->
   <div class="small-box bg-warning">
     <div class="inner">
       <h3><?= $positif['value']; ?></h3>

       <p>Total Positif</p>
     </div>
     <div class="icon">
       <i class="fa fa-hospital"></i>
     </div>
     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
   </div>
 </div>

 <div class="col-lg-3 col-6">
   <!-- small box -->
   <div class="small-box bg-success">
     <div class="inner">
       <h3><?= $sembuh['value']; ?></h3>

       <p>Total Sembuh</p>
     </div>
     <div class="icon">
       <i class="fa fa-home"></i>
     </div>
     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
   </div>
 </div>
 <!-- ./col -->
 <div class="col-lg-3 col-6">
   <!-- small box -->
   <div class="small-box bg-danger">
     <div class="inner">
       <h3><?= $meninggal['value']; ?></h3>

       <p>Total Meninggal</p>
     </div>
     <div class="icon">
       <i class="fa fa-bed"></i>
     </div>
     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
   </div>
 </div>
 <!-- ./col -->
 <div class="col-lg-3 col-6">
   <!-- small box -->
   <div class="small-box bg-danger">
     <div class="inner">
       <h3>65</h3>

       <p>Unique Visitors</p>
     </div>
     <div class="icon">
       <i class="ion ion-pie-graph"></i>
     </div>
     <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
   </div>
 </div>

 <div class="col-lg-12">
   <div class="card card-info">
     <div class="card-header">
       <h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Negara</h3>
     </div>
     <!-- /.card-header -->
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
            foreach ($global as $key => $value) { ?>
             <tr>
               <td class="text-center"><?= $no++; ?></td>
               <td><?= $value['attributes']['Country_Region']; ?></td>
               <td class="text-center"><span class="badge badge-warning"><?= number_format($value['attributes']['Confirmed'], 0); ?></span></td>
               <td class="text-center"><span class="badge badge-success"><?= number_format($value['attributes']['Recovered'], 0); ?></span></td>
               <td class="text-center"><span class="badge badge-danger"><?= number_format($value['attributes']['Deaths'], 0); ?></span></td>
             </tr>
           <?php } ?>
         </tbody>
       </table>
     </div>
   </div>
 </div>