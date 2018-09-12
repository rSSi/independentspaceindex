<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Independent Space Index Vienna</title>
  <meta name="description" content="The Independent Space Index is a comprehensive index of local artist-run and independent art spaces in Vienna, Austria.">
  <meta name="author" content="moev.biz">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"  >
  
  <meta property="og:title" content="Independent Space Index Vienna" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.independentspaceindex.at/" />
  <meta property="og:image" content="https://www.independentspaceindex.at/vsbqofyl.png" />
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:description" content="The Independent Space Index is a comprehensive index of local artist-run and independent art spaces in Vienna, Austria." />

  <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery.tablesorter.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYYxgL1yKWovQGWrZapA6WCFPnDXjbQRI&callback=initMap"
    async defer></script>
    
    <style>
        
        .gm-style .gm-style-iw {
            font-family: "Times New Roman", serif;
            font-size: 1rem!important;
            background-color: #fff !important;
            /*width: auto!important;*/
            /*max-width: 200px!important;*/
            /*height: 5em!important;*/
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 7px;
            display: block !important;
            left: 10px!important;
            top: 25px!important;
         }    
     
         /*style the p tag*/
         .gm-style .gm-style-iw #google-popup p{
            padding: 0;
         }
         
     
        /*style the arrow*/
        .gm-style div div div div div div div div {
            padding: 0;
            margin: 0;
            padding: 0;
            top: 0;
            color: #fff;
        }
        
        .gm-style div div div div div div div:nth-child(2), .gm-style div div div div div div div:nth-child(3) {
            display: none;   
        }
        
        .gm-style div div div div div div:nth-child(4) {
            width: 0px!important;
            height: 0px!important;
        }
        
        .gm-style div div div div div div div {
            border-top: none!important;
        }
        
        .gm-style div div div div div div img {
            display: none;
        }
        
        
        .gm-style div div div div:first-child:not(.gmnoprint) {
            pointer-events: none;
        }
        
        .gm-style-iw div {
            pointer-events: auto!important;
            cursor: auto;
        }
        
        .gm-style-iw {
            border: 1px solid red;
        }
        
        /*style the link*/
        .gm-style div div div div div div div div a {

        }
        
    </style>
    
    <?php include 'texts.php'; ?>
    
</head>

<body data-tap-disabled="true">
    <div id="container">
        <div class="menu">
            <table class="nav">
                <tr>
                    <td><h1><a href=".">Independent Space Index Vienna</a></h1></td>
                    <td><span><a href="index.php">List</a></span></td>
                    <td><span class="options"><span>Options</span></span></td>
                    <td><span class="about"><span>About</span></span></td>
                </tr>
            </table>
        </div>
        <div id="aboutPanel">
            <table>
                <tr>
                    <td class="en">
                        <?php echo $about_en; ?>
                        <?php /*<p> Networking and exchange meetings between representatives of the spaces are held every first wednesday of the month at 7pm at Café Am Heumarkt, Am Heumarkt 15, 1030 Vienna. Please give notice if you want to join the meeting as an external.</p>
        <?php
        
        $thismnth = strtotime("first wednesday of this month");
        $nextmnth = strtotime("first wednesday of next month");
        $now = strtotime("now");
        ?>
        <p>Next meeting: <b><?php if ($thismnth > $now) echo date(" F jS, Y", $thismnth); else echo date(" F jS, Y", $nextmnth); ?></b>, 7pm </p>
        <?php setlocale (LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge'); */?>
        
        </td>
        <td class="de">
            <?php echo $about_de; ?>
        <!--<p>Netzwerk- und Austauschstreffen zwischen Vertreter*innen der Spaces finden jeden ersten Mittwoch des Monats um 19:00 im Café Am Heumarkt, Am Heumarkt 15, 1030 Wien statt. Bitte geben Sie Bescheid, falls Sie als Externe*r zum Treffen erscheinen möchten.</p>
        <p>Nächstes Treffen: <b><?php /*if ($thismnth > $now) echo strftime("%e. %B %G", $thismnth); else echo strftime("%e. %B %G", $nextmnth); */?></b>, 19:00</p>-->
        </td>
        </tr>
        <tr id="moreinfo">
            <td><br>
                <form class=nlsignup>
            <label for="mail">Newsletter:</label>
            <input type="text" id="mail" name="mail">
            <input type="submit" disabled value="Subscribe" style="cursor:not-allowed">
        </form>
        <p><i>Newsletter under construction!</i></p>
            </td>
            <td>
                <?php echo $about_more; ?>
            </td>
        </tr>
        </table>
    </div>
    <div id="optionsPanel">
            <table>
                <tr>
                    <td style="cursor:not-allowed">Search the index <i>(under construction)</i></td>
                    <td style="cursor:not-allowed" id="toggleInactive">inactive spaces <i>(List view only)</i></td>
                    <td><a target="blank" href="Independent_Space_Index_Vienna_07_18_Print.pdf">Download the PDF</a></td>
                    <td style="cursor:not-allowed">Language / Sprache <i>(under construction)</i></td>
                </tr>
            </table>
        </div>
    <!--<div id="calendarPanel">
        <table><tr><td><i>Coming soon!</i></td></tr></table>
    </div>-->
    </div>
    <div id="map"></div>
    

    <script>
        $(function(){
         $('#toggleInactive').click(function(){
               $('.inactive').toggle();
               this.classList.toggle("active");
            });
        });
    </script>
    <script>
    //        var n = $( "#maintable tr" ).length;
    //$( "#aboutPanel .entryCount" ).text( n );
    </script>
    <!--<script>
        $("#aboutPanel .entryCount").load("index.php",function(value){

        var value=$(data).find("#maintable tr");
        });
    </script>
    <script>
