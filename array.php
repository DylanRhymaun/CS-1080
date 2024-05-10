<?php 
include 'top.php'; 

$bearPhotographers = array(
    array('2023', 'Playtime with Mom', 'Dan Orr', 'Alaska', 'Brown Bear'),
    array('2022', 'Im Vegetarian', 'Jeff Fladen', 'Tennessee', 'Black Bear'),
    array('2021', 'Alaskan Summer', 'Kari Douglass', 'Alaska', 'Brown Bear'),
    array('2020', 'River Ursid', 'Rylee Jensen', 'Alaska', 'Brown Bear'),
    array('2019', 'A Tundra Stroll', 'Rylee Jensen', 'Alaska', 'Brown Bear')
);

$numPhotographers = count($bearPhotographers);
?>

    <main>
         <section class="bearoftheweek">
         <h2 style="text-align: left;">The Bear Blog's Annual Photo Contest</h2>  
         <p>Every year, our organization presents the prestigious award of "Best Bear Photo" to one talented nature photographer. These photos are critical to documenting bear species and habitats, and help to promote our cause of sustaining healthy bear populations worldwide. No cash value. </p>
        </section>

        <section class="bearoftheweek">
        <h2>Past <?php echo $numPhotographers; ?> Winners</h2>        <table>
            <tr>
                <th>Year</th>
                <th>Title</th>
                <th>Photographer</th>
                <th>Location</th>
                <th>Species</th>
            </tr>
        <?php
            foreach ($bearPhotographers as $bearPhotographer) {
                print'<tr>';
                print '<td>' . $bearPhotographer[0] . '</td>';
                print '<td>' . $bearPhotographer[1] . '</td>';
                print '<td>' . $bearPhotographer[2] . '</td>';
                print '<td>' . $bearPhotographer[3] . '</td>';
                print '<td>' . $bearPhotographer[4] . '</td>';
                print '</tr>' . PHP_EOL;
            }
            ?>
            </table>
        </section>
        
        <section class="bearoftheweek">
            <h2>A Thank you to the Artists</h2>
           <p>These intrepid photographers navigate treacherous terrain and endure harsh conditions to capture compelling images that shed light on the challenges facing bear populations. Their dedication and courage not only produce stunning visuals but also serve as a rallying cry for conservation efforts, honoring their sacrifices in the ongoing struggle to protect these vulnerable species. Moreover, photography becomes a tribute to the dedication of bear conservationists who venture into the wild, often risking their lives to document these majestic creatures.</p>
        </section>

        <section class="bearoftheweek">
            <h2>Gallery</h2>
            <figure class="rounded">
                    <img src="contestpics/2023.png" alt="Playtime with Mom" class="rounded">
                    <figcaption>2023 Winner: Playtime with Mom - <cite>Photographed by Dan Orr</cite></figcaption>
                </figure>
            
                <figure class="rounded">
                    <img src="contestpics/2022.png" alt="Im Vegetarian" class="rounded">
                    <figcaption>2022 Winner: I'm Vegetarian - <cite>Photographed by Jeff Fladen</cite></figcaption>
                </figure>

                <figure class="rounded">
                    <img src="contestpics/2021.png" alt="Alaskan Summer" class="rounded">
                    <figcaption>2021 Winner: Alaskan Summer - <cite>Photographed by Kari Douglass</cite></figcaption>
                </figure>

                <figure class="rounded">
                    <img src="contestpics/2020.png" alt="River Ursid" class="rounded">
                    <figcaption>2020 Winner: River Ursid - <cite>Photographed by Rylee Jensen</cite></figcaption>
                </figure>

                <figure class="rounded">
                    <img src="contestpics/2019.png" alt="A Tundra Stroll" class="rounded">
                    <figcaption>2019 Winner: A Tundra Stroll - <cite>Photographed by Rylee Jensen</cite></figcaption>
                </figure>
        </section>
    </main>
<?php include 'footer.php'; ?>