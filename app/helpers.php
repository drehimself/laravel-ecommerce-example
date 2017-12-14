<?php

function presentPrice($price)
{
    return money_format('$%i', $price / 100);
}
