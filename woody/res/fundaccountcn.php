<?php
require('php/_fundaccount.php');

function EchoRemarks($strSymbol)
{
	if ($strSymbol != 'SZ162411')		return;
	
	echo <<< END
	<p>2019年10月11日星期五华宝油气(SZ162411)场内新增2670万股, 对应8日星期二场内限购1000块人民币下满额申购了26700000/(985/0.367) = 9948户.
		<br />因为A股10月1日到7日国庆休市, 华宝官方没有提供7日星期一的净值. 8日0.390的收盘价跟7日预估的0.377净值比溢价3.45%. 带入到用8月15日到9月10日申购账户和溢价百分比数据做线性回归的公式:
		<br />Y(场内申购账户) = 1968 + 2204 * X(溢价); r = 0.8876
		<br />得到预计的申购账户是9572户, 这个算命还是挺成功的!
	</p>
END;
}

require('/php/ui/_dispcn.php');
?>
