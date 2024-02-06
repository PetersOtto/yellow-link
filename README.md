# yellow-link
Extension for use links with Datenstrom Yellow

## How to add a Link

Use the shortcut `link`. Insert URL and Text separated by a semicolon. 
If text and URL are the same, then the URL followed by a simicolon is sufficient.
The extension automatically recognizes whether it is an external or internal link.

## Examples

If you use:

    [link URL;TEXT]
    [link https://www.openstreetmap.org/;OSM]
    [link https://www.openstreetmap.org/;https://www.openstreetmap.org/] or shorter [link https://www.openstreetmap.org/;]
    
This will be the result for external links:
    
    <a href="URL" target="_blank" rel="noopener noreferrer">TEXT</a>
    <a href="https://www.openstreetmap.org/" target="_blank" rel="noopener noreferrer">OSM</a>
    <a href="https://www.openstreetmap.org/" target="_blank" rel="noopener noreferrer">https://www.openstreetmap.org/</a>

This will be the result for internal links:
    
    <a href="URL" >TEXT</a>
    <a href="https://www.openstreetmap.org/">OSM</a>
    <a href="https://www.openstreetmap.org/">https://www.openstreetmap.org/</a>
  

## Installation

[Download extension](https://github.com/PetersOtto/yellow-link/archive/refs/heads/main.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

PetersOtto. [Get help](https://datenstrom.se/yellow/help/)
