# skubo.media
Website for http://skubo.media

## What is this
This is the entire content of the website mentioned above. It's not just a static webpage, but intended to be a slimmed down mini CMS to be able to dynamically add and remove content in a very simple form as an "endless full width page" like everybody else is doing nowadays. 

## Why is this
I had that idea for that new website and needed to decide, what kind of platform I will be building it on. I dislike Wordpress. And Joomla. So I decided to create my own just for that one website. And decided to open source this, so you can do whatever you like with it. 

## Requirements
As my website is hosted by a provider with only PHP installed, this requires PHP. Pages and resources are stored JSON and file based, so no need for a database.

## Features
* Producing page layout out of a JSON structure
* a page is one full size browser window, scroll down to next page
* two types of page layout: centered and columns
* columns are responsively designed with compatible CSS only, no Javascript (yay!)
* column content can be of different types (text, image, iframe), which will then solely displayed in that one column
* images can be assigned links, which then will open that URL in new broswer window
* Responsive font sizes (yay!)
* no external frameworks whatsover (double yay!)

## Limitations
* many
* currently the site's JSON needs to be uploaded to the server by same means like all the other files, so no REST-like interface so far (see future enhancements)
* totally undocumented
* no page stops, free scrolling

## Planned enhancements
* page scrolling stops
* CSS scrolling animations
* Touch device scrolling enhancements
* JSON-Interface for reading/writing site content

## Possible future enhancements
* editor for site content (not sure)

## <a href="https://opensource.org/licenses/MIT">MIT license</a>
The MIT License (MIT)
Copyright (c) <year> <copyright holders>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
