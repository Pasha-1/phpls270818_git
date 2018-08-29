<?php
//зад.1 =======================
function task1($most)
{
    $info = file_get_contents($most);
    $xml = new SimpleXMLElement($info);
    echo 'Order Number: ';
    print_r($xml->attributes()->PurchaseOrderNumber->__toString());

    echo '<br />Order Date: ';
    print_r($xml->attributes()->OrderDate->__toString());//Метод __toString() позволяет классу решать, как он должен реагировать при преобразовании в строку

    echo '<br/ ><br />Shipping Address -';
    echo '<br />Name: ';
    print_r($xml->Address[0]->Name->__toString());

    echo '<br />Street: ';
    print_r($xml->Address[0]->Street->__toString());

    echo '<br />City: ';
    print_r($xml->Address[0]->City->__toString());

    echo '<br />State: ';
    print_r($xml->Address[0]->State->__toString());

    echo '<br />Zip: ';
    print_r($xml->Address[0]->Zip->__toString());

    echo '<br />Country: ';
    print_r($xml->Address[0]->Country->__toString());

    echo '<br /><br />Billing Address -';

    echo '<br />Name: ';
    print_r($xml->Address[1]->Name->__toString());

    echo '<br />Street: ';
    print_r($xml->Address[1]->Street->__toString());

    echo '<br />City: ';
    print_r($xml->Address[1]->City->__toString());

    echo '<br />State: ';
    print_r($xml->Address[1]->State->__toString());

    echo '<br />Zip: ';
    print_r($xml->Address[1]->Zip->__toString());

    echo '<br />Country: ';
    print_r($xml->Address[1]->Country->__toString());

    echo '<br /><br />Delivery Notes: ';
    print_r($xml->DeliveryNotes->__toString());

    echo '<br />Item - 1';

    echo '<br />Part Number: ';
    print_r($xml->Items->Item[0]->attributes()->PartNumber->__toString());

    echo '<br />Product Name: ';
    print_r($xml->Items->Item[0]->ProductName->__toString());

    echo '<br />Quantity: ';
    print_r($xml->Items->Item[0]->Quantity->__toString());

    echo '<br />US Price: ';
    print_r($xml->Items->Item[0]->USPrice->__toString());

    echo '<br />Comment: ';
    print_r($xml->Items->Item[0]->Comment->__toString());

    echo '<br /><br />Item - 2';

    echo '<br />Part Number: ';
    print_r($xml->Items->Item[1]->attributes()->PartNumber->__toString());

    echo '<br />Product Name: ';
    print_r($xml->Items->Item[1]->ProductName->__toString());

    echo '<br />Quantity: ';
    print_r($xml->Items->Item[1]->Quantity->__toString());

    echo '<br />US Price: ';
    print_r($xml->Items->Item[1]->USPrice->__toString());

    echo '<br />ShipDate: ';
    print_r($xml->Items->Item[1]->ShipDate->__toString());
}

//зад.4 =======================
function task4()
{
    $papka = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json');
    $papka = json_decode($papka, true);
    echo '<pre>';
    echo 'Page ID: ' . $papka['query']['pages']['549237610']['pageid'] . '<br />';
    echo 'Title: ' . $papka['query']['pages']['549237610']['title'];
}

//зад.3 =======================
function task3()
{
    echo 'CSV';
    $array = [];
    for ($z = 0; $z < 100; $z++) {
        $pun = rand(1, 200);
        $array[] = $pun;
    }
    $pen = fopen('data.csv', 'a');
    fputcsv($pen, $array);
    fclose($pen);
    $pen = fopen('data.csv', 'r');
    $csv = '';
    while (($data = fgetcsv($pen)) !== false) {
        $csv = $data;
    }
    fclose($pen);
    $summa = 0;
    foreach ($csv as $digit) {
        $summa += $digit;
    }
    echo $summa;
}

//зад.2 =======================

