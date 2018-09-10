<?php

class OutputView
{
    private static $codeSnippet = 'InputView::CodeSnippet';

    public function response() {
        $post = $this->retrieveIncomingPost();
        $htmlOutput = $this->getHtmlOutput($post);
        return $htmlOutput;
    }

    public function retrieveIncomingPost() {
        if (isset($_POST[self::$codeSnippet])) {
            $post = $_POST[self::$codeSnippet];

            return $post;
        }
    }

    public function getHtmlOutput ($post) {
        $numberOfLines = $this->countLinesOfCode($post);
        return "$numberOfLines lines of code." +
        '<p><a href="/workshop-1">Analyze new code snippet</a></p>';
    }

    public function countLinesOfCode($post) {
        $trimmedSnippet = trim($post);
        $trimmedSnippet = nl2br($trimmedSnippet);

        $numberOfLines = preg_split('/(<br \/>)/', $trimmedSnippet);
        $numberOfLines = count($numberOfLines);

        return $numberOfLines;
    }    
}