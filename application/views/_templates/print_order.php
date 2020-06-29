<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <title>Brainbox Equipment</title>

</head>

<body>

    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px 7px 10px 7px;
            vertical-align: top;
        }
        td.custom{
            border: 0;
            padding: 3px 0 3px 0;
        }
    </style>

    <table style="width:100%; border: 0;">
        <tr>
            <td colspan="2" class="custom" style="text-align: center; padding-bottom:30px">
                <h3 style="margin-bottom: 2px;"><u>BRAINBOX EQUIPMENT<u></h3>
                INVOICE

            </td>
        </tr>
        <tr>
            <td class="custom"> Order By</td>
            <td class="custom"> : <?=$order->name?></td>
        </tr>
        <tr>
            <td class="custom">Email / Phone </td>
            <td class="custom"> : <?=$order->email?> / <?=$order->phone?></td>
        </tr>
        <tr>
            <td class="custom">Order Date </td>
            <td class="custom"> : <?=date('d/m/Y h:i:s', strtotime($order->date_created))?></td>
        </tr>
        <tr>
            <td class="custom">Order Code </td>
            <td class="custom"> : <b><?=$order->order_code?></b></td>
        </tr>
    </table>
    <table style="width: 100%;">
        <thead>
            <tr>
                <td><b>Product</b></td>
                <td><b>Rental Price / Day</b></td>
                <td><b>Qty</b></td>
                <td><b>Rental Date</b></td>
                <td><b>Total Price / Admin Offers</b></td>
            </tr>
        </thead>
        <tbody>
            <?php
            // echo "<pre>";
            // echo $order->total_harga; 
            // print_r($order);
            // die(); 
            $products = $this->MyQuery->getProductOrder($order->id_order);
            // print_r($products);
            foreach ($products as $product) :
            ?>
                <tr>
                    <td style="width: 20%;"><b><?= $product->judul ?></b></td>
                    <td style="width: 20%;">
                        Product&emsp;: <br>Rp. <b style="float: right;"><?= number_format($product->harga_sewa, 0, ",", ".") ?></b>
                        <br>
                        Crew &emsp;&emsp;: <br>Rp. <b style="float: right;"><?= number_format($product->harga_sewa_crew, 0, ",", ".") ?></b>
                    </td>
                    <td style="width: 5%; text-align: center;">
                        <?= $product->qty ?>
                    </td>
                    <td style="width: 25%;">
                        <?= date('d/m/Y', strtotime($product->order_start_date)) . " - " . date('d/m/Y', strtotime($product->order_end_date)) ?>
                    </td>
                    <td style="width: 20%;">
                        <table style="width:100%; border: 0; padding: 0 0 0 0">
                            <tr>
                                <td class="custom">Rp.</td>
                                <td class="custom" style="text-align: right; font-weight: bold;"><?=number_format($product->total_price, 0, ",", ".")?></td>
                            </tr>
                            <tr>
                                <td class="custom">Rp.</td>
                                <td class="custom" style="text-align: right; font-weight: bold; color: green"><?=number_format($product->offer_price, 0, ",", ".")?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <span><b>Description :</b></span>
                        <br>
                        <?= $product->description ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4"><b>Sub Total :</b></td>
                <td>Rp. <b style="float: right;"><?= number_format($order->total_harga, 0, ",", ".") ?></b></td>
            </tr>
            <tr>
                <td colspan="4"><b>Discount :</b></td>
                <td>Rp. <b style="float: right; color:red"><?= number_format($order->potongan_harga ? $order->total_harga - $order->potongan_harga : "0", 0, ",", ".") ?></b></td>
            </tr>
            <tr>
                <td colspan="4"><b>Grand Total :</b></td>
                <td>Rp. <b style="float: right; color:green"><?= number_format($order->potongan_harga, 0, ",", ".") ?></b></td>
            </tr>
        </tbody>
    </table>

</body>

</html>