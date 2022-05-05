<?php

function getFloor($current, $request, $list): int | null {
    if ($request == null && count($list) == 0) {
        return $request;
    } else if ($request == null) {
        return getClosest($current, $list);
    } else {
        return $request;
    }

}

function getClosest($search, $arr) {
    $closest = null;
    foreach ($arr as $item) {
       if ($closest === null || abs($search - $closest) > abs($item - $search)) {
          $closest = $item;
       }
    }
    return $closest;
}

function getDirection($current, $request, $list): int {
    if ($current > getFloor($current, $request, $list) ) {
        return -1;
    } else if ($current < getFloor($current, $request, $list) ){
        return 1;
    } else {
        return 0;
    }
}
