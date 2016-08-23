
<html>
<script src="/vue.js"></script>
<script src="/vue-resource.js"></script>
    <head>
        <meta charset="utf-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <!-- Bootstrap Styles-->
        <link href="/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
        <link href="/css/pay.css" rel="stylesheet" />
        <!-- Google Fonts-->


        <title>Pay</title>
        

    </head>
    <body>
        <div class="contain" >
            <nav class="navbar navbar-default" role="navigation">
                <div class="col-md-8 col-md-offset-2">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">ManChong</a>
                    </div>
                    <div style="float:right;">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                            <li class="dropdown">
                                <a href="pay.html" class="dropdown-toggle" data-toggle="dropdown">
                                    Java 
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="pay.html">jmeter</a></li>
                                    <li><a href="/pay.html">EJB</a></li>
                                    <li><a href="/pay.html">Jasper Report</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/">分离的链接</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/">另一个分离的链接</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>



        <div class="container" id="payform">
            <div class="col-md-8 col-md-offset-2">

                <p id="con-addr"><strong>填写收货地址</strong></p><hr/>
                <table>
                    <tr class="tr">
                        <td class="left" valign="top">
                            地址:
                        </td>
                        <td>
                            <textarea  class="textarea" id="sendaddress" rows="2" v-model="addr"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="left">
                            收货人:
                        </td>
                        <td>
                            <input type="text" class="input" id="receiver" v-model="name">
                        </td>
                    </tr >
                    <tr class="tr">
                        <td class="left">
                            邮政编码:
                        </td>
                        <td>
                            <input type="text" class="input" id="code" v-model="code">
                        </td>
                    </tr>
                    <tr class="tr">
                        <td class="left">
                            电话:
                        </td>
                        <td>
                            <input type="text" class="input" id="phone" v-model="tel">
                        </td>
                    </tr>

                </table>
                <button onclick="myFunction()" class="btnl1"><strong style="font-size:18px;">确定</strong></button><br/><hr/><br/>        

            </div>
            <div class="col-md-8 col-md-offset-2">
                <p><strong>确认购买信息</strong></p><hr>
                <table class="paytb" style="background-color: #8ec0ee;">
                    <tr class="paytb1">
                        <td class="mid" style="width: 350px;">
                            商品信息:
                        </td>
                        <td class="mid" >
                            单价:
                        </td>
                        <td class="mid" >
                            数量:
                        </td>

                        <td class="mid" >
                            合计:
                        </td>
                    </tr>
                    <tr style="height: 60px;">
                        <td class="mid" id="goodmessage">
                           <?php $s="1";echo $s;?>
                        </td>
                        <td class="mid" id="price">
                           <?php $s="3000";echo $s;?>
                        </td>
                        <td class="mid" id="number">
                           <?php $s="1";echo $s;?>
                        </td>
                        <td class="mid" id="costs">
                           <?php $s1="3000";$num="1";$cost=$s1*$num;echo $cost;?>
                        </td>                        
                    </tr>
                </table>
                <table>
                    <tr style="background-color: #b5e0d8;">
                        <td>
                            <input type="text" id="cost" value="运送方式:普通配送快递 本次邮递费用为:￥20.00">
                        </td>                   
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="cost" value="发货时间:卖家承诺订单在买家付款后,3天内发送,一月内可自行领取">
                        </td>                   
                    </tr>
                    <tr>

                        <td>
                            <?php
                            $s=3020.00;
                            $costs="价格总计:￥".$s;
                            echo '<input id="tdbottom" type="text"  value='.$costs.'>';
                            ?>
                            
                        </td> 
                    </tr>
                </table><hr/>
                <div class="contain">
                    <div class="col-md-8" style="float:right;margin:0px;border:dashed #b5e0d8 1px">                    
                        <div class="col-md-3" style="text-align:left;padding-top:7px;">                      
                            <p class="jin-e-la"><strong>金额:</strong></p>
                        </div>
                        <div class="col-md-9">
                            <?php
                            $costs="￥3020.00";
                            echo '<input id="sumprice" class="zong-jin-e" type="text" value='.$costs.'>';
                            ?>
                            <br/>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding:0px">
                        <div class="col-md-8" style="float:right;margin:0px;border:dashed #b5e0d8 1px">                    
                            <div class="col-md-3" style="text-align:left;padding-top:7px;">                      
                                <p class="jin-e-la"><strong>地址:</strong></p>
                            </div>
                            <div class="col-md-9"  style="padding-top:7px;">
                                <input id="shouhuodizhi" type="text" value="请在上方填写地址" style="font-size:16px;"><br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding:0px">
                        <div class="col-md-8" style="float:right;margin:0px;border:dashed #b5e0d8 1px">                    
                            <div class="col-md-3" style="text-align:left;padding-top:7px;">                      
                                <p class="jin-e-la"><strong>收货人:</strong></p>
                            </div>
                            <div class="col-md-9" style="text-align:left;padding-top:7px;">
                                <input id="shouhuoren" type="text" value="请在上方填写收货人" style="font-size:16px"><br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding:0px">
                        
                            <input type="hidden" name="name" id="name">
                            <input type="hidden" name="addr" id="addr">
                            <button @click="post" class="btnl2" style="float:right;"><strong style="font-size:18px;">OK</strong></button><br/><br/><br/>
                     
                    </div>
                    
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        
        <script>                      
            Vue.http.options.emulateJSON = true
            var payform = new Vue({
                el: '#payform',
                data:{
                    addr:'a',
                    name:'s',
                    code:'d',
                    tel:'1',

                },
                methods:{
                    post: function(){
                        this.$http.post('/pay',this.$data).then(
                            (response) =>{
                            alert(JSON.stringify(response.data))
                            console.log(response.data)
                        this.showable = 'none'

                    }).catch(function(response) {

                            console.log(response)
                        })
                    }
                }
            })
        </script>
        <script>
            var addr = document.getElementById("sendaddress").value;
            var name = document.getElementById("receiver").value;
            var code = document.getElementById("code").value;
            var phone = document.getElementById("phone").value;
            function myFunction()
            {
                var addr = document.getElementById("sendaddress").value;
                var name = document.getElementById("receiver").value;
                document.getElementById("shouhuodizhi").value = (addr);
                document.getElementById("shouhuoren").value = (name);

            }
        </script>
    </body>
</html>   

