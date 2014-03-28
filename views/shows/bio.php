<?php $bio = $this->bio;?>
<div class="row page">
    <div class="title dj">
        <h2><?php echo $bio['host'];?></h2>

        <h2 class="red"><span class="light"><?php echo $bio['displayDay'];?></span> <?php echo $bio['displayTime'];?></h2>

        <div class="clearfix"></div>
    </div><!--title-->

    <ul class="breadcrumbs">
        <li><a href="<?php echo URL;?>">Home</a></li>
        <li><a href="<?php echo URL;?>shows/">Shows</a></li>
        <li class="current"><a href="<?php echo URL."shows/bio/".$bio['plug'];?>/"><?php echo $bio['host'];?></a></li>
    </ul><!--breadcrumbs-->

    <div class="row content">
        <div class="medium-12 columns dj-bio">
            <div class="medium-3 columns">
                <img src="<?php echo ($bio['img_src']!="") ? URL.$bio['img_src'] : "http://placehold.it/283x329&text=No+Photo";?>"
                     alt="<?php echo $bio['host'];?>">
            </div>

            <section class="medium-9 columns">
                <?php echo ($bio['description']!="") ? stripslashes($bio['description']) : "No information available.";?>

            </section>
        </div><!--dj bio-->
    </div><!--row-->
</div><!--row-->