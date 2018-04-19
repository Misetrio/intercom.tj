<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">


<head>
    <?php require_once("main.php");  ?>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<?php require_once("header.php"); ?>
<div class="breadcrumbs" style="padding-left: 42px;">

            <a href="index.php">Главная</a> &nbsp;/&nbsp; <span>Оплата </span>

        </div>
<body>
<div class="block"style="padding:45px;">
    <div>
        <p align="center" style="font-size: xx-large"><strong>Пополнение баланса интернета</strong></p>
    <div style="margin: 0 auto;  padding: 15px; height:230px;width: 430px;border: 1px solid #ddd; background: #f7f7f7; border-radius: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; font: normal 14px/14px Geneva,Verdana,Arial,Helvetica,Tahoma,sans-serif;">
<form method="get" action="?payment=qiwiRedirect" accept-charset="UTF-8">
    <table style="border-collapse: collapse;">
    <tbody>

           <!-- Nomer -->



                    <tr>
                        <td  style="color: #a3b52d;   width: 100%; "><strong>Номер телефона:</strong></td>
                        <td align="left">
                            <input style="width: 160px; " type="text" name="summ" value="" maxlength="12">
                        </td>
                    </tr>




            <!-- Summa -->

    <tr>
        <td style="color: #a3b52d; padding: 10px 0px; width: 45%; text-align: left;"><strong>Сумма:</strong></td>
        <td style="padding: 20px;">
        <input style="width: 50px; text-align: right; " type="text" name="summ" value="" maxlength="5"> Сомон.
                        </td>
    </tr>


    <tr>

        <td >                              <strong>Как оплатить</strong></p>   </td>     <td><select>
                                                 <option> Выбрать</option>
                                                 <option>Киви Кошелек</option>
                                                 <option> КазкомерцБанк</option>
                                             </select>
            </td>

    </tr>



    <tr>
    <td width="200px" >
  <input type="button"   style="padding: 10px; width="300px;" name="oplata" value="Оплатить"  >


    </td>
           </tr>

    </tbody>

    </table>
</form>
    </div>
        </div>
</div>
</body>

<?php require_once("footer.php"); ?>
</html>