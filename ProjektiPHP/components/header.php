<div class="wrapper row9">
    <header id="header" class="clear">
        <div id="hgroup">
            <a href="index.php"><img id="logo" src="" alt=""></a>
            <h1><a href="index.php">Lejleku</a></h1>
            <h2>Get your product everywhere for free</h2>
        </div>
        <div id="header-contact">
            <ul class="list none">
                <li>
                    <form action="search.php" method="POST">
                        <div class="search-wrapper">
                            <div class="input-holder">
                                <input type="text" class="search-input" name="search" placeholder="Type to search" />
                                <button class="search-icon" type="submit" name="submit-search" onclick="searchToggle(this, event);"><span></span></button>
                            </div>
                            <span class="close" onclick="searchToggle(this, event);"></span>
                        </div>
                    </form>
                </li>
                <li><a href="cart.php">
                        <img src="./images/shoppingbasket.png" width="65px" height="65px" alt="">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\">$count</span>";
                        } else {
                            echo "<span id=\"cart_count\">0</span>";
                        }
                        ?>
                    </a></li>
                    <li><?php
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                  echo '<a href="login.php"><img id="kyqu" src="images/loginicon.png"
                  height="64" width="64"></a>';
                }
                else{
                  echo '<a href="login.php"><img src="images/logouticon.png"
                  height="62" width="62"></a>';
                }
                ?></li>
            </ul>
        </div>
        <!-- menyt kryesore -->
    </header>
    <div class="wrapper row2">
        <nav id="topnav">
            <ul class="clear">
                <li class="first active"><a href="index.php">Homepage</a></li>
                <li><a href="laptopa.php">Laptopa</a></li>
                <li><a href="cart.php">Karta</a></li>
                <li><a href="galeria.html">Galeria</a></li>
                <li><a href="#">Partner&euml;t</a>
                    <ul>
                        <li><a target="_blank" href="http://kosovatrade-ks.com/">KosovaTrade</a></li>
                        <li><a target="_blank" href="https://telegrafi.com/">Telegrafi</a></li>
                        <li><a target="_blank" href="http://www.sigkos.com/">SigKos</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<script>
    function searchToggle(obj, evt) {
        var container = $(obj).closest('.search-wrapper');
        if (!container.hasClass('active')) {
            container.addClass('active');
            evt.preventDefault();
        } else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
    }
</script>