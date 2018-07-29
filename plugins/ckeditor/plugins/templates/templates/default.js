/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.addTemplates('default',
{imagesPath:CKEDITOR.getUrl(CKEDITOR.plugins.getPath('templates')+'templates/images/'),
templates:
[
{title:'御客様のはがき',
image:'template1.gif',
description:'aaaaaOne main image with a title and text that surround the image.',
html:'<a href="../shop/ckfinder/userfiles/images/huruya-sama.jpg" rel="lightbox"><img alt="" height="222" src="../shop/ckfinder/userfiles/images/huruya-sama.jpg" width="145" /></a>'
},
{title:'買い取り実績',
image:'template1.gif',
description:'買い取り実績の計算式テンプレートです.',
html:'<p class="price">3,386円</p><span class="detai">99.6&times;34円＝3,386円</span><br />'
},
{title:'Strange Template',
image:'template2.gif',
description:'A template that defines two colums, each one with a title, and some text.',
html:'<table cellspacing="0" cellpadding="0" style="width:100%" border="0"><tr><td style="width:50%"><h3>Title 1</h3></td><td></td><td style="width:50%"><h3>Title 2</h3></td></tr><tr><td>Text 1</td><td></td><td>Text 2</td></tr></table><p>More text goes here.</p>'},
{title:'Text and Table',
image:'template3.gif',description:'A title with some text and a table.',
html:'<div style="width: 80%"><h3>Title goes here</h3><table style="width:150px;float: right" cellspacing="0" cellpadding="0" border="1"><caption style="border:solid 1px black"><strong>Table title</strong></caption></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table><p>Type the text here</p></div>'
}]});
