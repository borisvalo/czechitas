<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$title = 'Mgr.';
$name = 'Boris';
$lastName = 'Valo';

$owner = $title . ' ' . $name . ' ' . $lastName;

$workExperiences = array(
    array('company' => 'Facebbok', 'years' => 3),
    array('company' => 'Google', 'years' => 1),
    array('company' => 'CEZ', 'years' => 5),
);

$about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet et ex in congue. Nunc ac massa quis orci blandit vehicula a et tortor. Aliquam ullamcorper dolor dolor, nec gravida erat mollis quis. Morbi quam nisi, mollis et rhoncus eleifend, blandit egestas diam. Morbi ac magna malesuada, ultrices sem ut, posuere quam. In hac habitasse platea dictumst. Curabitur ac quam id velit vulputate imperdiet. Vivamus bibendum nibh scelerisque, volutpat augue non, tempor enim. Donec pharetra, nisi nec condimentum efficitur, justo nisl hendrerit mi, at maximus ipsum dolor vel est. Mauris lorem nisl, cursus rhoncus metus id, commodo auctor elit. Vestibulum at ullamcorper dui. Fusce vitae velit vitae sapien convallis laoreet nec lobortis mauris. Vivamus eu gravida velit, sed ultrices lacus. Pellentesque ex nibh, rutrum sed congue eu, auctor non nunc. Donec ac pharetra enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
$showAbout = true;

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'head.html' ?>

<body>

<?php include_once 'menu.html' ?>

<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Muj prvni web</h1>
                    <hr class="small">
                    <span class="subheading"><?php echo $owner; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1><?php echo $owner; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>Pracovni zkusenosti</h4>
            <ul>
            <?php

            foreach ($workExperiences as $experience) {
                $company = $experience['company'];
                $years = $experience['years'];

                if ($years == 1) {
                    $yearsWord = 'rok';
                } elseif ($years >= 2 && $years <= 4) {
                    $yearsWord = 'roky';
                } else {
                    $yearsWord = 'let';
                }

                echo "<li>$company ($years $yearsWord)</li>";
            }

            ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>O me</h4>
            <?php
            if ($showAbout) {
                echo '<p>';
                echo $about;
                echo '</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php include_once 'footer.html' ?>

</body>

</html>

