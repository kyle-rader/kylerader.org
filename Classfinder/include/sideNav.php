<nav class="SideNav">
    <ul>
    <?php
        foreach($terms['nav-items'] as $url => $name) {
            $active = strtoupper($pageTitle) == $name ? 'class="active"' : '';
            print "<li><a $active href=\"$url\">$name</a></li>";
        }
    ?>
    </ul>
</nav>
