<?php

interface PdfInterface
{
    static public function generate(string $content): String;
    static public function printPdf($file);
}

class DOMPDF implements PdfInterface
{
    static public function generate(string $content): String
    {
        return "<h1>{$content}</h1>";
    }

    static public function printPdf($file)
    {
        return $file;
    }
}

class PdfFile implements PdfInterface
{
    static public function generate(string $content): String
    {
        return "<h2>{$content}</h2>";
    }

    static public function printPdf($file)
    {
        return $file;
    }
}

class PDF extends PdfFile
{

}

echo PDF::generate('Olá');