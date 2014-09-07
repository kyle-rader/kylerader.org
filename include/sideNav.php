<nav class="SideNav">
    <ul class="show-for-medium-up">
    <?php
        foreach($terms['nav-items'] as $url => $name) {
            $active = strtoupper($pageTitle) == $name ? 'class="active"' : '';
            print "<li><a $active href=\"$url\">$name</a></li>";
        }
    ?>
    </ul>
    <div class="mobile-menu hide-for-medium-up">
        <a href="#" data-dropdown="mobile-menu"><i class="fi-list"></i></a>
        <ul id="mobile-menu" class="mega f-dropdown" data-dropdown-content>
            <?php
            foreach($terms['nav-items'] as $url => $name) {
                $active = strtoupper($pageTitle) == $name ? 'class="active"' : '';
                print "<li><a $active href=\"$url\">$name</a></li>";
            }
            ?>
        </ul>
    </div>
</nav>
