<?php

require_once('view/LayoutView.php');
require_once('view/OutputView.php');

$layoutView = new LayoutView();
$outputView = new OutputView();

$htmlOutput = $outputView->response();

$layoutView->showHtmlLayout($htmlOutput);
