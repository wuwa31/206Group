<header>
    <nav>
        <a href="index.php"> 
            <div 
                <?php 
                    if ($currentPage == "index.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> HOME </div> 
        </a>
        <a href="restaurants.php"> 
            <div 
                <?php 
                    if ($currentPage == "restaurants.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> EATS </div> 
        </a>
        <a href="bars.php"> 
            <div 
                <?php 
                    if ($currentPage == "bars.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> BARS </div>
        </a>
        <a href="sports.php"> 
            <div 
                <?php 
                    if ($currentPage == "sports.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> SPORTS </div> 
        </a>
        <a href="form.php"> 
            <div 
                <?php 
                    if ($currentPage == "form.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> SURVEY </div>
        </a>
    </nav>
</header>