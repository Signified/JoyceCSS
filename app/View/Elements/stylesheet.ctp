/**
 * <?php echo $stylesheet['Stylesheet']['name'] . "\n"; ?>
 *
 * <?php echo $stylesheet['Stylesheet']['description'] . "\n"; ?>
 *
 * CSS version 3
 *
 * This source file is subject to the new BSD license that is available through
 * the world-wide-web at this URL:
 * http://www.opensource.org/licenses/bsd-license
 *
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    CSS
 * @subpackage Default
 * @author     <?php echo $stylesheet['User']['name']; ?> <<?php echo $stylesheet['User']['email']; ?>>
 * @copyright  <?php echo date('Y'); ?> <?php echo $stylesheet['User']['name']; ?> <<?php echo $stylesheet['User']['email']; ?>>
 * @license    http://www.opensource.org/licenses/bsd-license
 * @link       <?php echo $this->Html->url(array('action' => 'view', $stylesheet['Stylesheet']['id']), true) . "\n"; ?>
 */

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Reset
 * @copyright  Copyright (c) 2012 Yahoo! Inc. All rights reserved.
 * @license    http://yuilibrary.com/license/    BSD License
 * @version    YUI 3.5.1 (build 22)
 * @link       http://yuilibrary.com/yui/docs/cssreset/
 */
