<?php
class YellowLink {
    const VERSION = "0.4.0";
    public $yellow;         // access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content of shortcut
    public function onParseContentElement($page, $name, $text, $type) {
        $textCuts = explode(";", $text);
        $cutTextNull = $textCuts[1];
        $cutTextNull = trim($cutTextNull);
        $currentUrl = $this->yellow->page->getUrl();
        $outgoingLink = "\" target=\"_blank\" rel=\"noopener noreferrer\" >";
        $internalLink = "\" >";
        $output = null;

        if (!is_string_empty($currentUrl)) {
            list($scheme, $address, $base) = $this->yellow->lookup->getUrlInformation($currentUrl);
        }
        if (strpos($textCuts[0], $address) == true ) {
            $outgoingLink = $internalLink;
        }

        if ($name=="link" && ($type=="inline")) {
            
            if ($cutTextNull == ""){
                $output = "<a href=\"" . $textCuts[0] . $outgoingLink . $textCuts[0] ."</a>";
            } else {
                $output = "<a href=\"" . $textCuts[0] . $outgoingLink . $textCuts[1] ."</a>";
            }
        }
        return $output;
    }
}
