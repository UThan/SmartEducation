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

    public $level_test = [
        false => "Not Started" ,
        true => "Finished",
    ];    

    //payment

    public $currencies = [
        "MMK" => "MMK",
        "USD" => "USD",
        "AUD" => "AUD"
    ];

    //partner

    public $payment_types = [
        "Tution fees" => "Tution Fees",
        "Deposit" => "Deposit",
    ];

    public $partner_types = [
        "official" => "Official",
        "partner" => "Partner",
        "university" => "University",
        "agent" => "Agent",
    ];

    public $boolean = [
        true => "Yes",
        false => "No",
    ];
    
}