html{color:<?php echo $stylesheet['Stylesheet']['default_color']; ?>;background:<?php echo $stylesheet['Stylesheet']['default_background_color']; ?>}
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0}
table{border-collapse:collapse;border-spacing:0}
fieldset,img{border:0}
address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal}
ol,ul{list-style:none}
caption,th{text-align:left}
h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal}
q:before,q:after{content:''}
abbr,acronym{border:0;font-variant:normal}
sup{vertical-align:text-top}
sub{vertical-align:text-bottom}
input,textarea,select{font-family:inherit;font-size:inherit;font-weight:inherit}
input,textarea,select{*font-size:100%}
legend{color:<?php echo $stylesheet['Stylesheet']['default_color']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Font
 * @copyright  Copyright (c) 2012 Yahoo! Inc. All rights reserved.
 * @license    http://yuilibrary.com/license/    BSD License
 * @version    YUI 3.5.1 (build 22)
 * @link       http://yuilibrary.com/yui/docs/cssfonts/
 */
body{font:<?php echo $stylesheet['Stylesheet']['default_font_size']; ?>px/<?php echo $stylesheet['Stylesheet']['default_line_height']; ?> <?php echo $stylesheet['Stylesheet']['default_font_family']; ?>;*font-size:small;*font:x-small}
select,input,button,textarea{font:99% <?php echo $stylesheet['Stylesheet']['default_font_family']; ?>}
table{font-size:inherit;font:100%}
pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Template
 * @copyright  Copyright (c) 2009, Nicole Sullivan. All rights reserved.
 * @license    https://github.com/stubbornella/oocss/blob/master/LICENSE    BSD License
 * @version    0.2
 * @link       https://github.com/stubbornella/oocss/wiki/Template
 */
body{_text-align:center}
.main{display:table-cell;*display:block;width:auto}
.body,.main{*zoom:1}
.body:after,.main:after{clear:both;display:block;visibility:hidden;overflow:hidden;height:0 !important;line-height:0;font-size:xx-large;content:" x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x "}
.page{margin:0 auto;width:<?php echo $stylesheet['Stylesheet']['template_page_width']; ?>px;_text-align:left}
.oldSchool{width:750px}
.gs960{width:960px}
.liquid{width:auto;margin:0}
.leftCol{float:left;width:<?php echo $stylesheet['Stylesheet']['template_left_column_width']; ?>px;_margin-right:-3px}
.rightCol{float:right;width:<?php echo $stylesheet['Stylesheet']['template_right_column_width']; ?>px;_margin-left:-3px}
.gMail{width:160px}
.gCal{width:180px}
.yahoo{width:240px}
.myYahoo{width:300px}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Grid
 * @copyright  Copyright (c) 2009, Nicole Sullivan. All rights reserved.
 * @license    https://github.com/stubbornella/oocss/blob/master/LICENSE    BSD License
 * @version    0.2
 * @link       https://github.com/stubbornella/oocss/wiki/Grids
 */
.line,.lastUnit{overflow:hidden;*overflow:visible;*zoom:1}
.unit{float:left}
.unitRight{float:right}
<?php foreach ($grids as $key => $value): ?>
<?php if ($value == 100): ?>
<?php echo $key; ?>{float:none}
<?php else: ?>
<?php echo $key; ?>{width:<?php echo $value; ?>%}
<?php endif; ?>
<?php endforeach; ?>
.lastUnit{float:none;width:auto;_position:relative;_left:-3px;_margin-right:-3px}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Module
 * @copyright  Copyright (c) 2009, Nicole Sullivan. All rights reserved.
 * @license    https://github.com/stubbornella/oocss/blob/master/LICENSE    BSD License
 * @version    0.2
 * @link       https://github.com/stubbornella/oocss/wiki/Module
 */
.mod{margin:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px}
.bd,.ft,.hd{overflow:hidden;*overflow:visible;zoom:1}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Media
 * @copyright  Copyright (c) 2009, Nicole Sullivan. All rights reserved.
 * @license    https://github.com/stubbornella/oocss/blob/master/LICENSE    BSD License
 * @version    0.2
 * @link       https://github.com/stubbornella/oocss/wiki/Content
 */
.media{overflow:hidden;*overflow:visible;zoom:1}
.media .img{float:left;margin-right:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px}
.media .img img{display:block}
.media .imgExt{float:right;margin-left:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Helper.Border
 * @version    1.0
 */
.round{-moz-border-radius:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;-webkit-border-radius:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;border-radius:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px}
.roundBL{-moz-border-radius-bottomleft:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;-webkit-border-radius-bottomleft:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;border-radius-bottomleft:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px}
.roundBR{-moz-border-radius-bottomright:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;-webkit-border-radius-bottomright:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;border-radius-bottomright:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px}
.roundTL{-moz-border-radius-topleft:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;-webkit-border-radius-topleft:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;border-radius-topleft:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px}
.roundTR{-moz-border-radius-topright:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;-webkit-border-radius-topright:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px;border-radius-topright:<?php echo $stylesheet['Stylesheet']['default_border_radius']; ?>px}
.border{border-style:solid;border-width:1px}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Helper.Color
 * @version    1.0
 */
.aliceblue{color:#f0f8ff}
.antiquewhite{color:#faebd7}
.aqua{color:#00ffff}
.aquamarine{color:#7fffd4}
.azure{color:#f0ffff}
.beige{color:#f5f5dc}
.bisque{color:#ffe4c4}
.black{color:#000000}
.blanchedalmond{color:#ffebcd}
.blue{color:#0000ff}
.blueviolet{color:#8a2be2}
.brown{color:#a52a2a}
.burlywood{color:#deb887}
.cadetblue{color:#5f9ea0}
.chartreuse{color:#7fff00}
.chocolate{color:#d2691e}
.coral{color:#ff7f50}
.cornflowerblue{color:#6495ed}
.cornsilk{color:#fff8dc}
.crimson{color:#dc143c}
.cyan{color:#00ffff}
.darkblue{color:#00008b}
.darkcyan{color:#008b8b}
.darkgoldenrod{color:#b8860b}
.darkgray{color:#a9a9a9}
.darkgreen{color:#006400}
.darkgrey{color:#a9a9a9}
.darkkhaki{color:#bdb76b}
.darkmagenta{color:#8b008b}
.darkolivegreen{color:#556b2f}
.darkorange{color:#ff8c00}
.darkorchid{color:#9932cc}
.darkred{color:#8b0000}
.darksalmon{color:#e9967a}
.darkseagreen{color:#8fbc8f}
.darkslateblue{color:#483d8b}
.darkslategray{color:#2f4f4f}
.darkslategrey{color:#2f4f4f}
.darkturquoise{color:#00ced1}
.darkviolet{color:#9400d3}
.deeppink{color:#ff1493}
.deepskyblue{color:#00bfff}
.dimgray{color:#696969}
.dimgrey{color:#696969}
.dodgerblue{color:#1e90ff}
.firebrick{color:#b22222}
.floralwhite{color:#fffaf0}
.forestgreen{color:#228b22}
.fuchsia{color:#ff00ff}
.gainsboro{color:#dcdcdc}
.ghostwhite{color:#f8f8ff}
.gold{color:#ffd700}
.goldenrod{color:#daa520}
.gray{color:#808080}
.green{color:#008000}
.greenyellow{color:#adff2f}
.grey{color:#808080}
.honeydew{color:#f0fff0}
.hotpink{color:#ff69b4}
.indianred{color:#cd5c5c}
.indigo{color:#4b0082}
.ivory{color:#fffff0}
.khaki{color:#f0e68c}
.lavender{color:#e6e6fa}
.lavenderblush{color:#fff0f5}
.lawngreen{color:#7cfc00}
.lemonchiffon{color:#fffacd}
.lightblue{color:#add8e6}
.lightcoral{color:#f08080}
.lightcyan{color:#e0ffff}
.lightgoldenrodyellow{color:#fafad2}
.lightgray{color:#d3d3d3}
.lightgreen{color:#90ee90}
.lightgrey{color:#d3d3d3}
.lightpink{color:#ffb6c1}
.lightsalmon{color:#ffa07a}
.lightseagreen{color:#20b2aa}
.lightskyblue{color:#87cefa}
.lightslategray{color:#778899}
.lightslategrey{color:#778899}
.lightsteelblue{color:#b0c4de}
.lightyellow{color:#ffffe0}
.lime{color:#00ff00}
.limegreen{color:#32cd32}
.linen{color:#faf0e6}
.magenta{color:#ff00ff}
.maroon{color:#800000}
.mediumaquamarine{color:#66cdaa}
.mediumblue{color:#0000cd}
.mediumorchid{color:#ba55d3}
.mediumpurple{color:#9370db}
.mediumseagreen{color:#3cb371}
.mediumslateblue{color:#7b68ee}
.mediumspringgreen{color:#00fa9a}
.mediumturquoise{color:#48d1cc}
.mediumvioletred{color:#c71585}
.midnightblue{color:#191970}
.mintcream{color:#f5fffa}
.mistyrose{color:#ffe4e1}
.moccasin{color:#ffe4b5}
.navajowhite{color:#ffdead}
.navy{color:#000080}
.oldlace{color:#fdf5e6}
.olive{color:#808000}
.olivedrab{color:#6b8e23}
.orange{color:#ffa500}
.orangered{color:#ff4500}
.orchid{color:#da70d6}
.palegoldenrod{color:#eee8aa}
.palegreen{color:#98fb98}
.paleturquoise{color:#afeeee}
.palevioletred{color:#db7093}
.papayawhip{color:#ffefd5}
.peachpuff{color:#ffdab9}
.peru{color:#cd853f}
.pink{color:#ffc0cb}
.plum{color:#dda0dd}
.powderblue{color:#b0e0e6}
.purple{color:#800080}
.red{color:#ff0000}
.rosybrown{color:#bc8f8f}
.royalblue{color:#4169e1}
.saddlebrown{color:#8b4513}
.salmon{color:#fa8072}
.sandybrown{color:#f4a460}
.seagreen{color:#2e8b57}
.seashell{color:#fff5ee}
.sienna{color:#a0522d}
.silver{color:#c0c0c0}
.skyblue{color:#87ceeb}
.slateblue{color:#6a5acd}
.slategray{color:#708090}
.slategrey{color:#708090}
.snow{color:#fffafa}
.springgreen{color:#00ff7f}
.steelblue{color:#4682b4}
.tan{color:#d2b48c}
.teal{color:#008080}
.thistle{color:#d8bfd8}
.tomato{color:#ff6347}
.turquoise{color:#40e0d0}
.violet{color:#ee82ee}
.wheat{color:#f5deb3}
.white{color:#ffffff}
.whitesmoke{color:#f5f5f5}
.yellow{color:#ffff00}
.yellowgreen{color:#9acd32}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Helper.Display
 * @version    1.0
 */
.block{display:block}
.inline{display:inline}
.hide{display:none}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Helper.Font
 * @version    1.0
 */
.less{font-size:90%}
.muchLess{font-size:80%}
.more{font-size:110%}
.muchMore{font-size:120%}
.tight{line-height:90%}
.veryTight{line-height:80%}
.loose{line-height:110%}
.veryLoose{line-height:120%}
.loud{font-weight:bold}
.quiet{font-weight:normal}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Helper.Space
 * @version    1.0
 */
.space{background:<?php echo $stylesheet['Stylesheet']['default_background_color']; ?>;color:<?php echo $stylesheet['Stylesheet']['default_background_color']; ?>;visibility:hidden}
.ptn,.pvn,.pan{padding-top:0px !important}
.pts,.pvs,.pas{padding-top:<?php echo $stylesheet['Stylesheet']['module_margin_small']; ?>px !important}
.ptm,.pvm,.pam{padding-top:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px !important}
.ptl,.pvl,.pal{padding-top:<?php echo $stylesheet['Stylesheet']['module_margin_large']; ?>px !important}
.prn,.phn,.pan{padding-right:0px !important}
.prs,.phs,.pas{padding-right:<?php echo $stylesheet['Stylesheet']['module_margin_small']; ?>px !important}
.prm,.phm,.pam{padding-right:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px !important}
.prl,.phl,.pal{padding-right:<?php echo $stylesheet['Stylesheet']['module_margin_large']; ?>px !important}
.pbn,.pvn,.pan{padding-bottom:0px !important}
.pbs,.pvs,.pas{padding-bottom:<?php echo $stylesheet['Stylesheet']['module_margin_small']; ?>px !important}
.pbm,.pvm,.pam{padding-bottom:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px !important}
.pbl,.pvl,.pal{padding-bottom:<?php echo $stylesheet['Stylesheet']['module_margin_large']; ?>px !important}
.pln,.phn,.pan{padding-left:0px !important}
.pls,.phs,.pas{padding-left:<?php echo $stylesheet['Stylesheet']['module_margin_small']; ?>px !important}
.plm,.phm,.pam{padding-left:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px !important}
.pll,.phl,.pal{padding-left:<?php echo $stylesheet['Stylesheet']['module_margin_large']; ?>px !important}
.mtn,.mvn,.man{margin-top:0px !important}
.mts,.mvs,.mas{margin-top:<?php echo $stylesheet['Stylesheet']['module_margin_small']; ?>px !important}
.mtm,.mvm,.mam{margin-top:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px !important}
.mtl,.mvl,.mal{margin-top:<?php echo $stylesheet['Stylesheet']['module_margin_large']; ?>px !important}
.mrn,.mhn,.man{margin-right:0px !important}
.mrs,.mhs,.mas{margin-right:<?php echo $stylesheet['Stylesheet']['module_margin_small']; ?>px !important}
.mrm,.mhm,.mam{margin-right:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px !important}
.mrl,.mhl,.mal{margin-right:<?php echo $stylesheet['Stylesheet']['module_margin_large']; ?>px !important}
.mbn,.mvn,.man{margin-bottom:0px !important}
.mbs,.mvs,.mas{margin-bottom:<?php echo $stylesheet['Stylesheet']['module_margin_small']; ?>px !important}
.mbm,.mvm,.mam{margin-bottom:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px !important}
.mbl,.mvl,.mal{margin-bottom:<?php echo $stylesheet['Stylesheet']['module_margin_large']; ?>px !important}
.mln,.mhn,.man{margin-left:0px !important}
.mls,.mhs,.mas{margin-left:<?php echo $stylesheet['Stylesheet']['module_margin_small']; ?>px !important}
.mlm,.mhm,.mam{margin-left:<?php echo $stylesheet['Stylesheet']['module_margin']; ?>px !important}
.mll,.mhl,.mal{margin-left:<?php echo $stylesheet['Stylesheet']['module_margin_large']; ?>px !important}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Core
 * @subpackage Helper.Text
 * @version    1.0
 */
.txtC{text-align:center}
.txtL{text-align:left}
.txtR{text-align:right}
.txtT{vertical-align:top}
.txtB{vertical-align:bottom}
.txtM{vertical-align:middle}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage The root element
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#the-root-element
 */
html{<?php echo $stylesheet['Stylesheet']['element_html']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Scripting
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#scripting-1
 */
noscript{<?php echo $stylesheet['Stylesheet']['element_noscript']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Sections
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#sections
 */
body{<?php echo $stylesheet['Stylesheet']['element_body']; ?>}
section{<?php echo $stylesheet['Stylesheet']['element_section']; ?>}
nav{<?php echo $stylesheet['Stylesheet']['element_nav']; ?>}
article{<?php echo $stylesheet['Stylesheet']['element_article']; ?>}
aside{<?php echo $stylesheet['Stylesheet']['element_aside']; ?>}
h1{<?php echo $stylesheet['Stylesheet']['element_h1']; ?>}
h2{<?php echo $stylesheet['Stylesheet']['element_h2']; ?>}
h3{<?php echo $stylesheet['Stylesheet']['element_h3']; ?>}
h4{<?php echo $stylesheet['Stylesheet']['element_h4']; ?>}
h5{<?php echo $stylesheet['Stylesheet']['element_h5']; ?>}
h6{<?php echo $stylesheet['Stylesheet']['element_h6']; ?>}
hgroup{<?php echo $stylesheet['Stylesheet']['element_hgroup']; ?>}
header{<?php echo $stylesheet['Stylesheet']['element_header']; ?>}
footer{<?php echo $stylesheet['Stylesheet']['element_footer']; ?>}
address{<?php echo $stylesheet['Stylesheet']['element_address']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Grouping content
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#grouping-content
 */
p{<?php echo $stylesheet['Stylesheet']['element_p']; ?>}
hr{<?php echo $stylesheet['Stylesheet']['element_hr']; ?>}
pre{<?php echo $stylesheet['Stylesheet']['element_pre']; ?>}
blockquote{<?php echo $stylesheet['Stylesheet']['element_blockquote']; ?>}
ol{<?php echo $stylesheet['Stylesheet']['element_ol']; ?>}
ul{<?php echo $stylesheet['Stylesheet']['element_ul']; ?>}
li{<?php echo $stylesheet['Stylesheet']['element_li']; ?>}
dl{<?php echo $stylesheet['Stylesheet']['element_dl']; ?>}
dt{<?php echo $stylesheet['Stylesheet']['element_dt']; ?>}
dd{<?php echo $stylesheet['Stylesheet']['element_dd']; ?>}
figure{<?php echo $stylesheet['Stylesheet']['element_figure']; ?>}
figcaption{<?php echo $stylesheet['Stylesheet']['element_figcaption']; ?>}
div{<?php echo $stylesheet['Stylesheet']['element_div']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Text-level semantics
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#text-level-semantics
 */
a{<?php echo $stylesheet['Stylesheet']['element_a']; ?>}
em{<?php echo $stylesheet['Stylesheet']['element_em']; ?>}
strong{<?php echo $stylesheet['Stylesheet']['element_strong']; ?>}
small{<?php echo $stylesheet['Stylesheet']['element_small']; ?>}
s{<?php echo $stylesheet['Stylesheet']['element_s']; ?>}
cite{<?php echo $stylesheet['Stylesheet']['element_cite']; ?>}
q{<?php echo $stylesheet['Stylesheet']['element_q']; ?>}
dfn{<?php echo $stylesheet['Stylesheet']['element_dfn']; ?>}
abbr{<?php echo $stylesheet['Stylesheet']['element_abbr']; ?>}
time{<?php echo $stylesheet['Stylesheet']['element_time']; ?>}
code{<?php echo $stylesheet['Stylesheet']['element_code']; ?>}
var{<?php echo $stylesheet['Stylesheet']['element_var']; ?>}
samp{<?php echo $stylesheet['Stylesheet']['element_samp']; ?>}
kbd{<?php echo $stylesheet['Stylesheet']['element_kbd']; ?>}
sub{<?php echo $stylesheet['Stylesheet']['element_sub']; ?>}
sup{<?php echo $stylesheet['Stylesheet']['element_sup']; ?>}
i{<?php echo $stylesheet['Stylesheet']['element_i']; ?>}
b{<?php echo $stylesheet['Stylesheet']['element_b']; ?>}
u{<?php echo $stylesheet['Stylesheet']['element_u']; ?>}
mark{<?php echo $stylesheet['Stylesheet']['element_mark']; ?>}
ruby{<?php echo $stylesheet['Stylesheet']['element_ruby']; ?>}
rt{<?php echo $stylesheet['Stylesheet']['element_rt']; ?>}
rp{<?php echo $stylesheet['Stylesheet']['element_rp']; ?>}
bdi{<?php echo $stylesheet['Stylesheet']['element_bdi']; ?>}
bdo{<?php echo $stylesheet['Stylesheet']['element_bdo']; ?>}
span{<?php echo $stylesheet['Stylesheet']['element_span']; ?>}
br{<?php echo $stylesheet['Stylesheet']['element_br']; ?>}
wbr{<?php echo $stylesheet['Stylesheet']['element_wbr']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Edits
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#edits
 */
ins{<?php echo $stylesheet['Stylesheet']['element_ins']; ?>}
del{<?php echo $stylesheet['Stylesheet']['element_del']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Embedded content
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#embedded-content-1
 */
img{<?php echo $stylesheet['Stylesheet']['element_img']; ?>}
iframe{<?php echo $stylesheet['Stylesheet']['element_iframe']; ?>}
embed{<?php echo $stylesheet['Stylesheet']['element_embed']; ?>}
object{<?php echo $stylesheet['Stylesheet']['element_object']; ?>}
param{<?php echo $stylesheet['Stylesheet']['element_param']; ?>}
video{<?php echo $stylesheet['Stylesheet']['element_video']; ?>}
audio{<?php echo $stylesheet['Stylesheet']['element_audio']; ?>}
source{<?php echo $stylesheet['Stylesheet']['element_source']; ?>}
track{<?php echo $stylesheet['Stylesheet']['element_track']; ?>}
canvas{<?php echo $stylesheet['Stylesheet']['element_canvas']; ?>}
map{<?php echo $stylesheet['Stylesheet']['element_map']; ?>}
area{<?php echo $stylesheet['Stylesheet']['element_area']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Tabular data
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#tabular-data
 */
table{<?php echo $stylesheet['Stylesheet']['element_table']; ?>}
caption{<?php echo $stylesheet['Stylesheet']['element_caption']; ?>}
colgroup{<?php echo $stylesheet['Stylesheet']['element_colgroup']; ?>}
col{<?php echo $stylesheet['Stylesheet']['element_col']; ?>}
tbody{<?php echo $stylesheet['Stylesheet']['element_tbody']; ?>}
thead{<?php echo $stylesheet['Stylesheet']['element_thead']; ?>}
tfoot{<?php echo $stylesheet['Stylesheet']['element_tfoot']; ?>}
tr{<?php echo $stylesheet['Stylesheet']['element_tr']; ?>}
td{<?php echo $stylesheet['Stylesheet']['element_td']; ?>}
th{<?php echo $stylesheet['Stylesheet']['element_th']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Forms
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#forms
 */
form{<?php echo $stylesheet['Stylesheet']['element_form']; ?>}
fieldset{<?php echo $stylesheet['Stylesheet']['element_fieldset']; ?>}
legend{<?php echo $stylesheet['Stylesheet']['element_legend']; ?>}
label{<?php echo $stylesheet['Stylesheet']['element_label']; ?>}
input{<?php echo $stylesheet['Stylesheet']['element_input']; ?>}
button{<?php echo $stylesheet['Stylesheet']['element_button']; ?>}
select{<?php echo $stylesheet['Stylesheet']['element_select']; ?>}
datalist{<?php echo $stylesheet['Stylesheet']['element_datalist']; ?>}
optgroup{<?php echo $stylesheet['Stylesheet']['element_optgroup']; ?>}
option{<?php echo $stylesheet['Stylesheet']['element_option']; ?>}
textarea{<?php echo $stylesheet['Stylesheet']['element_textarea']; ?>}
keygen{<?php echo $stylesheet['Stylesheet']['element_keygen']; ?>}
output{<?php echo $stylesheet['Stylesheet']['element_output']; ?>}
progress{<?php echo $stylesheet['Stylesheet']['element_progress']; ?>}
meter{<?php echo $stylesheet['Stylesheet']['element_meter']; ?>}
[type=hidden]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_hidden']; ?>}
[type=text]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_text']; ?>}
[type=search]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_search']; ?>}
[type=telephone]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_telephone']; ?>}
[type=url]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_url']; ?>}
[type=email]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_email']; ?>}
[type=password]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_password']; ?>}
[type=date]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_date']; ?>}
[type=month]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_month']; ?>}
[type=week]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_week']; ?>}
[type=time]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_time']; ?>}
[type=datetimelocal]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_datetimelocal']; ?>}
[type=number]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_number']; ?>}
[type=range]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_range']; ?>}
[type=color]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_color']; ?>}
[type=checkbox]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_checkbox']; ?>}
[type=radio]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_radio']; ?>}
[type=file]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_file']; ?>}
[type=submit]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_submit']; ?>}
[type=image]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_image']; ?>}
[type=reset]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_reset']; ?>}
[type=button]{<?php echo $stylesheet['Stylesheet']['element_input_attribute_type_value_button']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Interactive elements
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#interactive-elements
 */
details{<?php echo $stylesheet['Stylesheet']['element_details']; ?>}
summary{<?php echo $stylesheet['Stylesheet']['element_summary']; ?>}
command{<?php echo $stylesheet['Stylesheet']['element_command']; ?>}
menu{<?php echo $stylesheet['Stylesheet']['element_menu']; ?>}

/**
 * @category   <?php echo Configure::read('App.name') . "\n"; ?>
 * @package    Base
 * @subpackage Pseudo-classes
 * @version    1.0
 * @link       http://dev.w3.org/html5/spec/Overview.html#pseudo-classes
 */
:link{<?php echo $stylesheet['Stylesheet']['pseudo_class_link']; ?>}
:visited{<?php echo $stylesheet['Stylesheet']['pseudo_class_visited']; ?>}
:active{<?php echo $stylesheet['Stylesheet']['pseudo_class_active']; ?>}
:enabled{<?php echo $stylesheet['Stylesheet']['pseudo_class_enabled']; ?>}
:disabled{<?php echo $stylesheet['Stylesheet']['pseudo_class_disabled']; ?>}
:checked{<?php echo $stylesheet['Stylesheet']['pseudo_class_checked']; ?>}
:indeterminate{<?php echo $stylesheet['Stylesheet']['pseudo_class_indeterminate']; ?>}
:default{<?php echo $stylesheet['Stylesheet']['pseudo_class_default']; ?>}
:valid{<?php echo $stylesheet['Stylesheet']['pseudo_class_valid']; ?>}
:invalid{<?php echo $stylesheet['Stylesheet']['pseudo_class_invalid']; ?>}
:in-range{<?php echo $stylesheet['Stylesheet']['pseudo_class_in_range']; ?>}
:out-of-range{<?php echo $stylesheet['Stylesheet']['pseudo_class_out_of_range']; ?>}
:required{<?php echo $stylesheet['Stylesheet']['pseudo_class_required']; ?>}
:optional{<?php echo $stylesheet['Stylesheet']['pseudo_class_optional']; ?>}
:read-only{<?php echo $stylesheet['Stylesheet']['pseudo_class_read_only']; ?>}
:read-write{<?php echo $stylesheet['Stylesheet']['pseudo_class_read_write']; ?>}
:dir(ltr){<?php echo $stylesheet['Stylesheet']['pseudo_class_dir_ltr']; ?>}
:dir(rtl){<?php echo $stylesheet['Stylesheet']['pseudo_class_dir_rtl']; ?>}
