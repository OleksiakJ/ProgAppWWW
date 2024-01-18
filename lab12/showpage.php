<?php
    function PokazPodstrone($alias) {
        require 'cfg.php';
        $alias_clear = htmlspecialchars($alias);
        $query = 'SELECT * FROM page_list WHERE page_title="'.$alias.'" LIMIT 1';
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);
        if ($row == null) {
            $web = '[nie_znaleziono_strony]';
        }
        else {
        
            $web = $row['page_content'];
        }
        return $web;
    }
?>