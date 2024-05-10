<?php 
    include 'top.php';

    $dataIsGood = false;
    $email = '';
    $role = '';
    $roles = array('enth', 'nat', 'educ', 'camp', 'all');
    $attraction = '';
    $grizzly = 1;
    $sun = 0;
    $asiaticBlack = 0;
    $pets = '';
    $panda = '1';
    $sloth = '';
    $polar = '';
    $black = '';
    $message = '';

    function getData($field) {
        if (!isset($_POST[$field])) {
            $data = "";
        } else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    function verifyAlphaNum($testString) {
        return (preg_match("/^([[:alnum:]]|-|\/|\.| |\'|&|;|#)+$/", $testString));
    }

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        print PHP_EOL . '<!-- Starting Sanitization -->' . PHP_EOL;
    
        $email = getData('email');
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $role = getData('wildlifeRole');
        $attraction = getData('txtAttraction'); 
        $grizzly = (int) getData('chkGrizzly');
        $sun = (int) getData('chkSun');
        $asiaticBlack = (int) getData('chkAsiaticBlack');
        $pets = getData('pets');
    
        print PHP_EOL . '<!-- Starting Validation -->' . PHP_EOL;
        $dataIsGood = true;
        
        if ($email == '') {
            $message .= '<p class="mistake">Please enter your email</p>';
            $dataIsGood = false;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message .= '<p class="mistake">Please enter a valid email</p>';
            $dataIsGood = false;
        }
    
        if ($role == '') {
            $message .= '<p class="mistake">Please choose your relationship to wildlife</p>';
            $dataIsGood = false;
        } elseif (!in_array($role, $roles)) {
            $message .= '<p class="mistake">Invalid relationship to wildlife</p>';
            $dataIsGood = false;
        }
    
        if ($attraction == '') {
            $message .= '<p class="mistake">Please tell us what draws you to nature</p>';
            $dataIsGood = false;
        } elseif (!verifyAlphaNum($attraction)) {
            $message .= '<p class="mistake">Invalid characters, please correct</p>';
            $dataIsGood = false;
        }

        $totalChecked = 0;
        if($grizzly !=1) $grizzly = 0;
        $totalChecked += $grizzly;

        if($sun !=1) $sun = 0;
        $totalChecked += $sun;

        if($asiaticBlack !=1) $asiaticBlack = 0;
        $totalChecked += $asiaticBlack;

        if($totalChecked == 0){
            $message .= '<p class="mistake">Please choose the most huggable bear</p>';
            $dataIsGood = false;
        }

        if ($pets !="panda" AND $pets !="sloth" AND $pets !="polar" AND $pets !="black"){
            $message .='<p class="mistake">Please choose the bear the bear you would most like to keep as a pet</p>';
            $dataIsGood = false;
        }

        print '<!-- Starting Saving -->';
        if($dataIsGood){
            $sql = 'INSERT INTO tblBearInterests
            (fldEmail, fldRole, fldComments, fldGrizzly, fldSun, fldAsiaticBlack, fldPets)';

            $sql .= ' VALUES (?, ?, ?, ?, ?, ?, ?)';

            $data = array($email, $role, $attraction, $grizzly, $sun, $asiaticBlack, $pets);
        
        try {
            $statement = $pdo->prepare($sql);
            if($statement->execute($data)){
                $message .= '<p>Your information was successfully saved</p>';
            } else {
                $message .= '<p>Your information was NOT successfully saved</p>';
            }
        } catch(PDOException $e){
            $message .= '<p>Could not insert the record, please reach out to site administrator</p>';
        }
    }
}
?>


<!-- ##################################################################### -->


    <main>
    <section>
        <h2>Your information will help us with our efforts.</h2>

        
        <form action="#" id="bearForm" method="post" class="bearoftheweek">
            <fieldset>
                <legend>What is your email?</legend>
                <figure class="rounded">
                    <img src="../images/formbear.jpg" alt="Standing Grizzly Bear" class="rounded">
                    <figcaption>Grizzly Bear - <cite>Via iStockphoto.com</cite></figcaption>
                </figure>

                <p>
                    <label class="required" for="email">Email:</label>
                    <input id="email" maxlength="40" name="email" onfocus="this.select()" tabindex="300" type="email" placeholder="name@domain.com" value="<?php echo htmlspecialchars($email); ?>">
                </p>
            </fieldset>


            <fieldset class="listbox">
                <legend>What role best describes you?</legend>
                <p>
                    <select id="wildlifeRole" name="wildlifeRole" tabindex="120">
                        <option
                        <?php if ($role == "enth") print 'selected';?>
                            value="enth">Enthusiast</option>
                        <option
                        <?php if ($role == "nat") print 'selected';?>
                            value="nat">Naturalist</option>
                        <option
                        <?php if ($role == "edu") print 'selected';?>
                            value="edu">Educator</option>
                        <option
                        <?php if ($role == "camp") print 'selected';?>
                            value="camp">Camper</option>
                        <option
                        <?php if ($role == "all") print 'selected';?>
                            value="all">All of the above</option>
                    </select>
                </p>
            </fieldset>


            <fieldset class="textarea">
            <legend>What attracts you to nature?</legend>
                <p>
                    <label for="txtAttraction"></label>
                    <textarea id="txtAttraction" name="txtAttraction" tabindex="200"><?php print $attraction; ?></textarea>
                </p>
            </fieldset>


            <fieldset class="checkbox">
                <legend>Which is the most huggable bear?</legend>
                <p>
                    <input id="chkGrizzly" name="chkGrizzly" tabindex="510"
                    <?php if ($grizzly) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkGrizzly">Grizzly Bear</label>
                </p>
                <p>
                    <input id="chkSun" name="chkSun" tabindex="510"
                    <?php if ($sun) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkSun">Sun Bear</label>
                </p>
                <p>
                    <input id="chkAsiaticBlack" name="chkAsiaticBlack" tabindex="510"
                    <?php if ($asiaticBlack) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkAsiaticBlack">Asiatic Black Bear</label>
                </p>
            </fieldset>


            <fieldset class="radio">
                <legend>Which of the following would you humanely have as a pet if you had to choose one?</legend>
                <p>
                    <input type="radio" id="petsPanda" name="pets" value="panda" tabindex="120"
                    <?php if($pets == "panda") print 'checked'; ?>
                    required>
                    <label class="radio-field" for="petsPanda">Panda Bear</label>
                </p>
                <p>
                    <input type="radio" id="petsSloth" name="pets" value="sloth" tabindex="120"
                    <?php if($pets == "sloth") print 'checked'; ?>
                    required>
                    <label class="radio-field" for="petsSloth">Sloth Bear</label>
                </p>
                <p>
                    <input type="radio" id="petsPolar" name="pets" value="polar" tabindex="120"
                    <?php if($pets == "polar") print 'checked'; ?>
                    required>
                    <label class="radio-field" for="petsPolar">Polar Bear</label>
                </p>
                <p>
                    <input type="radio" id="petsBlack" name="pets" value="black" tabindex="120"
                    <?php if($pets == "black") print 'checked'; ?>
                    required>
                    <label class="radio-field" for="petsBlack">Black</label>
                </p>
            </fieldset>


            <fieldset class="buttons">
                <input id="btnSubmit" name="btnSubmit" tabindex="900" type="submit" value="Register">
            </fieldset>
        </form>
    </section>


    <!-- ##################################################################### -->


    <section>
        <h2>Post Array</h2>
        <?php
            print $message;

            print '<p>Post Array:</p><pre>';
            print_r($_POST);
            print '</pre>';
        ?>
    </section>



    

    </main>
    <?php include 'footer.php'; ?>