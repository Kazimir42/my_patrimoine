<div class="menu-left">
    <div class="leftContainer">

        <div class="logo">
            <p>my_patrimoine</p>
        </div>

        <div class="link">
            <ul>
                <a href="/my_patrimoine/dashboard.php"><li>Tableaux de bord</li></a>
                <a href="/my_patrimoine/stock_exchange.php"><li>Bourse</li></a>
                <a href="#"><li>Immobilier</li></a>
                <a href="#"><li>Crypto</li></a>
                <a href="#"><li>Assurance vie</li></a>
                <a href="#"><li>Exotique</li></a>
                <a href="#"><li>...</li></a>
            </ul>

        </div>


        <div class="userInfo">
            <p><?= $_SESSION["sessionUtilisateur"]->pseudo ?></p>
        </div>

    </div>
</div>