<?PHP
/*
**  TEST NEWSLETTER
**
**  https://www.independentspaceindex.at/?nl=test
**
*/
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Independent Space Index Vienna</title>
  <meta name="description" content="The Independent Space Index is a comprehensive index of local artist-run and independent art spaces in Vienna, Austria.">
  <meta name="author" content="moev.biz">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta property="og:title" content="Independent Space Index Vienna" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.independentspaceindex.at/" />
  <meta property="og:image" content="https://www.independentspaceindex.at/vsbqofyl.png" />
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:description" content="The Independent Space Index is a comprehensive index of local artist-run and independent art spaces in Vienna, Austria." />

  <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery.tablesorter.js"></script>

</head>

<?php include 'texts.php'; ?>

<body><div id="container">
        <div class="menu">

            <table class="nav">
                <tr>
                    <td><h1><a href=".">Independent Space Index Vienna</a></h1></td>
                    <td><span><a href="map.php">Map</a></span></td>
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
        <?php /*<p>Netzwerk- und Austauschstreffen zwischen Vertreter*innen der Spaces finden jeden ersten Mittwoch des Monats um 19:00 im Café Am Heumarkt, Am Heumarkt 15, 1030 Wien statt. Bitte geben Sie Bescheid, falls Sie als Externe*r zum Treffen erscheinen möchten.</p>
        <p>Nächstes Treffen: <b><?php/* if ($thismnth > $now) echo strftime("%e. %B %G", $thismnth); else echo strftime("%e. %B %G", $nextmnth); </b>, 19:00</p>*/?>
        </td>
        </tr>
        <tr id="moreinfo">

            <td><br>
                <!-- NEWSLETTER SIGNUP -->

                <form class=nlsignup action="form.php" id="newsletter_signup">
                    <label for="mail">Newsletter:</label>
                    <input type="email" id="mail" name="mail" required placeholder="email@yourserver.abc" <?php if(!$_REQUEST['nl']) echo 'disabled style="cursor:not-allowed"'; ?>>
                    <input type="submit" value="Subscribe" <?php if(!$_REQUEST['nl']) echo 'disabled style="cursor:not-allowed"'; ?> >
                    <div id="subscription_status"></div>
                </form>
                <p><?php if(!$_REQUEST['nl']) echo '<i>Newsletter under construction!</i>'; ?></p>

                <!-- /NEWSLETTER SIGNUP -->
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
                    <td><input type="text" id="searchInput" onkeyup="searchFunction()" value="Search the index" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue; this.style.color ='rgba(0,0,0,0.5)';"></td>
                    <td id="toggleInactive">inactive spaces</td>
                    <td><a target="blank" href="Independent_Space_Index_Vienna_07_18_Print.pdf">Download the PDF</a></td>
                    <td style="cursor:not-allowed">Language / Sprache <i>(under construction)</i></td>
                </tr>
            </table>
        </div>
    <!--<div id="calendarPanel">
        <table><tr><td><i>Coming soon!</i></td></tr></table>
    </div>-->


    <table id="maintable">
    <thead>
    <tr><th>Name</th><th>District</th><th>Address</th><th class="sorter-false">Website</th></tr>
        </thead>
    <tbody id="mainTableBody">

    <?php $locale = 'en_US';
    $nf = new NumberFormatter($locale, NumberFormatter::ORDINAL);
    ?>

 <tr><td><a href="http://www.timnolas.at" target="_blank"><span class="clearName">Tim Nolas</span>____TIM NOLAS</a></td><td><?php echo $nf->format(8); ?></td><td>Skodagasse 26</td><td><a href="http://www.timnolas.com" target="_blank">timnolas.com</a></td></tr>
 <tr><td><a href="http://www.LLLLLL.at" target="_blank"><span class="clearName">LLLLLL</span>□□□□□■</a></td><td><?php echo $nf->format(3); ?></td><td>Seidlgasse 14</td><td><a href="http://www.LLLLLL.at" target="_blank">LLLLLL.at</a></td></tr>
 <tr><td><a href="http://artisticdynamicassociation.eu/" target="_blank">ada</a></td><td><?php echo $nf->format(16); ?></td><td>Wattgasse 16/6</td><td><a href="http://artisticdynamicassociation.eu/" target="_blank">artisticdynamicassociation.eu</a></td></tr>
 <tr class="inactive"><td><a href="http://autocorrect.at/" target="_blank">Autocorrect</a></td><td></td><td></td><td><a href="http://autocorrect.at/" target="_blank">autocorrect.at</a></td></tr>
 <tr><td><a href="http://bardubois.at/" target="_blank">Bar Du Bois</a></td><td><?php echo $nf->format(5); ?></td><td>Diehlgasse 50</td><td><a href="http://bardubois.at/" target="_blank">bardubois.at</a></td></tr>
 <tr><td><a href="http://www.bildetage.com" target="_blank">Bildetage</a></td><td><?php echo $nf->format(3); ?></td><td>Barichgasse</td><td><a href="http://www.bildetage.com" target="_blank">bildetage.com</a></td></tr>
 <tr><td><a href="https://www.artfoundation.at/" target="_blank">Büro Weltausstellung</a></td><td><?php echo $nf->format(2); ?></td><td>Praterstraße 42 / 1 / Mezzanin</td><td><a href="https://www.artfoundation.at/" target="_blank">artfoundation.at</a></td></tr>
 <tr><td><a href="http://www.cameramatteotti.com/" target="_blank">Camera Matteotti</a></td><td><?php echo $nf->format(5); ?></td><td>Fendigasse 37 / 16 / 1</td><td><a href="http://www.cameramatteotti.com/" target="_blank">cameramatteotti.com</a></td></tr>
 <tr><td><a href="http://delf.at/" target="_blank">D.E.L.F.</a></td><td><?php echo $nf->format(12); ?></td><td>Ratschkygasse 36</td><td><a href="http://delf.at/" target="_blank">delf.at</a></td></tr>
 <tr class="inactive"><td><a href="http://dianalambert.org/" target="_blank">Diana Lambert</a></td><td><?php echo $nf->format(5); ?></td><td>Fendigasse 23/19</td><td><a href="http://dianalambert.org/" target="_blank">dianalambert.org</a></td></tr>
 <tr><td><a href="http://www.dieschoene.at/" target="_blank">die Schöne</a></td><td><?php echo $nf->format(16); ?></td><td>Kuffnergasse 7</td><td><a href="http://www.dieschoene.at/" target="_blank">dieschoene.at</a></td></tr>
 <tr><td><a href="http://www.fineartnetwork.net/" target="_blank">fAN</a></td><td><?php echo $nf->format(2); ?></td><td>Glockengasse 9</td><td><a href="http://www.fineartnetwork.net/" target="_blank">fineartnetwork.net</a></td></tr>
 <tr><td><a href="http://www.flat1.at/" target="_blank">flat1</a></td><td><?php echo $nf->format(6); ?></td><td>U-Bahnbogen 6-7</td><td><a href="http://www.flat1.at/" target="_blank">flat1.at</a></td></tr>
 <tr><td><a href="http://foundationvienna.com/" target="_blank">Foundation</a></td><td><?php echo $nf->format(3); ?></td><td>Hainburgerstraße 47/1</td><td><a href="http://foundationvienna.com/" target="_blank">foundationvienna.com</a></td></tr>
  <tr><td><a href="http://strategischekapitulation.org/" target="_blank">format .strk</a></td><td><i>currently no address</i></td><td><i>currently no address</i></td><td><a href="http://strategischekapitulation.org/" target="_blank">strategischekapitulation.org</a></td></tr>
 <tr><td><a href="http://foxwien3.blogspot.co.at/" target="_blank">FOX</a></td><td><?php echo $nf->format(3); ?></td><td>Marxergasse 16</td><td><a href="http://foxwien3.blogspot.co.at/" target="_blank">foxwien3.blogspot.co.at</a></td></tr>
 <tr><td><a href="http://futur2.at/" target="_blank">Futur II</a></td><td><?php echo $nf->format(16); ?></td><td>Haberlgasse 42</td><td><a href="http://futur2.at/" target="_blank">futur2.at</a></td></tr>
 <tr><td><a href="http://gaertnergasse.com" target="_blank">Gärtnergasse</a></td><td><?php echo $nf->format(16); ?></td><td>Ottakringer Straße 44</td><td><a href="http://gaertnergasse.com" target="_blank">gaertnergasse.com</a></td></tr>
 <tr><td><a href="https://gessoartspace.com" target="_blank">GESSO Artspace</a></td><td><?php echo $nf->format(21); ?></td><td>Donaufelderstraße 73 / 5.04 A-B</td><td><a href="https://gessoartspace.com" target="_blank">gessoartspace.com</a></a></td></tr>
 <tr><td><a href="http://www.gomoartspace.com/" target="_blank">GOMO</a></td><td><?php echo $nf->format(4); ?></td><td>Argentinierstraße 67</td><td><a href="http://www.gomoartspace.com/" target="_blank">gomoartspace.com</a></td></tr>
 <tr><td><a href="http://www.guimaraes.info/" target="_blank">Guimarães</a></td><td><?php echo $nf->format(6); ?></td><td>Linke Wienzeile 36 / 1c</td><td><a href="http://www.guimaraes.info/" target="_blank">guimaraes.info</a></td></tr>
 <tr><td><a href="http://www.hoast.net/" target="_blank">hoast</a></td><td><?php echo $nf->format(2); ?></td><td>Große Sperlgasse 25</td><td><a href="http://www.hoast.net/" target="_blank">hoast.net</a></td></tr>
 <tr><td><a href="https://kaeshmaesh.tumblr.com" target="_blank">Kaeshmaesh</a></td><td><?php echo $nf->format(2); ?></td><td>Ennsgasse 20</td><td><a href="https://kaeshmaesh.com/" target="_blank">kaeshmaesh.com</a></td></tr>
 <tr><td><a href="kevinspace.org" target="_blank">Kevin Space</a></td><td><?php echo $nf->format(2); ?></td><td>Volkertstraße 17</td><td><a href="http://www.kevinspace.org" target="_blank">kevinspace.org</a></td></tr>
 <tr><td><a href="http://www.kluckyland.com" target="_blank" style="display:inline-block;transform:scaleX(-1);">KLUCKYLAND</a></td><td><?php echo $nf->format(20); ?></td><td>Othmargasse 34</td><td><a href="http://www.kluckyland.com" target="_blank">kluckyland.com</a></td></tr>
 <tr><td><a href="http://www.kulturdrogerie.org" target="_blank">Kulturdrogerie</a></td><td><?php echo $nf->format(18); ?></td><td>Gentzgasse 86-88</td><td><a href="http://www.kulturdrogerie.org" target="_blank">kulturdrogerie.org</a></td></tr>
 <tr><td><a href="http://www.kunsttankstelleottakring.at/" target="_blank">Kunsttankstelle Ottakring</a></td><td><?php echo $nf->format(16); ?></td><td>Grundsteingasse 45-47</td><td><a href="http://www.kunsttankstelleottakring.at/" target="_blank">kunsttankstelleottakring.at</a></td></tr>
 <tr><td><a href="http://www.kunstverein-extra.com/" target="_blank">Kunstverein Extra</a></td><td><?php echo $nf->format(6); ?></td><td>Eisvogelgasse 5</td><td><a href="http://www.kunstverein-extra.com/" target="_blank">kunstverein-extra.com</a></td></tr>
 <tr class="inactive"><td><a href="http://patrickmwschabus.wixsite.com/mandelkernproject" target="_blank">Mandelkern Project</a></td><td></td><td></td><td><a href="http://patrickmwschabus.wixsite.com/mandelkernproject" target="_blank">patrickmwschabus.wixsite.com/mandelkernproject</a></td></tr>
 <tr><td><a href="http://www.mauve-vienna.com/" target="_blank">Mauve</a></td><td><?php echo $nf->format(3); ?></td><td>Löwengasse 18</td><td><a href="http://www.mauve-vienna.com/" target="_blank">mauve-vienna.com</a></td></tr>
 <tr><td><a href="http://www.mzbaltazarslaboratory.org/" target="_blank">Mz Baltazar's Lab</a></td><td><?php echo $nf->format(20); ?></td><td>Wallensteinstraße 38-40/8</td><td><a href="http://www.mzbaltazarslaboratory.org/" target="_blank">mzbaltazarslaboratory.org</a></td></tr>
 <tr><td><a href="http://www.newjoerg.at/" target="_blank">New Jörg</a></td><td><?php echo $nf->format(20); ?></td><td>Jägerstraße 56</td><td><a href="http://www.newjoerg.at/" target="_blank">newjoerg.at</a></td></tr>
 <tr><td><a href="http://www.onemessgallery.com/" target="_blank">One Mess Gallery</a></td><td><?php echo $nf->format(1); ?></td><td>Löwelstraße 6</td><td><a href="http://www.onemessgallery.com/" target="_blank">onemessgallery.com</a></td></tr>
 <tr><td><a href="https://www.pferd.rocks" target="_blank">Pferd</a></td><td><?php echo $nf->format(11); ?></td><td>Medwedweg 3</td><td><a href="https://www.pferd.rocks" target="_blank">pferd.rocks</a></td></tr>
 <tr><td><a href="http://www.pinavienna.eu" target="_blank">Pina</a></td><td><?php echo $nf->format(4); ?></td><td>Große Neugasse 44</td><td><a href="http://www.pinavienna.eu" target="_blank">pinavienna.eu</a></td></tr>
 <tr><td><a href="http://seeyounextthursday.com" target="_blank">Schneiderei</a></td><td><i>nomadic</i></td><td><i>nomadic</i></td><td><a href="http://seeyounextthursday.com" target="_blank">seeyounextthursday.com</a></td></tr>
 <tr><td><a href="http://info.weloveschool.org" target="_blank">school</a></td><td><?php echo $nf->format(5); ?></td><td>Grüngasse 22</td><td><a href="http://info.weloveschool.org" target="_blank">info.weloveschool.org</a></td></tr>
 <tr><td><a href="http://www.setzkastenwien.at/" target="_blank">Setzkasten Wien</a></td><td><?php echo $nf->format(17); ?></td><td>Hernalser Hauptstraße 29/4</td><td><a href="http://www.setzkastenwien.at/" target="_blank">setzkastenwien.at</a></td></tr>
 <tr><td><a href="http://significantother.art/" target="_blank">Significant Other</a></td><td><?php echo $nf->format(7); ?></td><td>Burggasse 24</td><td><a href="http://significantother.art/" target="_blank">significantother.art</a></td></tr>
 <tr><td><a href="http://www.sizematters.club/" target="_blank">Size Matters</a></td><td><?php echo $nf->format(5); ?></td><td>Margaretenstraße 110</td><td><a href="http://www.sizematters.club/" target="_blank">sizematters.club</a></td></tr>
 <tr><td><a href="https://sortvienna.com/" target="_blank">SORT</a></td><td><?php echo $nf->format(1); ?></td><td>Bäckerstraße 7/8</td><td><a href="https://sortvienna.com/" target="_blank">sortvienna.com</a></td></tr>
 <tr><td><a href="http://www.supersuper.at" target="_blank">SUPER</a></td><td><?php echo $nf->format(5); ?></td><td>Schönbrunner Straße 10</td><td><a href="http://www.supersuper.at" target="_blank">supersuper.at</a></td></tr>
 <tr><td><a href="https://www.facebook.com/ViennaTower/" target="_blank">Tower</a></td><td><?php echo $nf->format(22); ?></td><td>Kratochwjlestraße 12</td><td><a href="https://www.facebook.com/ViennaTower/" target="_blank">facebook.com/ViennaTower</a></td></tr>
 <tr><td><a href="http://www.clubclub.wien/" target="_blank">THE CLUB CLUB</a></td><td><?php echo $nf->format(15); ?></td><td>Löschenkohlgasse 12</td><td><a href="http://www.clubclub.wien/" target="_blank">clubclub.wien</a></td></tr>
 <tr><td><a href="http://www.vesch.org/" target="_blank">Ve.Sch</a></td><td><?php echo $nf->format(20); ?></td><td>Wehlistraße 27b</td><td><a href="http://www.vesch.org/" target="_blank">vesch.org</a></td></tr>
 <tr><td><a href="http://www.ventgallery.com/" target="_blank">VENT gallery</a></td><td><?php echo $nf->format(5); ?></td><td>Hamburgerstraße 14</td><td><a href="http://www.ventgallery.com/" target="_blank">ventgallery.com</a></td></tr>
 <tr><td><a href="https://www.artfoundation.at/" target="_blank">Galerie Kunstbuero</a></td><td><?php echo $nf->format(6); ?></td><td>Schadekgasse 6-8</td><td><a href="https://www.artfoundation.at/" target="_blank">artfoundation.at</a></td></tr>
 <tr><td><a href="https://we-dey.in" target="_blank">WE DEY X SPACE</a></td><td><?php echo $nf->format(7); ?></td><td>Kandlgasse 24</td><td><a href="https://we-dey.in" target="_blank">we-dey.in</a></td></tr>
 <tr class="inactive"><td><a href="http://wellwellwell.at" target="_blank">wellwellwell</a></td><td><?php echo $nf->format(4); ?></td><td>Mittersteig 2a</td><td><a href="http://wellwellwell.at" target="_blank">wellwellwell.at</a></td></tr>
 <tr><td><a href="https://www.facebook.com/whitedwarfprojects/" target="_blank">White Dwarf Projects</a></td><td><?php echo $nf->format(3); ?></td><td>Seidlgasse 14</td><td><a href="https://www.facebook.com/whitedwarfprojects/" target="_blank">facebook.com/whitedwarfprojects</a></td></tr>
 <tr><td><a href="http://zentrale.jetzt/" target="_blank">Zentrale</a></td><td><?php echo $nf->format(16); ?></td><td>Neulerchenfelder Straße 52</td><td><a href="http://zentrale.jetzt/" target="_blank">zentrale.jetzt</a></td></tr>
 <tr><td><a href="http://www.vbkoe.org/" target="_blank">VBKÖ</a></td><td><?php echo $nf->format(1); ?></td><td>Maysedergasse 2</td><td><a href="http://www.vbkoe.org/" target="_blank">vbkoe.org</a></td></tr>
  <tr class="inactive"><td><a href="http://hhdm.eu/" target="_blank">HHDM</a></td><td><?php echo $nf->format(6); ?></td><td>Damböckgasse 8</td><td><a href="http://hhdm.eu/" target="_blank">hhdm.eu</a></td></tr>
    </tbody></table>
    <p class="inactive" style="padding-left: 10px"><i>*By including them in the index, we would like to pay hommage to all of the currently non operational or closed down initiatives that helped shape the local scene.</i></p>

    <table class="footer" style="border:none!important;" ><tr style="border:none!important;" ><td style="border:none!important;" >© 2018 Independent Space Index</td><td style="border:none!important; text-align: right" ><a href="mailto:contact@independentspaceindex.at">contact@independentspaceindex.at</a></td></tr>
</table>
    </div>

<script>
    $(document).ready(function()
        {
            $("#maintable").tablesorter({sortList: [[0,0]], cssAsc: 'up', cssDesc: 'down'});
        }
    );
    </script>
    <script>
        $(function(){
         $('#toggleInactive').click(function(){
               $('.inactive').toggle();
               this.classList.toggle("active");
            });
        });
    </script>
    <script>
             var n = $( "#maintable tr" ).length;
    $( "#aboutPanel .entryCount" ).text( n );
    </script>
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
<!--<script>
var acc = document.getElementsByClassName("calendar");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = document.getElementById("calendarPanel");
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>-->
<script>
function searchFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("mainTableBody");
   	entries = table.getElementsByTagName("tr");

    for (i = 0; i < entries.length; i++) {
        a = entries[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            entries[i].style.display = "";
        } else {
            entries[i].style.display = "none";

        }
    }
}
</script>

<!-- NEWSLETTER -->
<script src="scripts.js?v=<?php echo time(); ?>" ></script>
<!-- /NEWSLETTER -->

</body>
</html>