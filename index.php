<?php

require_once('view/LayoutView.php');
require_once('view/InputView.php');

$layoutView = new LayoutView();
$inputView = new InputView();

$htmlInputField = $inputView->renderHTMLInputField();

$layoutView->showHtmlLayout($htmlInputField);