<?php

class OutputView
{
    private static $codeSnippet = 'InputView::CodeSnippet';

    public function response() {
        $this->postData();
    }

    public function postData() {
        if (isset($_POST[self::$codeSnippet])) {
            $this->countLines($_POST[self::$codeSnippet]);
        }
    }

    public function countLines() {
        $trimmedSnippet = trim(self::$codeSnippet);
        $trimmedSnippet = nl2br($trimmedSnippet);

        $numberOfLines = preg_split('/(<br \/>)/', $trimmedSnippet);
        $numberOfLines = count($numberOfLines);

        echo $numberOfLines;
    }
}