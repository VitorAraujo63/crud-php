<?php

function printMessage($message) {

    // message for create
    if ($message == 'success-create')
        return '<span class="text-success">Registration successfuly Complete!</span>';
    if ($message == 'error-create')
        return '<span class="text-error">Error wehn registering.</span>';

    // message for delete
    if ($message == 'success-remove')
        return '<span class="text-success">Registration removed successfully!</span>';
    if ($message == 'error-remove')
        return '<span class="text-error">Error removing registration.</span>';

    // message for update
    if ($message == 'success-update')
        return '<span class="text-success">Registration updated successfully!</span>';
    if ($message == 'error-update')
        return '<span class="text-error">Error updated registration.</span>';

}