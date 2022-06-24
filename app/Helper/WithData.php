<?php

namespace App\Helper;

trait WithData
{
    // value => label
    public  $visa_status = [
        "Not started" => "Not Started",
        "Process start" => "Process Start",
        "Completed" => "Completed",
        "Pending" => "Pending"
    ];

    public $application_status = [
        "Not started" => "Not Started",
        "Process start" => "Process Start",
        "Completed" => "Completed",
        "Pending" => "Pending"
    ];

    public $coe_status = [
        "Unknown" => "Unknown",
        "Received" => "Received",
        "Pending" => "Pending"
    ];

    public $offer_status = [
        "Unknown" => "Unknown",
        "Received" => "Received",
        "Pending" => "Pending"
    ];

    public $currencies = [
        "MMK" => "MMK",
        "USD" => "USD",
        "AUD" => "AUD"
    ];
    
}