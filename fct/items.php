<?php
// require '../index.php';
/**
 * retur les items
 *
 * @param string $item
 * @return string
 */
function displayItems($item)
{

    $editItem=validate($_GET['itemId']);
    if ($editItem===$item['id']) {
            $html='<form action="edit.php" method="post">';
            $html.='<input type="hidden" name="editItem" value="'.$item['id'].'">';
            $html.='<div class="input-group input-group-sm">
                          <input type="text" name="editItem" value="'.$item['element'].'"  class="form-control">
                            <span class="input-group-append">
                              <button type="submit" class="btn btn-info btn-flat">ok</button>
                            </span>
                    </div>'; 
        $html= '</form>';
    } else {
    $html= '<li class="'.($item['checked'] ? 'done': '').'">
                <!-- drag handle -->

                <!-- checkbox -->
                <div class="icheck-primary d-inline ml-2">
                <a href="toggleItem.php?itemId='.$item['id'].'"';
    if($item['checked']){

        $html.='<i class="far fa-check-square"></i>';
    }else{
        
        $html.='<i class="far fa-square"></i>';
    }
        $html.='</a></div>
                <!-- todo text -->
                <span class="text">'
                .$item['element'].
                '</span>
                <!-- Emphasis label -->
                <!-- General tools such as edit or delete-->
                <div class="tools">
                <a href="index.php?itemId='.$item['id'].'"<i class="fas fa-edit"></i></a>
                <a href="delete.php?itemId='.$item['id'].'"><i class="fas fa-trash"></i></a>
                </div>
            </li>';
}
return $html;
}
?>