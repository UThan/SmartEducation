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

    public $status = [
        "Active" => "Active",
        "Deactivated" => "Deactivated",
        "Completed" => "Completed",
        "Postponed" => "Postponed",
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

    public $paymenttypes = [
        "Tutuion fees" => "Tution Fees",
        "Deposit" => "Deposit",
    ];
    
}