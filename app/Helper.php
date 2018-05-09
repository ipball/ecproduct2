<?php
function getStatusOrder($val)
{
    switch ($val) {
        case 'pending':
            $result = 'PENDING';
            break;
        case 'paid':
            $result = 'PAID';
            break;
        case 'shipping':
            $result = 'SHIPPING';
            break;
        case 'delivered':
            $result = 'DELIVERED';
            break;
        case 'refunded':
            $result = 'REFUNDED';
            break;
        case 'cancel':
            $result = 'CANCEL';
            break;
        default:
            $result = 'PENDING';
    }
    return $result;
}
