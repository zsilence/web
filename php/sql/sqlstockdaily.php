<?php

function SqlCreateStockDailyTable($strTableName)
{
    $str = ' `stock_id` INT UNSIGNED NOT NULL ,'
         . ' `date` DATE NOT NULL ,'
         . ' `close` DOUBLE(13,6) NOT NULL ,'
         . ' FOREIGN KEY (`stock_id`) REFERENCES `stock`(`id`) ON DELETE CASCADE ,'
         . ' UNIQUE ( `date`, `stock_id` )';
    return SqlCreateTable($str, $strTableName);
}

function SqlGetStockDaily($strTableName, $strStockId, $strDate)
{
	return SqlGetUniqueTableData($strTableName, _SqlBuildWhere_date_stock($strDate, $strStockId));
}

function SqlGetStockDailyNow($strTableName, $strStockId)
{
	return SqlGetSingleTableData($strTableName, _SqlBuildWhere_stock($strStockId), _SqlOrderByDate());
}

function SqlGetStockDailyPrev($strTableName, $strStockId, $strDate)
{
	return SqlGetSingleTableData($strTableName, "stock_id = '$strStockId' AND date < '$strDate'", _SqlOrderByDate());
}

function SqlCountStockDaily($strTableName, $strStockId)
{
    return SqlCountTableData($strTableName, _SqlBuildWhere_stock($strStockId));
}

function SqlGetStockDailyAll($strTableName, $strStockId, $iStart, $iNum)
{
    return SqlGetTableData($strTableName, _SqlBuildWhere_stock($strStockId), _SqlOrderByDate(), _SqlBuildLimit($iStart, $iNum));
}

function SqlInsertStockDaily($strTableName, $strStockId, $strDate, $strClose)
{
	$strQry = "INSERT INTO $strTableName(id, stock_id, date, close) VALUES('0', '$strStockId', '$strDate', '$strClose')";
	return SqlDieByQuery($strQry, $strTableName.' insert data failed');
}

function SqlUpdateStockDaily($strTableName, $strStockId, $strDate, $strClose)
{
	$strQry = "UPDATE $strTableName SET close = '$strClose' WHERE stock_id = '$strStockId' AND date = '$strDate' LIMIT 1";
	return SqlDieByQuery($strQry, $strTableName.' update data failed');
}

// ****************************** ETF Calibration table *******************************************************
function SqlCreateEtfCalibrationTable()
{
	return SqlCreateStockDailyTable(TABLE_ETF_CALIBRATION);
}

function SqlGetEtfCalibration($strStockId, $strDate)
{
	return SqlGetStockDaily(TABLE_ETF_CALIBRATION, $strStockId, $strDate);
}

function SqlGetEtfCalibrationNow($strStockId)
{
	return SqlGetStockDailyNow(TABLE_ETF_CALIBRATION, $strStockId);
}

function SqlGetEtfCalibrationPrev($strStockId, $strDate)
{
	return SqlGetStockDailyPrev(TABLE_ETF_CALIBRATION, $strStockId, $strDate);
}

function SqlCountEtfCalibration($strStockId)
{
    return SqlCountStockDaily(TABLE_ETF_CALIBRATION, $strStockId);
}

function SqlGetEtfCalibrationAll($strStockId, $iStart, $iNum)
{
    return SqlGetStockDailyAll(TABLE_ETF_CALIBRATION, $strStockId, $iStart, $iNum);
}

function SqlInsertEtfCalibration($strStockId, $strDate, $strClose)
{
	return SqlInsertStockDaily(TABLE_ETF_CALIBRATION, $strStockId, $strDate, $strClose);
}

// ****************************** Forex History table *******************************************************
function SqlCreateForexHistoryTable()
{
	return SqlCreateStockDailyTable(TABLE_FOREX_HISTORY);
}

function SqlGetForexHistory($strStockId, $strDate)
{
	return SqlGetStockDaily(TABLE_FOREX_HISTORY, $strStockId, $strDate);
}

function SqlGetForexHistoryNow($strStockId)
{
	return SqlGetStockDailyNow(TABLE_FOREX_HISTORY, $strStockId);
}

function SqlGetForexHistoryPrev($strStockId, $strDate)
{
	return SqlGetStockDailyPrev(TABLE_FOREX_HISTORY, $strStockId, $strDate);
}

function SqlInsertForexHistory($strStockId, $strDate, $strClose)
{
	return SqlInsertStockDaily(TABLE_FOREX_HISTORY, $strStockId, $strDate, $strClose);
}

// ****************************** Forex Support Functions *******************************************************
function SqlGetForexCloseString($strStockId, $strDate)
{
    $history = SqlGetForexHistory($strStockId, $strDate);
    if ($history)   return $history['close'];
    return false;
}

function SqlGetForexCloseHistory($strStockId, $strDate)
{
	if ($str = SqlGetForexCloseString($strStockId, $strDate))
	{
		return floatval($str);
	}
    return false;
}

function SqlGetForexNow($strStockId)
{
	if ($history = SqlGetForexHistoryNow($strStockId))
	{
		return floatval($history['close']);
	}
	return false;
}

function SqlGetHKCNY()
{
	return SqlGetForexNow(SqlGetStockId('HKCNY'));
}

function SqlGetUSCNY()
{
	return SqlGetForexNow(SqlGetStockId('USCNY'));
}

?>