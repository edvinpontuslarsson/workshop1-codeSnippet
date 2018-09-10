<?php

class OutputView
{
    private static $codeSnippet = 'InputView::CodeSnippet';

    public function response() {
        $this->retrieveIncomingPost();
    }

    public function retrieveIncomingPost() {
        if (isset($_POST[self::$codeSnippet])) {
            $post = $_POST[self::$codeSnippet];

            $this->echoHtmlOutput($post);
        }
    }

    public function echoHtmlOutput ($post) {
        $numberOfLines = $this->countLines($post);
        echo "$numberOfLines lines of code.";
        echo '<p><a href="/workshop-1">Analyze new code snippet</a></p>';
    }

    public function countLines($post) {
        $trimmedSnippet = trim($post);
        $trimmedSnippet = nl2br($trimmedSnippet);

        $numberOfLines = preg_split('/(<br \/>)/', $trimmedSnippet);
        $numberOfLines = count($numberOfLines);

        return $numberOfLines;
    }    
}

$outputView = new OutputView();
$outputView->response();