<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forma</title>
</head>
<body>
<form>

    <input type="checkbox">
</form>

</body>
</html>



<!doctype html>
<html lang="en">


<head>
    <?php require_once("header.php"); ?>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<?php require_once("main.php"); ?>
<br>
<br>
<br>
<body>

<div class="block">
    <p align="center" style="font-size: xx-large">№1.Способ Пополнения баланса</p>

    <div style="margin: 0 auto; padding: 5px; width: 500px; border: 1px solid #ddd; background: #fff; border-radius: 7px; -webkit-border-radius: 7px; -moz-border-radius: 7px; font: normal 14px/14px Geneva,Verdana,Arial,Helvetica,Tahoma,sans-serif;">
        <form method="get" action="?payment=qiwiRedirect" accept-charset="UTF-8">
            <input type="hidden" name="from" value="5014">
            <input type="hidden" name="lifetime" value="0.0">
            <input type="hidden" name="check_agt" value="false">
            <input type="hidden" name="iframe" value="true">
            <input type="hidden" name="txn_id" value="">
            <p style="text-align: center; color: #006699; padding: 20px 0px;">Пополнение счёта  c Qiwi</p>
            <table style="border-collapse: collapse;">
                <tbody>
                <tr style="background: #f1f5fa;">
                    <td style="color: #a3b52d; width: 45%; text-align: center; padding: 10px 0px;"></td>

                    <td style="padding: 10px;">
                        <input id="idto" style="width: 130px; border: 1px inset #555;" type="hidden" name="successUrl" value="http://ngn.tj/ru/payment">
                        <input id="idto" style="width: 130px; border: 1px inset #555;" type="hidden" name="failUrl" value="http://ngn.tj/ru/payment">
                        <input id="idto" style="width: 130px; border: 1px inset #555;" type="text" name="to">
                        <input id="idto" style="width: 130px; border: 1px inset #555;" type="hidden" name="currency" value="RUB">
                        <span id="div_idto"></span></td>
                </tr>
                <tr>
                    <td style="color: #a3b52d; padding: 10px 0px; width: 45%; text-align: center;">Сумма</td>
                    <td style="padding: 10px;">
                        <input style="width: 50px; text-align: right; border: 1px inset #555;" type="text" name="summ" value="" maxlength="5"> руб.
                    </td>
                </tr>
                <tr style="background: #f1f5fa;">
                    <td style="color: #a3b52d; padding: 10px 0px; width: 45%; text-align: center;">ivoki номер (<span>78xxxxx,&nbsp;</span>пример:
                        7800101)
                    </td>
                    <td style="padding: 10px;">
                        <input style="border: 1px inset #555;" type="text" name="comm" maxlength="12" title="Пожалуйста, введите номер по формату: 78ххххх,992xxxxxxxxx,7xxxxxxxxx (пример: 992935757575)" required=""></td>
                </tr>
                </tbody>
            </table>
            <p style="text-align: center;">
                <input style="padding: 10px 0; border: none; width: 300px;" type="submit" id="qiwibutton" name="okc" value="Пополнить счет"></p>
        </form>
    </div>
    <br>
    <br>
    <div class="block">
        <form action="http://ngn.tj/payments/doaction.php" method="POST" accept-charset="UTF-8">
            <input type="hidden" name="secret" value="2">
            <table id="kazkom" border="0" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr>

                    <td valign="middle"></td>
                    <td align="center" valign="top" width="90"></td>
                </tr>
                </tbody>
            </table>
            <p align="center" style="font-size: xx-large">№2 Способ пополнения баланса</p>
            <div style="margin: 0 auto; padding: 5px; width: 500px; border: 1px solid #ddd; background: #fff; border-radius: 7px; -webkit-border-radius: 7px; -moz-border-radius: 7px; font: normal 14px/14px Geneva,Verdana,Arial,Helvetica,Tahoma,sans-serif;">

                <p style="text-align:center;">Вы можете пополнить баланс с помощью банковских карт платежных систем Visa International,
                    MasterCard International, American Express .Оплата осуществляется через портал АО «Казкоммерцбанк»</p>
                <p style="text-align: center; color: #ff0000;"></p>
                <p style="text-align: center; color: #006699;">Пополнение счёта IVOKI</p>


                <table style="border-collapse: collapse;">
                    <tbody>
                    <tr>
                        <td style="color: #a3b52d; padding: 10px 0px; width: 45%; text-align: center;">Сумма в сомони <br> коммиссия от суммы -5%</td>
                        <td style="padding: 10px;">
                            <select name="amount">
                                <option selected="" value="10">10 c</option>
                                <option value="20">20 c</option>
                                <option value="50">50 c</option>
                            </select> </td>
                    </tr>
                    <tr style="background: #f1f5fa;">

                        <td style="color: #a3b52d; padding: 10px 0px; width: 45%; text-align: center;">IVOKI номер (пример: 7800101)</td>
                        <td style="padding: 10px;"><input style="border: 1px inset #555;" type="text" name="number" maxlength="12" pattern="78+[0-9]{5,5}" title="Пожалуйста, введите номер по формату: 78ххххх (пример: 7800101)" required=""></td>
                    </tr>
                    <tr>
                        <td style="color: #a3b52d; padding: 10px 0px; width: 45%; text-align: center;">email (пример: manager@tjinter.com)</td>
                        <td style="padding: 10px;"><input style="border: 1px inset #555;" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required=""> </td>
                    </tr>
                    </tbody>
                </table>
                <center><input style="padding: 10px 0; border: none;color: #fff; width: 300px;" type="submit" value="Пополнить счет"></center>



                <br>










            </div>
    </div>
    <div class="acc_container" id="cpayeer">
        <div class="block">


            <div class="content1">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4"></div>
            </div>

        </div>
    </div>

    </form>
</div>
</div>

</body>
<?php require_once("footer.php"); ?>

</html>