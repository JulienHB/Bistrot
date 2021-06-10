<?php
class Order{
    private int $_number;
    private object $_table;
    private object  $_waiter;
    private DateTime $_creationDate;
    private float $_gratuity;
    private bool $_isVipGuest=false;

    public function __construct()
    {
        
    }
    public function pay(){

    }
    public function cancel(){
        
    }
}