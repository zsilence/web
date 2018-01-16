<?php require_once('php/_lofhk.php'); ?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?php EchoTitle(false); ?></title>
<meta name="description" content="<?php EchoMetaDescription(false); ?>">
<link href="../../common/style.css" rel="stylesheet" type="text/css" />
</head>

<body bgproperties=fixed leftmargin=0 topmargin=0>
<?php _LayoutLofHkTopLeft(false); ?>

<div>
<h1><?php EchoTitle(false); ?></h1>
<?php EchoAll(false); ?>
<p>Related software:
<?php
    EchoHangSengSoftwareLinks(false);
    EchoHSharesSoftwareLinks(false);
    EchoASharesSoftwareLinks(false);
    EchoSpySoftwareLinks(false);
    EchoQqqSoftwareLinks(false);
    EchoDaChengSoftwareLinks(false);
    EchoStockGroupLinks(false);
?>
</p>
</div>

<?php LayoutTailLogin(false); ?>

</body>
</html>