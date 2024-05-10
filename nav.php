<nav>
    <a class="<?php
    if ($pathParts['filename'] == "index") {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>

-

<a class="<?php
    if ($pathParts['filename'] == "detail") {
        print 'activePage';
    }
    ?>" href="detail.php">Species Index</a>

-

<a class="<?php
    if ($pathParts['filename'] == "about") {
        print 'activePage';
    }
    ?>" href="about.php">About</a>

-

<a class="<?php
    if ($pathParts['filename'] == "form") {
        print 'activePage';
    }
    ?>" href="form.php">Get Involved</a>

- 

<a class="<?php
    if ($pathParts['filename'] == "array") {
        print 'activePage';
    }
    ?>" href="array.php">Contest</a>
</nav>