<?php

$scope = 'Vũ Thanh Tài';

$name = function () use ($scope) {
    return $scope;
};

echo $name();
//Kết quả: Vũ Thanh Tài