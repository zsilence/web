<?php require_once('php/_navchishin.php'); ?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>如何从美国封杀中兴通讯的危机变成转机之五</title>
<meta name="description" content="美国封杀中兴通讯, 如何从危机变成转机之五? 朋友们打电话给我, 对政治议题的讨论表达了关切和忧虑. 我在这里郑重声明, 让我们把讨论集中在技术研发, 产品市场的规划, 如何培训人才方面. 其他的议题就不要在这里讨论, 免得失去焦点, 引起不必要的困扰.">
<link href="/common/style.css" rel="stylesheet" type="text/css" />
</head>

<body bgproperties=fixed leftmargin=0 topmargin=0>
<?php _ChishinLayoutTopLeft(true); ?>

<div>
<h1>如何从美国封杀中兴通讯的危机变成转机之五</h1>
<h4>2018年5月12日</h4>
<h5>作者: <a href="indexcn.php">王继行</a></h5>
<p>朋友们打电话给我, 对政治议题的讨论表达了关切和忧虑. 我在这里郑重声明, 让我们把讨论集中在技术研发, 产品市场的规划, 如何培训人才方面. 其他的议题就不要在这里讨论, 免得失去焦点, 引起不必要的困扰.
我也严肃地要求任何信息是根据公开的资料, 而不是某公司的商业机密. 
<br />假如通讯市场可以比作东北的话, 5G无线基站的射频系统芯片核心技术就是锦州.
<br />半导体设计的九阳真经是ISSCC, 每年2月都在旧金山召开. 世界各国专家来这里发表论文, 报告IC产品的最新发展和设计的新思路. 我跟踪这个会议中所发表的论文45年了, 经常会为里面的新发展而沉醉, 魂牵梦系, 不能自已.
它让我找到了自己的方向, 不断追求, 终生不渝. 这也是我最感谢美国的地方. 
<br />前两天朋友给了我今年的会议光盘. 我看到了两个闪光点: 5G基站射频技术/5G手机射频芯片, 还有802.11ax. 
<br />第二项是无线本地环路的最新世界标准, 它的传输速率最高可以到6.7Gbps. 以后到小区的光纤终端, 就可以靠它无线传到每个住户, 不需要电缆以及cable modem或者是电话线及DSL modem.
它的影响会极其深远, 特别是在第三世界地区, 而且发展速度会比5G快得多. 因为5G还需要寻找能够用的掉那种数据量的应用. 
而无线本地环路就不一样, 一切电视直播, 电话, 计算机上因特网, 以及各种智能电视盒上网点播各种节目, 都马上可以从无线本地环路入网, 需要是现成的. 
这个技术更适合中兴华为,  因为它们很大的一笔生意就是光纤通讯, 以及到世界各地铺设光纤. 
光纤到小区之后, 就接上无线本地环路基站, 用无线传输的方式把电视直播, 电话, 计算机上的因特网以及电视盒上点播的各种节目传到每个家庭. 它非常容易架设, 也不需要和电话线, 电缆相接. 
一带一路上的许多国家都立即需要这样的基础建设, 在以后十年能带来的商机, 绝对不会小于5G移动通信. 而中国更有能力在这方面竞争. 在这里也不需要什么操作系统, 生态圈. 
<br />我听过太多从国内来的朋友说, 我们做不出最好的芯片, 因为我们没有最好的CAD, 没有最好的制作工艺. 我今天谈的芯片和技术, 所需要的工艺是国内早就量产的28到45纳米CMOS, 所需要的CAD是二十年前国内就有的. 
<br />我在这里看到的是两个创业的机会, 你不需要去别人公司去挖做同样项目的人, 这样你就窃取了别人的商业机密. 你可以在公开发表的数据里, 光明正大清清白白开发出你要的产品. 
这两个产品在国内开公司, 只要芯片做出来, 公司一定成功. 需要的资金也不会很大. 对最有经验做射频集成线路的人来说, 每一种只要2000万就可以, 对经验差一些的人来说, 3000万也够了, 只是时间要长些.
只要一做出来, 中兴华为就得救了. 而且可以开拓对他们来说全新而且有立即需要的市场.
</p>
<ol>
  <li>5G无线基站, 是中兴通讯的脊梁骨. 它的问题是现在设计的射频系统用了一大堆美国进口的小规模集成电路拼装出来. 一方面是很难凑全, 而且缺一不行.
即使凑全了, 美国TI和ADI新设计的大规模集成5G射频芯片一出来, 原有的设计就完全过时了. 其他部分应该问题不大, 虽然现在系统用了Xilinx的FPGA, 应该可以把逻辑重新合成, 做成一颗ASIC取代.</li>
  <li>真正的关键是大规模集成5G射频系统芯片.
