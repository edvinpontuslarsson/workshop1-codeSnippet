<?php

require_once('view/LayoutView.php');
require_once('view/OutputView.php');

$layoutView = new LayoutView();
$outputView = new OutputView();

$htmlOutput = $outputView->response();

$layoutView->showHtmlLayout($htmlOutput);

echo '<p><a href="/workshop-1">Analyze new code snippet</a></p>';