//$.ajax({
  //  url      : 'index.php',
//    success  : function (data) {
 //      var $allslides = $(data).find('"#maintable tr'),
 //          slidenumber = $allslides.length;
 //      $( "#aboutPanel .entryCount" ).text( slidenumber );
 //   },
 //   error    : function () { /* don't forget to handle errors */ }
//});
    </script>-->
    <script>
var acc = document.getElementsByClassName("about");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = document.getElementById("aboutPanel");
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script>
var acc = document.getElementsByClassName("options");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = document.getElementById("optionsPanel");
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script>

var locations = [
  ['ada',                       48.225033, 16.363449,       'Wattgasse 16/6',                   '1160',         'artisticdynamicassociation.eu'],
  ['Bar Du Bois',               48.1864322, 16.34765,       'Diehlgasse 50',                    '1050',         'www.bardubois.at'],
  ['Bildetage',                 48.1976651, 16.394038,      'Barichgasse 6/1',                  '1030',         'www.bildetage.com'],
  ['Büro Weltausstellung',      48.2151497, 16.386038,      'Praterstraße 42/1/Mezzanin',       '1020',         'artfoundation.at'],
  ['Camera Matteotti',          48.1864322, 16.34765,       'Fendigasse 37/16/1',               '1050',         'cameramatteotti.com'],
  ['D.E.L.F.',                  48.177709,16.323576,        'Ratschkygasse 36',                 '1120',         'delf.at'],
  ['die Schöne',                48.211678,16.322848,        'Kuffnergasse 7',                   '1160',         'dieschoene.at'],
  ['fAN',                       48.218175,16.381676,        'Glockengasse 9',                   '1020',         'fineartnetwork.net'],
  ['flat1',                     48.189890,16.337879,        'U-Banhbogen 6-7',                  '1060',         'flat1.at'],
  ['Foundation',                48.197707,16.399961,        'Hainburger Str. 47/1',             '1030',         'foundationvienna.com'],
  ['FOX',                       48.206728,16.389023,        'Marxergasse 16',                   '1030',         'foxwien3.blogspot.co.at'],
  ['Futur II',                  48.209052,16.329898,        'Haberlgasse 42',                   '1160',         'futur2.at'],
  ['GESSO Artspace',            48.253404,16.415367,        'Donaufelderstrasse 73 / 5.04 A-B', '1210',         'gessoartspace.com'],
  ['GOMO',                      48.187843,16.377106,        'Argentinierstraße 67',             '1040',         'gomoartspace.com'],
  ['Galerie Kunstbuero',        48.198097,16.353163,        'Schadekgasse 6-8',                 '1060',         'artfoundation.at'],
  ['Guimarães',                 48.189763,16.352219,        'Linke Wienzeile 36 / 1c',          '1050',         'guimaraes.info'],
  ['Gärtnergasse',              48.214769,16.335219,        'Ottakringer Straße 44',            '1160',         'gaertnergasse.com'],
  ['hoast',                     48.217783,16.378136,        'Große Sperlgasse 25',              '1020',         'hoast.net'],
  ['Kaeshmaesh',                48.223049,16.404119,        'Ennsgasse 20',                     '1020',         'kaeshmaesh.com'],
  ['Kevin Space',               48.222523, 16.38729,        'Volkertstraße 17',                 '1020',         'www.kevinspace.org'],
  ['KLUCKYLAND',                48.2306952, 16.3682,        'Othmargasse 34',                   '1200',         'www.kluckyland.com'],
  ['Kulturdrogerie',            48.228187, 16.337869,       'Gentzgasse 86-88',                 '1180',         'www.kulturdrogerie.org'],
  ['Kunsttankstelle Ottakring', 48.210255,16.33366,         'Grundsteingasse 45-47',            '1160',         'kunsttankstelleottakring.at'],
  ['Kunstverein Extra',         48.189983,16.340078,        'Eisvogelgasse 5',                  '1060',         'kunstverein-extra.com'],
  ['LLLLLL / □□□□□■',           48.207184,16.39018,         'Seidlgasse 14',                    '1030',         'LLLLLL.at'],
  ['Mauve',                     48.208854,16.392276,        'Löwengasse 18',                    '1030',         'mauve-vienna.com'],
  ['Mz Baltazar&#39;s Lab',     48.230089,16.372221,        'Wallensteinstraße 38-40/8',        '1200',         'mzbaltazarslaboratory.org'],
  ['New Jörg',                  48.234304,16.370395,        'Jägerstraße 56',                   '1200',         'newjoerg.at'],
  ['One Mess Gallery',          48.209025,16.3628,          'Löwelstraße 6',                    '1010',         'onemessgallery.com'],
  ['Pferd',                     48.18418,16.417132,         'Medwedweg 3',                      '1110',         'bildsteinglatz.com/pferd'],
  ['Pina',                      48.194289,16.36292,         'Große Neugasse 44',                '1040',         'pinavienna.eu'],
  //[Schneiderei',               48.199144,16.374165,        'Brucknerstraße 6',                 '1040',         'seeyounextthursday.com'],
  ['school',                    48.194305,16.356382,        'Grüngasse 22',                     '1050',         'info.weloveschool.org'],
  ['Setzkasten Wien',           48.216962,16.337870,        'Hernalser Hauptstraße 29/4',       '1170',         'setzkastenwien.at'],
  ['Significant Other',         48.204321,16.351978,        'Burggasse 24',                     '1070',         'significantother.art'],
  ['Size Matters',              48.189042,16.354464,        'Margaretenstraße 110',             '1050',         'sizematters.club'],
  ['SORT',                      48.209317,16.375957,        'Bäckerstraße 7/8',                 '1010',         'sortvienna.com'],
  ['SUPER',                     48.19469,16.36036,          'Schönbrunner Straße 10',           '1050',         'supersuper.at'],
  ['THE CLUB CLUB',             48.200579,16.328353,        'Löschenkohlgasse 12',              '1150',         'clubclub.wien'],
  ['____TIM NOLAS',             48.214205,16.347521,        'Skodagasse 26',                    '1050',         'timnolas.com'],
  ['Tower',                     48.237143,16.423480,        'Kratochwjlestraße 12',             '1220',         'facebook.com/ViennaTower'],
  ['VBKÖ',                      48.20434,16.370116,         'Maysedergasse 2',                  '1010',         'vbkoe.org'],
  ['VENT gallery',              48.195705,16.356046,        'Hamburgerstraße 14',               '1050',         'ventgallery.com'],
  ['Ve.Sch',                    48.24702,16.379476,         'Wehlistraße 27b',                  '1200',         'vesch.org'],
  ['WE DEY X SPACE',            48.202905,16.342062,        'Kandlgasse 24',                    '1070',         'we-dey.in'],
  ['White Dwarf Projects',      48.207184,16.390180,        'Seidlgasse 14',                    '1030',         'facebook.com/whitedwarfprojects'],
  ['Zentrale',                  48.211639,16.332821,        'Neulerchenfelder Straße 52',       '1160',         'zentrale.jetzt'],
];

