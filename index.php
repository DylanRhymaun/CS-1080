<?php include 'top.php'; ?>
    <main>
        <section>
        <h2>Species of the Week</h2>
        <article class="bearoftheweek">
            <h3>Sun Bears</h3>
            <figure class="rounded">
                <img src="../images/sunbear.jpg" alt="Sun Bear" class="rounded">
                <figcaption>Sun Bear - <cite>Courtesy of the Wellington Zoo, New Zealand</cite></figcaption>
                
            </figure>
            <table>
                <tr>
                    <th><u>Scientific Name</u></th>
                    <th><u>Habitat</u></th>
                    <th><u>Diet</u></th>
                    <th><u>Estimated Population</u></th>
                </tr>
                <tr>
                    <td>H. malayanus</td>
                    <td>Southeast Asia</td>
                    <td>Bugs and fruits</td>
                    <td>Under 1000</td>
                </tr>
            </table>
            <p>Sun Bears, often referring to the subspecies, the Malayan Sun Bear, have a cult following among bear enthusiasts due to their unique appearance - often described as uncannily human. They are easy to identify by their slender coat, distinct brown crest on their chest, and humanlike porportions. Unfortunately, these lovable creatures are one of the most endangered large mammals on the planet, due to habitat loss and deforestation in Southeast Asia, and historic poaching.</p>
            <cite><a href="https://www.oaklandzoo.org/wildlife-conservation/sun-bears">The Oakland Zoo's information page on Sun Bears</a></cite>
            </article>
        <br>
        <br>
        <br>
        </section>
        <!-- ####################################################### --> 
        <section class="bearoftheweek">
            <h2>Past winners of our photography competition</h2>        <table>
                <tr>
                    <th>Year</th>
                    <th>Title</th>
                    <th>Photographer</th>
                    <th>Location</th>
                    <th>Species</th>
                </tr>

            <?php
            $sql = 'SELECT photoYear, photoTitle, photoTaker, photoLocation, bearSpecies FROM tblBestPhotographers';
            $statement = $pdo->prepare($sql);
            $statement->execute();

            $records = $statement->fetchAll();

            foreach($records as $record){
                print '<tr>';
                    print '<td>' . $record['photoYear'] .'</td>';
                    print '<td>' . $record['photoTitle'] .'</td>';
                    print '<td>' . $record['photoTaker'] .'</td>';
                    print '<td>' . $record['photoLocation'] .'</td>';
                    print '<td>' . $record['bearSpecies'] .'</td>';
                    print '</tr>' . PHP_EOL;
                }
            ?>
                
            </table>
            <a href="array.php">Learn more about our bear photography conmpetition and see photos here</a>
    <!-- ########################################################### --> 

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
        <!-- ############################################# --> 
        <section class="bearoftheweek">

            <h2>Understanding Conservation Status</h2>

            <p>The International Union for Conservation of Nature (IUCN) published the current standard for species risk classifications in 1964, titled <em>the Red Data Book</em>. This system classifies 99% of species into 7 categories, ranging from Least Concern, to Extinct. The three Bear species listed above are categorized as Vulnerable.</p>
            <p>An important keyword that comes up in these definitions is Criteria. There are different criteria for measuring statuses in new ways. For example, Criteria A is a measurement that takes into account Population size, number of mature individuals, age of parents compared to newborns, reduction in population, and habitat. This is the most commonly used. <br> These are the generasl meanings behind each category:<p>
            <table>
                <tr>
                    <th>Least Concern</th>
                    <td>The species "does not qualify for Critically Endangered, Endangered, Vulnerable or Near Threatened."</td>
                </tr>
                <tr>
                    <th>Near Threatended</th>
                    <td>The species is "close to qualifying for or is likely to qualify for a threatened category in the near future."</td>
                </tr>
                <tr>
                    <th>Vulnerable</th>
                    <td>When any criteria shows a reduction in population size of over >50% over 10 years, A occupancy of under 20,000 square km, <em>or</em> a population of less than 10,000 mature members.</td>
                </tr>
                <tr>
                    <th>Endangered</th>
                    <td>When any criteria shows a reduction in population size of over >70% over 10 years, A occupancy of under 5000 square km, <em>or</em> a population of less than 2500 mature members.</td>
                </tr>
                <tr>
                    <th>Critically Endangered</th>
                    <td>When any criteria shows a reduction in population size of over >80% over 10 years, A occupancy of under 10 square km, <em>or</em> a population of less than 250 mature members.</td>
                </tr>
                <tr>
                    <th>Extinct in the Wild</th>
                    <td>None live outside of captivity or cultivation</td>
                </tr>
                <tr>
                    <th>Extinct</th>
                    <td>No living members exist</td>
                </tr>
                <tr>
                    <td colspan="2"><cite><a href="https://portals.iucn.org/library/node/10315">The IUCN's detailed breakdown of the categories</a></cite></td>
    </table>
        </section>
        
    </main>
    <?php include 'footer.php'; ?>