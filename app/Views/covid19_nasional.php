<div class="col-sm-12">
  <div id="mapid" style=" height: 600px;"></div>

  <script>
    var mymap = L.map('mapid').setView([-2.495357, 117.729378], 5);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11',
    }).addTo(mymap);

    <?php foreach ($provinsi['features'] as $key => $value) { ?>
      L.marker([<?= $value['geometry']['y'] ?>, <?= $value['geometry']['x'] ?>]).addTo(mymap).bindPopup("Provinsi: <?= $value['attributes']['Provinsi'] ?><br>" +
        "Positif :<?= number_format($value['attributes']['Kasus_Posi'], 0) ?><br>" +
        "Sembuh : <?= number_format($value['attributes']['Kasus_Semb'], 0) ?><br>" +
        "Meninggal: <?= number_format($value['attributes']['Kasus_Meni'], 0) ?>");
    <?php } ?>
  </script>
</div>