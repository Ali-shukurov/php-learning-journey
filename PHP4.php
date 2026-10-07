<?php

$clientName = "Ali Shukurov";
$invoiceId = 9842;
$amount = 249.99;
$isPaid = true;

// There are some best practices about the HEREDOC we must use escape sequences like that \$ or \\
$invoiceTemplate = <<<TEXT
=== HEREDOC INVOICE DETAILS ===
Client Name: {$clientName}
Invoice ID: #$invoiceId
Total Amount: $amount\$ 
Paid Status: $isPaid
System Path: C:\\app\\invoices\\old
TEXT;

$rawScript = <<<'TEXT'
=== NOWDOC RAW SCRIPT ===
user="$clientName"
log_path="C:\app\invoices\n$invoiceId"
raw_price="\$amount"
TEXT;


echo $invoiceTemplate . "\n";
echo $rawScript . "\n";


echo 'Ali Shukurov\n';
echo "Ali Shukurov\n";

$str = "Apple";
$val = $str[0];
echo $val . "\n";

$invoiceId = (string) $invoiceId;
$num = $invoiceId[-1];
echo $num . "\n";

$clientCode = <<<TEXT
=== GENERATED CLIENT CODE ===
Client Code: $val-$num
TEXT;

echo $clientCode;