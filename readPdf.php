<?php

use Spatie\PdfToText\Pdf;

echo Pdf::getText('love_never_fails.pdf'); //returns the text from the pdf

$text = (new Pdf('/vendor/spatie/pdf-to-text'))
    ->setPdf('book.pdf')
    ->text();