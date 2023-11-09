<?php
/**
 *return le contenu du fichier
 *
 * @return void
 */
function getitem(){
    return unserialize(file_get_contents(FILE_NAME));
}