<?php
/**
 * verifier les donnees entrer par les users
 *
 * @param string $data
 * @return string
 */
function validate($data)
{
    $data=htmlentities($data);
    $data=htmlspecialchars($data);
    return $data;
}