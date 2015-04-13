<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bar Map</title>
  <link href="default.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script>
    google.load('visualization', '1', { 'packages': ['map'] });
    google.setOnLoadCallback(drawMap);

    function drawMap() {
      var data = google.visualization.arrayToDataTable([
        ['Lat', 'Long', 'Name'],
        [42.274571, -83.732823, 'World of Beer'],
        [42.274842, -83.733316, 'Blue Leprechaun'],
        [42.274383, -83.734444, 'Ricks American Cafe'],
        [42.274853, -83.734907, 'Good Time Charleys'],
        [42.278878, -83.742416, 'Scorekeepers'],
        [42.281313, -83.751344, 'Live'],
        [42.279086, -83.748889, 'Rush Street'],
        [42.280158, -83.751342, 'Cavern/Millennium Club'],
        [42.279795, -83.749740, 'Old Town Tavern'],
        [42.280534, -83.746747, 'Mash'],
      ]);

    var options = {showTip: true, useMapTypeControl: true, mapType: 'normal'};

    var map = new google.visualization.Map(document.getElementById('chart_div'));

    map.draw(data, options);
  };
  </script>
</head>

  <body>
    <div id="chart_div"></div>
  </body>
</html>
