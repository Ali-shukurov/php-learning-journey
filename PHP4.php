<?php

$clientName = "Ali Shukurov";
$invoiceId = 9842;
$amount = 249.99;
$isPaid = true;

$invoiceTemplate = <<<TEXT
=== HEREDOC INVOICE DETAILS ===
Client Name: {$clientName}
Invoice ID: #$invoiceId
Total Amount; $amount$
Paid Status: $isPaid
System Path: C:\app\invoices\old
TEXT;

echo $invoiceTemplate;