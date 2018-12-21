
<?php

function getRole($role)
{
    return $role();
}

echo getRole(function () {
    return 'Học lập trình online toidicode.com';
});