function initMap() {
  var latlng = new google.maps.LatLng(locations[0][1], locations[0][2]);

  var map = new google.maps.Map(document.getElementById('map'), {
          
          center: {lat:48.210033, lng:16.363449},
          zoom: 13,
          zoomControl: true,
          mapTypeControl: false,
          scaleControl: false,
          streetViewControl: false,
          rotateControl: false,
          fullscreenControl: false,
          backgroundColor: 'none',
          styles: [
  {
    "featureType": "administrative",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "administrative.neighborhood",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape",
    "stylers": [
      {
        "color": "#ffffff"
      },
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "landscape.natural.landcover",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#e60000"
      },
      {
        "weight": 0.5
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text",
    "stylers": [
      {
        "color": "#e60000"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#e60000"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#e60000"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "visibility": "off"
      },
      {
        "weight": 0.5
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
]
        });

  var infowindow = new google.maps.InfoWindow();

  for (i = 0; i < locations.length; i++) {
    var icon = '';
    if (locations[i][0].length != '' && locations[i][1].length != '') {

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        title: locations[i][3],
        icon: 'dot.svg'
      });

      
      
      // Event that closes the Info Window with a click on the map
      google.maps.event.addListener(map, 'click', (function(infowindow) {
        return function() {
          infowindow.close();
        }
      })(infowindow));

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0] + '<br><br>' + locations[i][3] + ', ' + locations[i][4] + '<br><a target="_blank" href="http://' + locations[i][5] + '/">' + locations[i][5] + '</a>');
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  } 
}
google.maps.event.addDomListener(window, 'load', initMap);

    </script>


</body>
    
</html>