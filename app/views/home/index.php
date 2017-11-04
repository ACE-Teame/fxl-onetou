<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>泛策略</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/main.css" media="all">
    <script type="text/javascript" src="css/jquery.min.js"></script>
    <?php echo css('main.css') ?>
</head>

<body>
    <div class="container">
        <div class="home">
            <div class="img"><img src="<?php echo image('1.jpg') ?>" alt=""></div>
            <div class="form">
                <div class="title">
                    <div class="img"><img src="<?php echo image('title.png') ?>" alt=""></div> 
                </div>
                <div class="content">
                    <form id="form_contenct">
                        <div class="entry">
                            <label>请输入您的姓名<span>*</span></label>
                            <input type="text" id="username" name="username" placeholder="">
                        </div>
                        <div class="entry">
                            <label>请输入您的电话<span>*</span></label>
                            <input type="text" id="phone" name="phone" placeholder="">
                        </div>
                        <input type="hidden" name="c" value="<?php echo $c ?>">
                    </form>
                    <a class="btn" href="javascript:;" id="submit_contect" onclick="submit_contect()">免费领取</a>
                </div>
            </div>
            <section class="banner1">
                <div class="title">
                    <div class="img"><img src="<?php echo image('title-1.png') ?>" alt=""></div>  
                </div> 

                    <ul class="clear">
                        <li>
                                <div class="img"><img src="<?php echo image('icon1.png') ?>" alt=""></div> 
                                <div class="text">
                                   <p>免息操盘一周，资金免费使用一周</p>
                               </div> 
                        </li>
                        <li>
                                <div class="img"><img src="<?php echo image('icon2.png') ?>" alt=""></div> 
                                <div class="text">
                                   <p>每天免息50万元操盘额度</p>
                               </div> 
                        </li>
                        <li>
                                <div class="img"><img src="<?php echo image('icon3.png') ?>" alt=""></div> 
                                <div class="text">
                                   <p>放大您炒股资金8倍，起配金额1250</p>
                               </div> 
                        </li>
                     </ul>                 
                </div>
            </section>
            <section class="banner2">
                <div class="title">
                    <div class="img"><img src="<?php echo image('title-2.png') ?>" alt=""></div>                    
                </div>
                <div class="text">
                    <h2>申请免息操盘用户活动规则</h2>
                    <p>1.不得购买S,ST,*ST以及被交易所特别处理的股票</p>
                    <p>2.仅限购买沪深A股，不得购买权证类可以T+0交易的证券</p>
                    <p>3.不得购买或持有上市公司新股，次新股（或复牌股票）及不设涨跌停限制的股票</p>
                    <p>4.可以满仓单只股票，但请保证操盘策略未触及递延条件和平仓线，操盘策略高于预警线，以免低于平仓线，被风控部门强平。</p>
                    <p>5.不得进行坐庄，对敲 ，接盘，大宗交易，内幕信息等违反股票交易法律法规及证券公司规定的交易</p>
                    <p>6.全程账户每天操作会正常收取管理费，但参与预约活动的策略点买人当日12点前收取的管理费会由策略操盘平台直接返还您账户</p>
                    <p>7.账户所有盈利全部归策略发起人所有，本平台不参与任何分成，策略操盘人的策略出现亏损，均由策略点买人保证金扣除。</p>
                    <p>8.策略操盘平台费用为点买1W元，一个交易日18元利息，新用户注册之日起，每天享有50W的免息持仓额度，即900元免息，每天的交易佣金正常操作会扣除 ，第二个交易日前会在充值进入您的操盘账户，由策略操盘平台承担。</p>
                    <p>9.本活动最终解释权归策略操盘平台所有。</p>
                </div>
            </section>
            <footer>
                <p></p>
            </footer>
        </div>
    </div>
    <?php echo js('jquery.min.js') ?>
	<script>
		function submit_contect() {
            $.ajax({
                url: '<?php echo base_url('index/submitContect') ?>',
                type: 'POST',
                dataType: 'json',
                data: $('#form_contenct').serialize(),
                success:function(data) {
                    if(data.status == 200) {
                        alert('申请成功');
                        location.reload();
                    }else {
                        alert(data.msg);
                    }
                }
            })
		}
    </script>
</body>
</html>