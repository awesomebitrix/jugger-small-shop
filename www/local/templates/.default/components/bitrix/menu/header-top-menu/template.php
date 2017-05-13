<div class="menu_header-top-menu">
    <nav class="nav">
        <?php
        foreach ($arResult as $item) {
            $class = $item['SELECTED'] ? "active" : "";
            $text = $item['TEXT'];
            $link = $item['LINK'];

            echo "<a class='nav-link {$class}' href='{$link}'>{$text}</a>";
        }
        ?>
    </nav>
</div>
