<?php


function current_date_time()
{
    $current_date_time = new DateTime();
    $current_date_time->setTimezone(new DateTimeZone('Asia/Jakarta'));
    return $current_date_time->format('Y-m-d H:i:s');
}