<br />a. 2016 ISSCC, session 9.1, TI发表了4G基站射频系统的芯片设计. 这个架构把射频信号直接转换到零中频, 转成基带数字信号. 为了消除镜像, 再加一条接收回路把镜像复制出来, 用在以后消除. 
        这个架构是今天以CDMA为基础的射频收发系统的标准架构, 特别适合用大规模集成电路来实现. 我记得20年前的书本就已经提到过, 没有商业机密或是侵犯专利的问题. 
        文章和投影片里面的数据讲解的还是蛮清楚的, 没有解释的部分, 也可以从其他的文章里追踪出来, 或是用计算机模拟出来, 而且线路设计并不那么困难. 
        它有两个接收信道和两个发送信道用来实现MIMO. 用的是45纳米CMOS制作工艺. 芯片尺寸是七毫米乘七毫米. 
<br />b. 上面谈到的那一篇文章, 可以作为5G基站芯片的基本架构, 从4G到5G改变了什么? 
         在 2018年ISSCC session 4.5卡内基梅龙大学发表的文章里, 有5G频谱以及带宽的规格. 世界各国包括美国主要都在25GHz到29.5GHz之间. 美国还有一段从37到40GHz.
         这些代表着LNA, MIXER, VCO, PLL等等的工作频率会跟着提高. ADC, DAC, 数字滤波器也会跟着带宽和原始码流而加快. 这些都不是问题, 在过去三年的ISSCC文章里, 都有在高频率的种种设计, 用SPICE模拟就行了.
         还有文章谈到在发射前作数字处理, 控制并减少功率放大器的直流功耗. 
         5G在去年底还出现了一个新标准, 那就是用相控数组天线技术, 把无线电波束对准多个用户. 因为能量集中信号自然就加强了很多. 
         2018年ISSCC在SESSION 4, SESSION 9有许多公司和大学发表的有关这方面的文章和产品以及实验结果. 有ADI, QUALCOMM, BROADCOM, 哥伦比亚大学, 乔治亚理工学院, 华盛顿州立大学, 日本东芝, 诺基亚. 
         ADI还发表的一颗把2G, 3G, 4G, 5G射频部分集成在一颗芯片上的文章, 它号称是用在无线基站, 我看起来更像是用在5G手机里面.
         因为手机更需要把老的通讯标准集成进去, 否则5G基站没有充分设立的时候, 没有人会去买只有5G的手机. 
         新加坡南洋理工还用天线数组技术, 把合成孔径雷达集成在一个芯片上.
         这些技术听起来是挺吓人的, 不过国内军方早已掌握了这方面的技术. 美国的萨德就使用这种技术, 国内的歼20也是用这种技术. 这方面由国内专家写的专业书籍, 我十多年前就在国内的书店买到了, 只要40块人民币.
         这次让我开眼的是美国公司居然能把这样的产品商业化, 做得这么小这么便宜.</li>
  <li>无线本地环路802.11ax. Broadcom在2018 ISSCC session 4.2的文章发表了802.11ax芯片组, 射频部分用40纳米CMOS. 基带中频部分用28纳米CMOS. 它可以用多个射频部分组成相控天线数组的基站. 
日本东芝在2018 ISSCC session 28.1的文章里发表了802.11ax单一芯片. 用28纳米CMOS, 芯片的尺寸是6.6毫米x6.6毫米. 
在这个标准里使用了相控数组雷达的技术. 性能高. 终端芯片的成本会很低. 我相信这个技术会代替电缆, 电话线, cable modem, DSL modem, 就好像wifi取代的以太网线一样.</li>
  <li>建议在清华复旦旁边建立开发这种芯片的公司. 并请有经验的技术人员到学校开课, 同时训练学生以及其他教授. 学生在这个项目的工作可以变成学分. 教授们也可以在这项目得到研究课题和经费. 
项目进度紧张时, 学生可以停学到公司里工作. 以后再继续学业. 学生也可以从工作里的研究课题, 变成他们硕士或者博士的论文. 这样就可以把工作和学生学业和教师科研题目合成一块. 
微波射频线路的设计, 在国外早已是公开的数据, 而这些正是国内大学的教育盲点. 可以公开讨论相互切磋. 这样才能进步. 藏着掖着, 把什么都当成宝贝供着, 只会减慢进步的步伐. 
这样就可以大量有效快速培养人才,  这些也就是我在上次遍地开花里面的建议.</li>
</ol>
</div>

<?php _ChishinLayoutBottom(true); ?>

</body>
</html>
