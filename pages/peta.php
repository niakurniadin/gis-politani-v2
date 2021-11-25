<div id='map'></div>

<script type="text/javascript">
  // Layer
  var batas = new L.LayerGroup();
  var gedung = new L.LayerGroup();
  var gedungjmh = new L.LayerGroup();
  var gedungjthh = new L.LayerGroup();
  var gedungjp = new L.LayerGroup();
  var gedungjti = new L.LayerGroup();
  var labjmh = new L.LayerGroup();
  var labjthh = new L.LayerGroup();
  var labjp = new L.LayerGroup();
  var labjti = new L.LayerGroup();

  // Pengaturan Posisi Peta (Titik Tengah Peta)
  var map = L.map('map', {
    center: [-0.5372011680278825, 117.1243113156709],
    zoom: 17,
    zoomControl: false,
    layers: [batas]
  });

  // Peta Dasar (Basemap)
  var OpenStreetMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
    maxZoom: 24,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &mdash; WebGIS by &copy; <a href="http://niakurniadin.com/">Nia Kurniadin</a>'
  }).addTo(map);

  var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
    maxZoom: 24,
    attribution: '&copy; Google Hybrid &mdash; WebGIS by &copy; <a href="http://niakurniadin.com/">Nia Kurniadin</a>'
  });

  var GoogleMaps = new L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    opacity: 1.0,
    maxZoom: 24,
    attribution: '&copy; Google Maps &mdash; WebGIS by &copy; <a href="http://niakurniadin.com/">Nia Kurniadin</a>'
  });

  // Logo
  L.Control.Logo = L.Control.extend({
    onAdd: function(map) {
      var img = L.DomUtil.create('img');

      img.src = 'assets/img/logo_webgis.png';
      img.style.width = '282px';

      return img;
    },

    onRemove: function(map) {
      // Nothing to do here
    }
  });
  L.control.logo = function(opts) {
    return new L.Control.Logo(opts);
  }
  L.control.logo({
    position: 'topleft'
  }).addTo(map);

  // Leaflet Control Geocoder (Search)
  L.Control.geocoder({
    position: "topleft",
    collapsed: false
  }).addTo(map);

  // Layer Kontrol
  var baseLayers = {
    'Open Street Map': OpenStreetMap,
    'Google Sattelite Hybrid': GoogleSatelliteHybrid,
    'Google Maps': GoogleMaps
  };
  var groupedOverlays = {
    "Peta Dasar": {
      'Batas Politani': batas,
      'Semua Gedung': gedung
    },
    "Gedung Kuliah": {
      'Jurusan Manajemen Hutan': gedungjmh,
      'Jurusan Teknologi Hasil Hutan': gedungjthh,
      'Jurusan Pertanian': gedungjp,
      'Jurusan Teknik dan Informatika': gedungjti
    },
    "Laboratorium": {
      'Lab. Jur. Manajemen Hutan': labjmh,
      'Lab. Jur. Teknologi Hasil Hutan': labjthh,
      'Lab. Jur. Pertanian': labjp,
      'Lab. Jur. Teknik dan Informatika': labjti
    }
  };
  L.control.groupedLayers(baseLayers, groupedOverlays, {
    collapsed: false,
    position: 'topleft'
  }).addTo(map);

  // Mini Map (Inset)
  var osmUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
  var osmAttrib = 'Map data &copy; OpenStreetMap contributors';
  var osm2 = new L.TileLayer(osmUrl, {
    minZoom: 0,
    maxZoom: 13,
    attribution: osmAttrib
  });
  var rect1 = {
    color: "#ff1100",
    weight: 3
  };
  var rect2 = {
    color: "#0000AA",
    weight: 1,
    opacity: 0,
    fillOpacity: 0
  };
  var miniMap = new L.Control.MiniMap(osm2, {
    toggleDisplay: true,
    position: "bottomright",
    aimingRectOptions: rect1,
    shadowRectOptions: rect2
  }).addTo(map);

  // Zoom Control
  var zoom_bar = new L.Control.ZoomBar({
    position: 'topleft'
  }).addTo(map);

  /* Scale */
  L.control.scale({
    position: "bottomleft"
  }).addTo(map);

  /* Coordinates */
  L.control.coordinates({
    position: "bottomleft",
    decimals: 10,
    decimalSeperator: ",",
    labelTemplateLng: "Longitude: {x}",
    labelTemplateLat: "<br>Latitude: {y}"
  }).addTo(map);

  /* north arrow */
  // var north = L.control({
  //   position: "bottomleft"
  // });
  // north.onAdd = function(map) {
  //   var div = L.DomUtil.create("div", "info legend");
  //   div.innerHTML = '<img src="assets/north-arrow.png" style=width:120px>';
  //   return div;
  // }
  // north.addTo(map);


  // Menampilkan data batas Politani
  <?php
  $sql_batas = $koneksi->query("select * from batas") or die(mysql_error());
  $data_batas = $sql_batas->fetch_assoc();
  ?>
  var polygon = L.polygon(<?php echo $data_batas['koordinat']; ?>, {
    color: 'red',
    fillOpacity: 0
  }).addTo(batas);

  // Menampilkan data semua gedung
  <?php
  $data_gedung = mysqli_query($koneksi, "select * from data_gedung");
  while ($dg = mysqli_fetch_array($data_gedung)) {
    ?>
    var polygon = L.polygon(<?php echo $dg['koordinat']; ?>, {
      color: 'blue',
      fillOpacity: .6
    }).addTo(gedung);
    <?php
  }
  ?>

  // Menampilkan data gendung JMH

</script>