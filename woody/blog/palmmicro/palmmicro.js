var _arPalmmicros = new Array("20061123", "20080326", "20091114", "20100107", "20100330", "20100427", "20100909", "20160307", "20161014"); 
var _iTotalPalmmicros = 9;

function NavigatePalmmicro()
{
    var iLevel = 2;
    
	NavBegin();
	WoodyMenuItem(iLevel, "index");
	NavContinueNewLine();
	BlogMenuItem(iLevel - 1, "palmmicro");
	NavContinueNewLine();
    NavDirFirstLast(_iTotalPalmmicros, _arPalmmicros);
	NavContinueNewLine();
    NavSwitchLanguage(iLevel + 1);
    NavEnd();
}

