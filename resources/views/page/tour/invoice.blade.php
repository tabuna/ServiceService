@extends('layout.tour')

@section('content')



    <section class="container-fluid">
        <div class="row bg-white">

            <nav class="bg-danger box-shadow-lg">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="icon-location-pin"></i> Главная</a></li>
                        <li class="active">Счёт</li>
                    </ol>
                </div>
            </nav>


        </div>
    </section>



    <div class="container m-b-md">
        <div class="bg-white">

            <div class="bg-light lter b-b wrapper-md hidden-print">
                <a href="" class="btn btn-sm btn-info pull-right" onclick="window.print();">Распечатать</a>
                <h1 class="m-n font-thin h3">Счёт</h1>
            </div>


            <div class="wrapper-md">
                <div>
                    <img src="http://10.0.0.26:8000/img/tour/logo.png">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4>ОКУ «Центр кластерного развития туризма Липецкой области»</h4>
                            <p><a href="#">www.liptur.com</a></p>
                            <p>398050 г. Липецк,<br>
                                пл. Плеханова, 1
                            </p>
                            <p>
                                Телефон: 800-692-7753<br>
                                Факс: 800-692-7753
                            </p>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p class="h4">#9048392</p>
                            <h5>29 Марта 2016</h5>
                        </div>
                    </div>
                    <div class="well m-t bg-light lt">
                        <div class="row">
                            <div class="col-xs-6">
                                <strong>TO:</strong>
                                <h4>John Smith</h4>
                                <p>
                                    2nd Floor<br>
                                    St John Street, Aberdeenshire 2541<br>
                                    United Kingdom<br>
                                    Phone: 031-432-678<br>
                                    Email: youemail@gmail.com<br>
                                </p>
                            </div>
                            <div class="col-xs-6">
                                <strong>SHIP TO:</strong>
                                <h4>John Smith</h4>
                                <p>
                                    2nd Floor<br>
                                    St John Street, Aberdeenshire 2541<br>
                                    United Kingdom<br>
                                    Phone: 031-432-678<br>
                                    Email: youemail@gmail.com<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="m-t m-b">Order date: <strong>26th Mar 2013</strong><br>
                        Order status: <span class="label bg-success">Shipped</span><br>
                        Order ID: <strong>#9399034</strong>
                    </p>
                    <div class="line"></div>
                    <table class="table table-striped bg-white b-a">
                        <thead>
                        <tr>
                            <th style="width: 60px">QTY</th>
                            <th>DESCRIPTION</th>
                            <th style="width: 140px">UNIT PRICE</th>
                            <th style="width: 90px">TOTAL</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>iPhone 5 32GB White &amp; Silver (GSM) Unlocked</td>
                            <td>$749.00</td>
                            <td>$749.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>iPad mini with Wi-Fi 32GB - White &amp; Silver</td>
                            <td>$429.00</td>
                            <td>$858.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right"><strong>Subtotal</strong></td>
                            <td>$1607.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right no-border"><strong>Shipping</strong></td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right no-border"><strong>VAT Included in Total</strong></td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right no-border"><strong>Total</strong></td>
                            <td><strong>$1607.00</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection