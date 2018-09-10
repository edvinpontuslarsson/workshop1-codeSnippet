<?php

class LayoutView {
    public function showHtmlLayout($viewString) {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Code snippets</title>
        </head>
        <body>
            ' . $viewString . '
        </body>
        </html>';
    }
}