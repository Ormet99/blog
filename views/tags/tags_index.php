<?php

$_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
foreach ($_tags as $tag){
    $this->tags[$tag['post_id']][] = $tag['tag_name'];
}
?>
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        Cras justo odio
    </a>
    <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>
