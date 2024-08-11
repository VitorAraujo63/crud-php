<?php

function printMessage($message) {

    // message for create
    if ($message == 'success-create')
        return '<span>Registration successfuly Complete!</span>';
    if ($message == 'error-create')
        return '<span>Error wehn registering.</span>';

    // message for delete
    if ($message == 'success-remove')
        return '<span>Registration removed successfully!</span>';
    if ($message == 'error-remove')
        return '<span>Error removing registration.</span>';

    // message for update
    if ($message == 'success-update')
        return '<span>Registration updated successfully!</span>';
    if ($message == 'error-update')
        return '<span>Error updated registration.</span>';

}