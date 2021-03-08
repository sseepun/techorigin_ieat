<!DOCTYPE html>
<html lang="th">
<head>
<style>
  @font-face {
  font-family: 'Material-Design-Iconic-Font';
  src: url('../fonts/Material-Design-Iconic-Font.woff2?v=2.2.0') format('woff2'), url('../fonts/Material-Design-Iconic-Font.woff?v=2.2.0') format('woff'), url('../fonts/Material-Design-Iconic-Font.ttf?v=2.2.0') format('truetype');
  font-weight: normal;
  font-style: normal;
}
.zmdi {
  display: inline-block;
  font: normal normal normal 14px/1 'Material-Design-Iconic-Font';
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.zmdi-twitter-box:before {
  content: '\f35f';
}
.zmdi-twitter:before {
  content: '\f360';
}
.zmdi-facebook-box:before {
  content: '\f342';
}
.zmdi-facebook:before {
  content: '\f343';
}
.zmdi-youtube-play:before {
  content: '\f408';
}
.zmdi-youtube:before {
  content: '\f409';
}


/* Reset */
html, body{
    padding:0; margin:0; overflow-x:hidden; overflow-y:auto;
    font-size:16px; font-weight:300; line-height:1.1;
    font-family:'DB HEAVENT', sans-serif;
    /* font-family:'Sukhumvit', sans-serif; */
}
body.loading{height:100vh!important; overflow-y:hidden!important;}

*{box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; outline:none;}

a{transition:opacity .25s, color .25s;}
a, a:hover{text-decoration:none;}
a.link{text-decoration:underline; font-weight:400;}
a.link:hover{color:#fff;}

img.img{display:block; width:100%; height:auto;}
.img-fill{background-size:cover; background-position:center; background-repeat:no-repeat;}
.fit{position:absolute; top:0; bottom:0; left:0; right:0;}

i.zmdi, em.zmdi{transform:translateY(.125rem);}
input[type=text], input[type=email], input[type=password], input[type=date], input[type=tel],
input[type=number], input[type=phone], input[type=submit], select, textarea, button{
    font-family:'DB HEAVENT', sans-serif;
    /* font-family:'Sukhumvit', sans-serif; */
}
@media screen and (max-width:991.98px){
    html.sidenav-opened, body.sidenav-opened{overflow-y:hidden!important;}
}


/* Section & Container */
.section-padding{padding:4rem 0;}
.section-bpadding{padding:4.25rem 0 4rem 0;}
.section-bg{background-size:cover; background-position:center; background-repeat:no-repeat;}
.section-bg-hero{width:100%; position:relative;}
.section-bg-hero > .bg-hero{
    position:absolute; top:0; bottom:0; left:0; right:0; background-size:100% auto;
    background-repeat:no-repeat; background-position:top center;
}
.section-bg-hero > .container{position:relative;}
@media screen and (max-width:1199.98px){
    .section-bg-hero > .bg-hero{left:calc(50vw - 700px); right:calc(50vw - 700px);}
}
@media screen and (max-width:991.98px){
    .section-padding{padding:3rem 0;}
    .section-bpadding{padding:4.25rem 0 3rem 0;}
    .section-bg-hero > .bg-hero{left:calc(50vw - 650px); right:calc(50vw - 650px);}
}
@media screen and (max-width:767.98px){
    .section-bg-hero > .bg-hero{left:calc(50vw - 600px); right:calc(50vw - 600px);}
}
@media screen and (max-width:575.98px){
    .section-padding{padding:2.5rem 0;}
    .section-bpadding{padding:4.25rem 0 2.5rem 0;}
    .section-bg-hero > .bg-hero{left:calc(50vw - 550px); right:calc(50vw - 550px);}
}
@media screen and (min-width:578px){
    .container{padding-left:0; padding-right:0;}
}


/* Input */
input[type=text], input[type=email], input[type=password], input[type=date], input[type=tel],
input[type=number], input[type=phone], input[type=submit], input[type=file], select, textarea{
    border:1px solid transparent; border-radius:0; box-shadow:none; outline:none;
    padding:.5rem .75rem; font-size:1rem; font-weight:300; margin:0; line-height:1.25;
    transition:border-color .3s;
}


/* Fields & Inputs */
.field{margin:.75rem 0 0 0; width:100%;}
.field label{font-size:1.375rem; font-weight:200; margin:0;}

.field > .control, .field > .control-flex{position:relative; width:100%; margin:.25rem 0 0 0;}
.field > .control:first-child{margin:0;}
.field > .control-flex{display:flex; align-items:center; flex-wrap:wrap; margin:.5rem 0 0 0;}
.field > .control-flex > *{
    margin-right:.75rem; margin-top:.25rem; margin-bottom:.25rem; width:11rem;
}

.field input[type=text], .field input[type=email], .field input[type=password], 
.field input[type=date], .field input[type=tel], .field input[type=number], 
.field input[type=phone], .field input[type=file], .field select, .field textarea{
    width:100%; border-radius:0; font-size:1.375rem;
}

.field .control.checkbox-control, .field .control.radio-control{display:flex; position:relative;}
.field .control.radio-control > input[type=radio]{position:absolute; opacity:0;}
.field .control.checkbox-control > input[type=checkbox]{
    position:absolute; margin:0; font-size:.875rem; width:.875rem; height:.875rem;
    cursor:pointer; top:.25rem;
}
.field .control.checkbox-control > label, .field .control.radio-control > label{
    width:100%; padding:0 0 0 1.5rem; cursor:pointer;
}

.field.field-sm label{font-size:1.375rem;}
.field.field-sm input[type=text], .field.field-sm input[type=email], 
.field.field-sm input[type=password], .field.field-sm input[type=date], 
.field.field-sm input[type=tel], .field.field-sm input[type=number], 
.field.field-sm input[type=phone], .field.field-sm input[type=file], 
.field.field-sm select, .field.field-sm textarea{
    width:100%; border-radius:0; font-size:1.3125rem; padding:.25rem .5rem;
}
.field.field-sm input[type=file]{padding:.0625rem .5rem .0625rem .0625rem;}

.field.field-adaptive{display:flex; margin:0;}
.field.field-adaptive > label{
    width:12rem; margin:.25rem 1rem .25rem 0; font-size:1.375rem; text-align:right;
}
.field.field-adaptive > .control{width:calc(100% - 13rem); margin:0;}
.field.field-adaptive > .control > .select-wrapper,
.field.field-adaptive > .control > .input-date-wrapper{width:100%;}
@media screen and (max-width:1199.98px){
    .field.field-adaptive > label{width:8rem;}
    .field.field-adaptive > .control{width:calc(100% - 9rem);}
}
@media screen and (max-width:767.98px){
    .field.field-adaptive{flex-wrap:wrap; margin:.3125rem 0;}
    .field.field-adaptive > label{width:100%; margin:0 0 .25rem 0; text-align:left;}
    .field.field-adaptive > .control{width:100%;}
}

.field.field-adaptive-02{display:flex; margin:0;}
.field.field-adaptive-02 > label{
    width:8rem; margin:.25rem 1rem .25rem 0; font-size:1.375rem; text-align:right;
}
.field.field-adaptive-02 > .control{width:calc(100% - 9rem); margin:0;}
.field.field-adaptive-02 > .control > .select-wrapper,
.field.field-adaptive-02 > .control > .input-date-wrapper{width:100%;}
@media screen and (max-width:767.98px){
    .field.field-adaptive-02{flex-wrap:wrap; margin:.3125rem 0;}
    .field.field-adaptive-02 > label{width:100%; margin:0 0 .25rem 0; text-align:left;}
    .field.field-adaptive-02 > .control{width:100%;}
}

.field label.error{
    position:absolute; top:0; bottom:0; left:0; right:0; margin:0!important; font-weight:300;
    padding:calc(.5rem - 2px) calc(.75rem - 2px); border:3px solid transparent;
    line-height:1.25; font-size:1.375rem; pointer-events:none; transition:opacity .25s;
    font-family:'DB HEAVENT', sans-serif;
    /* font-family:'Sukhumvit', sans-serif; */
}


/* Input Wrappers */
.select-wrapper{display:inline-block; position:relative;}
.select-wrapper::after{
    content:'\f2f9'; font:normal normal normal 14px/1 'Material-Design-Iconic-Font';
    position:absolute; top:0; bottom:0; right:0; width:2rem; pointer-events:none;
    display:flex; align-items:center; justify-content:center;
}
.select-wrapper > select{
    -moz-appearance:none; -moz-appearance:none; -webkit-appearance:none; appearance:none;
    width:auto; max-width:100%;
}
.select-wrapper.icon-square::after{
    top:.3125rem; bottom:.3125rem; right:.3125rem; width:1.6875rem; font-size:1.25rem;
}

.input-date-wrapper{display:inline-block; position:relative;}
.input-date-wrapper::after{
    content:'\f332'; font:normal normal normal 20px/1 'Material-Design-Iconic-Font';
    position:absolute; top:0; bottom:0; right:0; width:2rem; pointer-events:none;
    display:flex; align-items:center; justify-content:center;
}

.input-dropzone{
    border-radius:.25rem; cursor:pointer; border:1.4px dotted transparent;
    padding:1.75rem 1rem 2rem 1rem;
}
.input-dropzone > *{pointer-events:none!important;}
.input-dropzone .dz-preview{display:none!important;}


/* Typography */
h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, p, .p{margin:0; font-weight:300;}
h1, .h1{font-size:4.5625rem; font-weight:600; line-height:1;}
h2, .h2{font-size:4rem; font-weight:600; line-height:1;}
h2.sm, .h2.sm{font-size:3.5rem;}
h3, .h3{font-size:3rem; font-weight:600; line-height:1;}
h3.sm, .h3.sm{font-size:2.625rem;}
h3.xs, .h3.xs{font-size:2.3125rem;}
h4, .h4{font-size:1.8125rem; font-weight:600; line-height:1;}
h4.lg, .h4.lg{font-size:2rem;}
h5, .h5{font-size:1.5625rem; font-weight:300; line-height:1;}
h6, .h6{font-size:1.5rem; font-weight:300; line-height:1;}
p, .p{font-size:1.375rem; font-weight:300;}
p.md, .p.md{font-size:1.4375rem; font-weight:300; line-height:1.2;}
p.sm, .p.sm{font-size:1.3125rem; font-weight:300;}
@media screen and (max-width:1199.98px){
    h1, .h1{font-size:4.4375rem;}
    h3.xs, .h3.xs{font-size:2.25rem;}
}
@media screen and (max-width:991.98px){
    h1, .h1{font-size:4.125rem;}
    h2, .h2{font-size:3.75rem;}
    h2.sm, .h2.sm{font-size:3.25rem;}
    h3, .h3{font-size:2.875rem;}
    h3.sm, .h3.sm{font-size:2.3125rem;}
    h3.xs, .h3.xs{font-size:2rem;}
    h4, .h4{font-size:1.75rem;}
    h4.lg, .h4.lg{font-size:1.875rem;}
}
@media screen and (max-width:767.98px){
    h1, .h1{font-size:3.625rem;}
    h2, .h2{font-size:3.25rem;}
    h2.sm, .h2.sm{font-size:3rem;}
    h3, .h3{font-size:2.75rem;}
    h3.sm, .h3.sm{font-size:2.1875rem;}
    h5, .h5{font-size:1.5rem;}
    h6, .h6{font-size:1.4375rem;}
    p.md, .p.md{font-size:1.375rem; line-height:1.1;}
}
@media screen and (max-width:575.98px){
    h1, .h1{font-size:3.25rem;}
    h2, .h2{font-size:3rem;}
    h2.sm, .h2.sm{font-size:2.75rem;}
    h3, .h3{font-size:2.5rem;}
    h3.sm, .h3.sm{font-size:2rem;}
    h3.xs, .h3.xs{font-size:1.8125rem;}
    h4, .h4{font-size:1.6875rem;}
    h4.lg, .h4.lg{font-size:1.75rem;}
    h5, .h5{font-size:1.4375rem;}
    h6, .h6{font-size:1.375rem;}
}

ul, ol{font-size:1.375rem; margin:.625rem 0;}
ul > li, ol > li{margin:.125rem 0;}


/* Buttons */
.btns{width:100%; margin:1.5rem 0 0 0;}

.btn, .btn:focus{box-shadow:none;}
.btn:hover{box-shadow:inset 0 0 0 100rem rgba(0,0,0,.05);}
.btn:active{box-shadow:inset 0 0 0 100rem rgba(0,0,0,.10);}

.btn-icon{
    position:relative; display:inline-block; overflow:hidden; text-align:center;
    cursor:pointer; font-size:1.3125rem; width:2rem; height:2.25rem; line-height:2.375rem;
    transition:background .25s, color .25s;
}
.btn-icon.inactive{filter:grayscale(100%); opacity:.6;}
.btn-icon.inactive:hover{filter:grayscale(0%); opacity:1;}
.btn-icon.btn-icon-xs{width:1.125rem; height:1.25rem; line-height:1.5625rem;}
.btn-icon.btn-icon-sm{width:1.3125rem; height:1.4375rem; line-height:1.4375rem;}

.btn-action, .btn-action:focus, .btn-action:hover, .btn-action:active{
    display:inline-block; position:relative; border:0; border-radius:0;
    font-size:1.375rem; font-weight:300; padding:.25rem 2.5rem .25rem 1.5rem; overflow:hidden;
    white-space:nowrap; min-width:9.75rem; text-align:center;
}
.btn-action::before{
    content:''; position:absolute; top:0; bottom:0; right:0; width:1.75rem;
    clip-path:polygon(0 0, 100% 0, 100% 100%, 0 100%, 40% 50%);
    -webkit-clip-path:polygon(0 0, 100% 0, 100% 100%, 0 100%, 40% 50%);
    transition:transform .3s;
}
.btn-action:hover::before{transform:translateX(calc(1.75rem * .6));}

.btn-social-white{
    position:relative; display:inline-block; text-align:center; cursor:pointer; 
    font-size:1.3125rem; width:2.25rem; height:2.5rem; line-height:2.5rem;
    clip-path:polygon(50% 0%, 100% 24%, 100% 76%, 50% 100%, 0% 76%, 0% 24%);
    -webkit-clip-path:polygon(50% 0%, 100% 24%, 100% 76%, 50% 100%, 0% 76%, 0% 24%);
    transition:background .25s, color .25s;
}
.btn-social-white::before{
    content:''; position:absolute; top:.125rem; bottom:.125rem; left:.125rem; right:.125rem;
    clip-path:polygon(50% 0%, 100% 24%, 100% 76%, 50% 100%, 0% 76%, 0% 24%);
    -webkit-clip-path:polygon(50% 0%, 100% 24%, 100% 76%, 50% 100%, 0% 76%, 0% 24%);
    transition:opacity .25s;
}
.btn-social-white:hover::before{opacity:0;}

.btn-round{border-radius:1000em; padding-left:1.1875rem; padding-right:1.1875rem;}
.btn-hex{
    clip-path:polygon(50% 0%, 100% 24%, 100% 76%, 50% 100%, 0% 76%, 0% 24%);
    -webkit-clip-path:polygon(50% 0%, 100% 24%, 100% 76%, 50% 100%, 0% 76%, 0% 24%);
}
.btn-hex-02{
    clip-path:polygon(50% 0%, 100% 26%, 100% 74%, 50% 100%, 0% 74%, 0% 26%);
    -webkit-clip-path:polygon(50% 0%, 100% 26%, 100% 74%, 50% 100%, 0% 74%, 0% 26%);
}


/* Capcha Container */
.capcha-container{width:100%; max-width:18.5rem;}
.capcha-container > img{display:block; width:100%; height:auto;}

/* Content Footer */
.content-footer{position:relative; width:100%;}
.content-footer .content-row{
    display:flex; flex-wrap:wrap; width:100%; padding:.5625rem 1rem;
    border-top:1px solid transparent;
}
.content-footer .content-row table{width:100%;}
.content-footer .content-row:last-child{border-bottom:1px solid transparent;}
.content-footer .btn-social{display:block; margin:0 .1875rem 0 0;}


/* Content General */
.content-banner{width:100%; max-width:48rem; margin:0 auto;}
img.content-img-float{
    display:block; float:right; width:17rem; height:auto; margin:0 0 1.5rem 3rem;
}
img.content-img-float.left{float:left; margin:0 3rem 1.5rem 0;}

.content-grid-title{transform:translateY(.875rem);}

.content-float-date{
    display:block; position:absolute; top:0; left:0; text-align:center;
    padding:.25rem .3125rem; min-width:3rem;
}
.content-float-date .d{
    border-bottom:1px solid transparent; font-size:2rem; font-weight:400; line-height:.9;
    white-space:nowrap;
}
.content-float-date .m-y{margin:.25rem 0 0 0; font-weight:100; font-size:1rem; white-space:nowrap;}

.content-quote{
    position:relative; width:100%; max-width:46rem; display:flex; justify-content:center;
    padding:0 1rem; margin:0 auto; flex-wrap:wrap;
}
.content-quote > *:first-child, .content-quote > *:last-child{position:relative;}
.content-quote > *:first-child::before, .content-quote > *:last-child::after{
    content:'“'; position:absolute; font-size:9rem; font-weight:600; line-height:1;
    pointer-events:none;
}
.content-quote > *:first-child::before{top:-3.5rem; left:-2.25rem;}
.content-quote > *:last-child::after{transform:rotate(180deg); bottom:-1.375rem; right:-3.25rem;}

.content-quote-02{
    position:relative; width:100%; display:flex; justify-content:center;
    padding:0 1rem; margin:0 auto; flex-wrap:wrap;
}
.content-quote-02 > *:first-child, .content-quote-02 > *:last-child{position:relative;}
.content-quote-02 > *:first-child::before, .content-quote-02 > *:last-child::after{
    content:'“'; position:absolute; font-size:5.25rem; font-weight:600; line-height:1;
    pointer-events:none;
}
.content-quote-02 > *:first-child::before{top:-1.875rem; left:-2rem;}
.content-quote-02 > *:last-child::after{transform:rotate(180deg); bottom:.4375rem; right:-2rem;}

.content-quote-simple{
    position:relative; width:100%; max-width:24.25rem; text-align:center; font-size:1.375rem;
    padding:0 1.125rem; margin:.875rem auto 0 auto; font-style:italic;
}
.content-quote-simple::before, .content-quote-simple::after{
    content:'“'; position:absolute; font-size:3.75rem; font-weight:600; line-height:1;
    pointer-events:none;
}
.content-quote-simple::before{top:-1rem; left:-.4375rem;}
.content-quote-simple::after{
    font-size:3rem; transform:rotate(180deg); bottom:.125rem; right:-.3125rem;
}

@media screen and (max-width:1199.98px){
    img.content-img-float{width:17rem; margin:0 0 1.5rem 2rem;}
    img.content-img-float.left{margin:0 2rem 1.5rem 0;}
}
@media screen and (max-width:991.98px){
    img.content-img-float{float:none; width:100%; max-width:16rem; margin:0 auto 1.5rem auto;}
    img.content-img-float.left{float:none; margin:0 auto 1.5rem auto;}
}
@media screen and (max-width:767.98px){
    .content-quote{padding:0 2rem;}
    .content-quote > *:last-child::after{right:-2.5rem;}
    .content-quote-02 > *:first-child::before{left:-1.75rem;}
    .content-quote-02 > *:last-child::after{right:-1.75rem;}
}


/* Grid Header */
.grid-header{margin:3.25rem 0 0 0;}
.grid-header .options{width:100%; display:flex; align-items:center; margin:.25rem 0 0 0;}
.grid-header .btn-grid{
    display:block; width:2.25rem; height:2.25rem; border-radius:0; text-align:center;
    border:1px solid transparent; line-height:2.375rem; font-size:1.5rem; padding:0;
}
.grid-header .options > *{margin:0 0 0 .4375rem;}
.grid-header .options > *:first-child{margin:0;}
.grid-header .options.btns{justify-content:flex-end;}
.grid-header input[type=text], .grid-header select{
    border-radius:0; padding:.2rem .75rem; font-size:1.375rem;
}
.grid-header input[type=text]{width:calc(100% - 2.5rem); max-width:15rem;}
.grid-header input[type=text] + .btn-grid{margin:0 0 0 .25rem;}
.grid-header select{padding-right:1.75rem; width:9.625rem;}
@media screen and (max-width:991.98px){
    .grid-header{margin:3.875rem 0 0 0;}
}
@media screen and (max-width:767.98px){
    .grid-header{margin:2.5rem 0 0 0;}
    .grid-header .options, .grid-header .options.btns{justify-content:center; flex-wrap:wrap;}
}

/* Grid Footer */
.grid-footer{
    width:100%; display:flex; align-items:center; justify-content:space-between;
    border-top:1px solid transparent; border-bottom:1px solid transparent;
    padding:.125rem 0; margin:3rem 0 0 0; font-size:1.25rem;
}
.grid-footer > .block{display:flex; align-items:center;}
.grid-footer .pagination{margin:0;}
.grid-footer .text-wrapper{text-align:center; font-size:1.25rem; padding:.25rem 0; font-weight:300;}
.grid-footer select{
    padding:.375rem 1.4375rem .325rem .375rem; font-size:.9375rem; font-weight:300;
    margin:0 0 0 .25rem; background:transparent;
}
.grid-footer select.pp{font-size:1.4375rem; font-weight:500; padding:0 .75rem 0 0; border:0;}
.grid-footer .select-wrapper::after{width:.75rem; font-size:.9375rem;}
@media screen and (max-width:991.98px){
    .grid-footer{flex-wrap:wrap; justify-content:center; margin:2.25rem 0 0 0;}
    .grid-footer > .block{width:100%;}
    .grid-footer .text-wrapper{width:100%;}
}

/* Pagination */
.pagination{width:100%; padding:.625rem 0; text-align:center; margin:1.8125rem 0 0 0;}
.pagination.border-top{border-top:1px solid transparent;}
.pagination.border-bottom{border-bottom:1px solid transparent;}
.pagination > .wrapper{
    width:100%; display:flex; align-items:center; justify-content:center; flex-wrap:wrap;
}
.pagination .page-btn{
    display:block; text-decoration:none; height:1.625rem; width:1.625rem; padding:0;
    line-height:1.375rem; font-size:1.25rem; font-weight:300; text-align:center;
    margin:.0625rem .125rem; border:2px solid transparent; border-radius:0; white-space:nowrap;
    transition:background .25s, color .25s, border-color .25s;
}
.pagination .page-btn.active{font-weight:600; font-size:1.625rem; pointer-events:none;}
.pagination .page-btn.page-prev, .pagination .page-btn.page-next{
    font-size:1.4375rem; line-height:1.25rem;
}
.pagination .page-btn.page-first, .pagination .page-btn.page-last{
    width:auto; font-size:1.125rem; font-weight:300; min-width:4rem;
}
.pagination .page-btn.disabled{opacity:.3; pointer-events:none;}
.pagination .page-btn > em{transform:translateY(0);}


/* Hamburger */
.hamburger{cursor:pointer;}
.hamburger > *{width:2rem; height:.14rem; transition:all .5s;}
.hamburger > *:nth-child(2){margin:.375rem 0;}
.hamburger.active > *:nth-child(1){
    -webkit-transform:rotate(-45deg)translate(-.375rem, .375rem);
    transform:rotate(-45deg)translate(-.375rem, .375rem);
}
.hamburger.active > *:nth-child(2){opacity:0;}
.hamburger.active > *:nth-child(3){
    -webkit-transform:rotate(45deg)translate(-.375rem,-.375rem);
    transform:rotate(45deg)translate(-.375rem, -.375rem);
}


/* Map Container */
.map-container{display:block; position:relative; width:100%; height:400px;}
.map-container .icon-sets{position:absolute; top:9rem; right:8rem;}
.map-container .icon-set{
    display:block; width:3rem; height:3.375rem; color:#fff; background:#67dbdb;
    text-align:center; line-height:3.5rem; font-size:2rem; margin:-.5625rem 0 0 0;
    transition:background .25s;
}
.map-container .icon-set:hover{background:#8b58bf;}
.map-container .icon-set:last-child{background:#8b58bf;}
.map-container .icon-set:last-child:hover{background:#67dbdb;}
.map-container .icon-set:nth-child(2n){transform:translateX(1.5rem);}
@media screen and (max-width:1199.98px){
    .map-container{height:360px;}
    .map-container .icon-sets{right:6rem;}
}
@media screen and (max-width:991.98px){
    .map-container{height:320px;}
    .map-container .icon-sets{top:1.25rem; right:2.25rem;}
}
@media screen and (max-width:767.98px){
    .map-container{height:280px;}
}
@media screen and (max-width:575.98px){
    .map-container{height:250px;}
}


/* Popup Container */
.popup-container{
    display:block; position:fixed; top:0; left:0; width:100%; height:100vh; z-index:100;
    opacity:0; pointer-events:none; background:rgba(0,0,0,.4); transition:opacity .45s;
    backdrop-filter:blur(3px);
}
.popup-container.active{opacity:1; pointer-events:all;}
.popup-container > .wrapper{
    position:relative; width:100%; height:100%; padding:1.5rem;; display:flex; align-items:center;
}
.popup-container .close-filter{
    position:fixed; top:0; left:0; width:100vw; height:100vh; opacity:0; cursor:pointer;
}
.popup-container .popup-box{
    display:block; position:relative; width:100%; max-width:640px; padding:0; margin:0 auto;
}
.popup-container .box-header{
    position:relative; width:100%; border-radius:.3125rem .3125rem 0 0;
    padding:1.5rem 1rem .875rem 1rem;
}
.popup-container .box-header img.pin{
    display:block; width:3.25rem; height:auto; position:absolute; top:-2.375rem;
    left:calc(50% - 1.625rem);
}
.popup-container .box-header .close-btn{
    position:absolute; top:1.125rem; bottom:0; right:1rem; font-size:1.875rem;
}
.popup-container .box-header .close-btn:hover{opacity:.75;}
.popup-container .box-body{width:100%; padding:1rem 1rem 1.5rem 1rem;}
.popup-container .box-body .contents{width:100%; display:flex; justify-content:space-between;}
.popup-container .box-body .content{position:relative; width:calc(65% - 1rem);}
.popup-container .box-body .content:first-child{width:35%;}
.popup-container .box-btns{
    width:100%; display:flex; border-radius:0 0 .3125rem .3125rem; overflow:hidden;
}
.popup-container .box-btn{
    display:block; width:50%; padding:.875rem .5rem; text-align:center; font-size:1.375rem;
    transition:background .25s, color .25s;
}
.popup-container .box-btn i, .popup-container .box-btn em{font-size:1.125rem; margin:0 .375rem 0 0;}
@media screen and (max-width:575.98px){
    .popup-container .box-header img.pin{width:2.75rem; top:-2.125rem; left:calc(50% - 1.375rem);}
    .popup-container .box-body .contents{flex-wrap:wrap;}
    .popup-container .box-body .content{width:100%;}
    .popup-container .box-body .content:first-child{width:100%; height:140px; margin:0 0 .5rem 0;}
}


/* Slide Container */
.slide-container{position:relative; width:100%;}
.slide-container .arrows{
    position:absolute; top:0; bottom:0; left:0; right:0; display:flex; align-items:center;
    justify-content:space-between; pointer-events:none;  
}
.slide-container .arrows button{
    border:0; padding:0; background:none; box-shadow:none; font-size:0; pointer-events:all;
    outline:none; position:relative; transition:all .3s;
}
.slide-container .arrows button.slick-prev{padding:.5rem 1rem .5rem 0;}
.slide-container .arrows button.slick-next{padding:.5rem 0 .5rem 1rem;}
.slide-container .arrows button::before{
    font:normal normal normal 14px/1 'Material-Design-Iconic-Font'; font-size:3rem;
}
.slide-container .arrows button.slick-prev::before{content:'\f2fa';}
.slide-container .arrows button.slick-next::before{content:'\f2fb';}


/* Special Box */
.ss-box{position:relative; width:100%; padding:3rem;}
@media screen and (max-width:1199.98px){
    .ss-box{padding:2.75rem;}
}
@media screen and (max-width:991.98px){
    .ss-box{padding:2.5rem;}
}
@media screen and (max-width:767.98px){
    .ss-box{padding:2rem;}
}
@media screen and (max-width:575.98px){
    .ss-box{padding:1.5rem;}
}

/* Special Box Header */
.ss-box-header{position:relative; width:100%; padding:0;}
.ss-box-header > .header, .ss-box-header > .body{position:relative; padding:1rem 1.5rem;}
@media screen and (max-width:991.98px){
    .ss-box-header > .header, .ss-box-header > .body{padding:1rem;} 
}


/* Special Box Background */
.ss-box-bg{
    position:absolute; top:0; bottom:0; left:-1rem; right:-1rem; pointer-events:none;
    -webkit-mask-image:linear-gradient(to bottom, #000, #000, #000, #000,
        #000, #000, #000, #000, #000, rgba(0,0,0,.5), rgba(0,0,0,0));
}
.ss-box-bg::before{
    content:''; display:block; width:calc(100% - 2rem); height:100%; margin:0 1rem;
}

/* Special Box Shadow */
.ss-box-shadow{
    position:absolute; top:0; bottom:0; left:-1rem; right:-1rem; pointer-events:none;
    -webkit-mask-image:linear-gradient(to bottom, #000, #000, #000, #000,
        #000, #000, #000, #000, #000, #000, #000, #000, #000,
        rgba(0,0,0,.5), rgba(0,0,0,0));
}
.ss-box-shadow::before{
    content:''; display:block; width:calc(100% - 2rem); height:100%;
    margin:0 1rem; box-shadow:0 0 10px 2px rgba(0,0,0,.15);
}
@media screen and (min-width:768px){
    .ss-box-shadow.fade-right{
        top:-1rem; bottom:-1rem; left:0; right:0;
        -webkit-mask-image:linear-gradient(to right, #000, #000, #000, #000,
            #000, #000, #000, #000, #000, #000, #000, #000, #000,
            rgba(0,0,0,.5), rgba(0,0,0,0));
    }
    .ss-box-shadow.fade-right::before{
        width:100%; height:calc(100% - 2rem); margin:1rem 0;
        box-shadow:0 0 10px 2px rgba(0,0,0,.15);
    }
}


/* Shortcode */
.shortcode-container{position:relative; width:100%; display:flex;}
.shortcode-container .icon{display:block; width:3.5rem; height:3.5rem;}
.shortcode-container .icon > img{display:block; width:100%; height:100%;}
.shortcode-container textarea{
    display:block; width:calc(100% - 3.5rem); height:3.5rem; max-height:3.5rem;
    border-radius:0; border:1px solid transparent; line-height:1; background:transparent;
    pointer-events:none; padding:.25rem 4.75rem .25rem .75rem; font-size:1.375rem;
}
.shortcode-container .btn-code-copy{
    position:absolute; top:0; bottom:0; right:0; padding:0 .75rem; white-space:nowrap;
    display:flex; align-items:center; font-size:1.3125rem; font-weight:500;
}


/* Special Card */
.ss-card .title{
    display:block; display:-webkit-box; text-overflow:ellipsis; overflow:hidden;
    -webkit-box-orient:vertical; -webkit-line-clamp:2;
}
.ss-card .desc{
    display:block; display:-webkit-box; text-overflow:ellipsis; overflow:hidden;
    -webkit-box-orient:vertical; -webkit-line-clamp:3;
}

/* Special Card 01 */
.ss-card-01 .text-container{
    position:relative; width:calc(100% - 1.375rem); margin:-1.125rem .6875rem 0 .6875rem;
    padding:.75rem 1rem 1rem 1rem; transition:color .25s, background .25s;
}
.ss-card-01.text-only .text-container{margin-top:0;}
.ss-card-01 .text-wrapper{position:relative;}

/* Special Card 02 */
.ss-card-02 .text-container{
    width:100%; padding:.75rem .5rem; margin:0 0 .75rem 0; transition:background .25s;
}

/* Special Card 03 */
.ss-card-03{position:relative; padding:0 35% 0 0;}
.ss-card-03 .text-container{
    position:absolute; top:1.5rem; bottom:1.5rem; right:0; width:45%;
    transition:color .25s, background .25s;
}
.ss-card-03 .text-container > .wrapper{
    position:relative; width:100%; height:100%; padding:.75rem 2rem 1rem 2rem; 
    display:flex; align-items:center;
}
@media screen and (max-width:1199.98px){
    .ss-card-03 .text-container{top:1.25rem; bottom:1.25rem; width:50%;}
    .ss-card-03 .text-container > .wrapper{padding:.75rem 1rem 1rem 1rem;}
}
@media screen and (max-width:767.98px){
    .ss-card-03{padding:0;}
    .ss-card-03 .text-container{
        position:relative; width:calc(100% - 1.375rem); margin:-1.125rem .6875rem 0 .6875rem;
        top:auto; bottom:auto;
    }
}

/* Special Card 04 */
.ss-card-04{position:relative; padding:0 calc(100% - 21rem) 0 0;}
.ss-card-04 .text-container{
    position:absolute; top:1rem; bottom:1rem; right:0; width:calc(100% - 18rem);
    transition:color .25s, background .25s;
}
.ss-card-04 .text-container > .wrapper{
    position:relative; width:100%; height:100%; padding:.75rem 2rem 1rem 2rem; 
    display:flex; align-items:center;
}
.ss-card-04 .title{-webkit-line-clamp:1;}
@media screen and (max-width:1199.98px){
    .ss-card-04{padding:0 35% 0 0;}
    .ss-card-04 .text-container{top:1.25rem; bottom:1.25rem; width:50%;}
    .ss-card-04 .text-container > .wrapper{padding:.75rem 1rem 1rem 1rem;}
    .ss-card-04 .title{-webkit-line-clamp:2;}
}
@media screen and (max-width:767.98px){
    .ss-card-04{padding:0;}
    .ss-card-04 .text-container{
        position:relative; width:calc(100% - 1.375rem); margin:-1.125rem .6875rem 0 .6875rem;
        top:auto; bottom:auto;
    }
}

/* Special Card 05 */
.ss-card-05{width:100%; display:flex;}
.ss-card-05 .text-container{
    width:calc(100% - 17.5rem); padding:1rem 1.5rem; display:flex; min-height:6.875rem;
    border:1px solid transparent; transition:all .25s;
}
.ss-card-05 .text-container > h5{width:2.25rem;}
.ss-card-05 .text-wrapper{width:calc(100% - 2.25rem);}
.ss-card-05 .stat-container{
    width:17.5rem; position:relative; border:1px solid transparent; border-left:0;
}
.ss-card-05 .stat-container > .wrapper{padding:.5rem 1rem;}
.ss-card-05 .stat-container .btns{
    display:flex; width:100%; position:absolute; bottom:0; left:0; right:0; margin:0;
    border-top:1px solid transparent;
}
.ss-card-05 .stat-container .btn{
    display:block; width:50%; text-align:center; border-radius:0; font-size:1.1875rem;
    font-weight:200; border:0;
}
.ss-card-05 .stat-container .btn:first-child{border-right:1px solid transparent;}
.ss-card-05 .stat-container .btn i, .ss-card-05 .stat-container .btn em{
    display:inline-block; width:1.3125rem; height:1.3125rem; font-size:1rem;
    line-height:1.3125rem; text-align:center; margin:0 .25rem 0 0;
}
@media screen and (max-width:1199.98px){
    .ss-card-05 .text-container{padding:1rem;}
}
@media screen and (max-width:767.98px){
    .ss-card-05{display:block;}
    .ss-card-05 .text-container{width:100%;}
    .ss-card-05 .text-container > h5{width:2rem;}
    .ss-card-05 .text-wrapper{width:calc(100% - 2rem);}
    .ss-card-05 .stat-container{width:100%; border-top:0; border-left:1px solid transparent;}
    .ss-card-05 .stat-container .btns{position:relative; bottom:auto; left:auto;}
}

/* Special Card 06 */
.ss-card-06{width:100%; display:flex;}
.ss-card-06 .card-tag{width:1.75rem; margin:.25rem .625rem 0 0;}
.ss-card-06 .card-tag > img{display:block; width:100%; height:auto;}
.ss-card-06 .text-container{width:calc(100% - 2.375rem);}

/* Special Card 07 */
.ss-card-07{position:relative; padding:0 calc(100% - 16rem) 0 0;}
.ss-card-07 .text-container{
    position:absolute; top:.5rem; bottom:.5rem; right:0; width:calc(100% - 15rem);
    transition:color .25s, background .25s;
}
.ss-card-07 .text-container > .wrapper{
    position:relative; width:100%; height:100%; padding:.75rem 1rem;
}
@media screen and (max-width:1199.98px){
    .ss-card-07{padding:0 35% 0 0;}
    .ss-card-07 .text-container{top:1.25rem; bottom:1.25rem; width:50%;}
    .ss-card-04 .text-container > .wrapper{padding:.75rem 1rem 1rem 1rem;}
    .ss-card-07 .title{-webkit-line-clamp:2;}
}
@media screen and (max-width:767.98px){
    .ss-card-07{padding:0;}
    .ss-card-07 .text-container{
        position:relative; width:calc(100% - 1.375rem); margin:-1.125rem .6875rem 0 .6875rem;
        top:auto; bottom:auto;
    }
}

/* Special Card 08 */
.ss-card-08{position:relative; padding:0 calc(100% - 21rem) 0 0;}
.ss-card-08 .text-container{
    position:absolute; top:.75rem; bottom:.75rem; right:0; width:calc(100% - 19.75rem);
    display:flex; transition:color .25s, background .25s;
}
.ss-card-08 .text-container > .wrapper{
    position:relative; height:100%; padding:.75rem 2rem 1rem 2rem; 
    display:flex; align-items:center; width:calc(100% - 12rem);
}
.ss-card-08 .text-container > .options{width:12rem;}
.ss-card-08 .text-container > .options > .option{
    display:flex; align-items:center; flex-wrap:wrap; width:100%; height:50%;
    padding:1rem 1.5rem; font-size:1.3125rem; font-weight:300;
}
.ss-card-08 .text-container > .options .icon > img{
    display:block; width:auto; max-width:1rem; height:auto; max-height:.875rem;
}
.ss-card-08 .title{-webkit-line-clamp:1;}
@media screen and (max-width:991.98px){
    .ss-card-08{padding:0;}
    .ss-card-08 .text-container{
        position:relative; width:calc(100% - 1.375rem); top:auto; bottom:auto;
        margin:-1.125rem .6875rem 0 .6875rem;
    }
}
@media screen and (max-width:767.98px){
    .ss-card-08 .text-container{flex-wrap:wrap; height:auto;}
    .ss-card-08 .text-container > .wrapper{width:100%; padding:1rem 1.25rem 1.25rem 1.25rem;}
    .ss-card-08 .text-container > .options{width:100%; display:flex;}
    .ss-card-08 .text-container > .options > .option{
        width:50%; height:100%; padding:1rem 1.25rem; font-size:1.25rem;
    }
    .ss-card-08 .title{-webkit-line-clamp:unset;}
}


/* Special Date */
.ss-date{width:100%; position:relative;}
.ss-date > .date{
    display:block; position:absolute; top:0; left:-4rem; text-align:center;
    padding:.25rem .3125rem; min-width:3rem;
}
.ss-date > .date .d{
    border-bottom:1px solid transparent; font-size:2rem; font-weight:400; line-height:.9;
    white-space:nowrap;
}
.ss-date > .date .m-y{margin:.25rem 0 0 0; font-weight:100; font-size:1rem; white-space:nowrap;}
@media screen and (max-width:991.98px){
    .ss-date{padding:0 0 0 4rem; min-height:3.75rem;}
    .ss-date > .date{left:0;}
}


/* Special Image */
.ss-img{display:block; position:relative; width:100%; padding:60% 0 0 0; overflow:hidden;}
.ss-img.horizontal{padding:50% 0 0 0;}
.ss-img.square{padding:100% 0 0 0;}
.ss-img.vertical{padding:125% 0 0 0;}
.ss-img > .img-bg{
    position:absolute; top:0; bottom:0; left:0; right:0; background-size:cover;
    background-position:center; transition:transform .3s;
}
.ss-img:hover > .img-bg, .ss-card:hover .ss-img > .img-bg{transform:scale(1.1);}

.ss-img > .date{
    display:block; position:absolute; top:0; left:0; text-align:center; padding:.25rem .3125rem;
}
.ss-img > .date .d{
    border-bottom:1px solid transparent; font-size:2rem; font-weight:400; line-height:.9;
}
.ss-img > .date .m-y{margin:.25rem 0 0 0; font-weight:100; font-size:1rem;}

.ss-img .hover-container{
    position:absolute; top:0; bottom:0; left:0; right:0; opacity:0;
    display:flex; justify-content:center; align-items:center; transition:opacity .25s;
}
.ss-img:hover .hover-container, .ss-card:hover .ss-img .hover-container{opacity:1;}
.ss-img .hover-container .icon{display:block; width:4rem;}
.ss-img .hover-container .icon > img{display:block; width:100%; height:auto;}

.ss-img .ads-location{position:absolute; bottom:0; left:0;}
.ss-img .ads-location > img{display:block; width:100%; max-width:7rem; height:auto;}

.ss-img > .tag-star{
    display:block; position:absolute; top:4.0625rem; left:.3125rem; width:2.3125rem;
}
.ss-img > .tag-star > img{display:block; width:100%; height:auto;}

.ss-img .play-container{
    position:absolute; top:0; bottom:0; left:0; right:0; transition:transform .25s;
    display:flex; justify-content:center; align-items:center;
}
.ss-img .play-container .icon{
    display:block; width:4rem; height:4rem; border-radius:50%; border:5px solid transparent;
    font-size:2.25rem; text-align:center; line-height:4rem;
}

.ss-img .content-info{position:absolute; bottom:0; left:0; width:100%;}
.ss-img .content-info .text-wrapper{padding:1.5rem 3rem 1.5rem 1.5rem;}

.ss-img > .ss-options{
    position:absolute; bottom:.75rem; left:.5rem; right:.5rem; text-align:center;
    font-size:1.25rem; font-weight:400;
}
.ss-img > .ss-options a{margin:0 1rem 0 0; transition:opacity .25s;}
.ss-img > .ss-options a:last-child{margin:0;}
.ss-img > .ss-options a:hover{opacity:.7;}
.ss-img > .ss-options a > img{display:inline-block; height:1.25rem; width:auto; margin:0 .25rem 0 0;}

@media screen and (max-width:767.98px){
    .ss-img .content-info .text-wrapper{padding:1rem 4rem 1rem 1rem;}
}


/* Special List */
ul.ss-list{list-style:none; padding:0; margin:.25rem 0;}
ul.ss-list > li{
    font-size:1.3125rem; font-weight:400; position:relative; padding:.25rem 0 .25rem 1.125rem;
}
ul.ss-list.fw-200 > li{font-weight:200;}
ul.ss-list.fw-300 > li{font-weight:300;}
ul.ss-list.fw-400 > li{font-weight:400;}
ul.ss-list.fw-500 > li{font-weight:500;}
ul.ss-list.fw-600 > li{font-weight:600;}
ul.ss-list > li:first-child{padding-top:0;}
ul.ss-list > li:last-child{padding-bottom:0;}
ul.ss-list > li::before{
    content:''; position:absolute; top:.75rem; left:0; width:.3125rem; height:.3125rem;
}
ul.ss-list > li:first-child::before{top:.5rem;}
ul.ss-list .btn-icon{position:absolute; margin-left:.75rem; transition:opacity .25s;}
ul.ss-list .btn-icon:hover{opacity:.8;}
ul.ss-list.ss-list-toggle ul.ss-list{display:none;}
ul.ss-list.gap-sm{margin:.5rem 0;}
ul.ss-list.gap-sm > li{padding-top:.125rem; padding-bottom:.125rem;}
ul.ss-list.gap-sm > li::before{top:.6875rem;}
ul.ss-list.dot-h3-xs > li::before{top:1.125rem;}
ul.ss-list.dot-h3-xs > li:first-child::before{top:.875rem;}

/* Special List Detail */
.ss-list-detail{width:100%; display:flex; justify-content:space-between;}
.ss-list-detail > *:nth-child(1){margin-right:.75rem;}
.ss-list-detail > *:nth-child(2){text-align:right;}
@media screen and (max-width:991.98px){
    .ss-list-detail{display:block;}
    .ss-list-detail > *:nth-child(1){margin-right:0;}
    .ss-list-detail > *:nth-child(2){text-align:left;}
}


/* Special Separation */
.ss-sep{display:block; width:100%; height:1px; margin:1.125rem 0;}


/* Special Stat */
.ss-stat{width:100%; display:flex; flex-wrap:wrap; margin:.5rem 0 0 0;}
.ss-stat .stat{
    display:flex; align-items:center; white-space:nowrap; margin:.25rem 1rem 0 0;
    font-size:1.375rem; font-weight:400;
}
.ss-stat .stat > .icon{
    display:block; width:1.5rem; height:1.5rem; line-height:1.5625rem; margin:0 .5rem 0 0;
    text-align:center; font-size:1.0625rem;
}
.ss-stat .stat > .icon > img{display:block; width:100%; height:100%;}
.ss-stat .stat.fit-text{margin-right:0;}
.ss-stat .stat.fit-text > .icon + *{width:calc(100% - 2rem);}


/* Special Step */
.ss-step{width:100%;}
.ss-step > .wrapper{
    position:relative; width:auto; display:flex; display:flex; justify-content:space-between;
}
.ss-step > .wrapper::before{
    content:''; position:absolute; top:1.8125rem; left:4.75rem; right:4.75rem; height:.25rem;
}
.ss-step .step{position:relative; width:6rem; line-height:.92; text-align:center;}
.ss-step .step .icon{
    display:block; width:3.625rem; height:3.875rem; margin:0 auto .5rem auto;
    text-align:center; font-size:1.375rem; font-weight:400; line-height:3.875rem;
}


/* Special Tag */
.ss-tag{width:100%; display:flex; margin:.375rem 0 0 0;}
.ss-tag > .text{font-weight:600; font-size:1.1875rem; margin:.25rem .375rem 0 0;}
.ss-tag > .tags{display:block;}
.ss-tag > .text + .tags{width:calc(100% - 2.25rem);}
.ss-tag .tag{
    display:inline-block; padding:.125rem .3125rem .0625rem .3125rem; border:1px solid transparent;
    margin:.125rem .0625rem .0625rem 0; font-size:1.125rem; transition:all .25s;
}


/* Special Video */
.ss-mp4{position:relative; width:100%;}
.ss-mp4 > .wrapper{position:relative; width:100%; padding:56.25% 0 0 0; overflow:hidden;}
.ss-mp4 video, .ss-mp4 iframe{
    position:absolute; top:0; bottom:0; left:0; right:0; width:100%; height:100%;
}


/* Table */
.table-wrapper{width:100%; overflow-x:auto; overflow-y:hidden; padding:0 1px .875rem 1px;}
table.table{width:100%; margin:0;}

table.table-detail td{padding:.5rem 0; font-size:1.3125rem; border:0;}

table.table-download td{
    border:0; padding:.25rem 0; line-height:1; vertical-align:middle; font-size:1.3125rem;
}
table.table-download td:first-child{width:3rem;}
table.table-download td:last-child{text-align:right; white-space:nowrap;}
table.table-download .file-icon{display:block; width:2.5rem; height:auto;}
table.table-download .file-icon > img{display:block; width:100%; height:auto;}
table.table-download .btn-download{font-weight:500; white-space:nowrap;}
table.table-download .btn-download > i, table.table-download .btn-download > em{
    display:inline-block; width:1.375rem; height:1.375rem; border:2.5px solid transparent;
    font-size:1rem; line-height:1.1875rem; transform:rotate(90deg); text-align:center;
    margin:0 0 0 .25rem; transition:border-color .25s, background .25s, color .25s;
}
table.table-download.type-02 .file-icon, table.table-download.type-03 .file-icon{width:2rem;}
table.table-download.type-02 td, table.table-download.type-03 td{
    padding:.625rem 1rem .625rem 0; border-top:1px solid transparent;
    border-bottom:1px solid transparent;
}
table.table-download.type-03 td{border:0; border-bottom:3px solid transparent;}
table.table-download.type-02 td:first-child, table.table-download.type-03 td:first-child{
    padding-left:1rem; border-left:1px solid transparent;
}
table.table-download.type-02 td:last-child, table.table-download.type-03 td:last-child{
    border-right:1px solid transparent;
}

table.table-download-02 td{
    padding:.75rem 0 .75rem 1.125rem; border:0; border-bottom:3px solid transparent;
}
table.table-download-02 td:last-child{padding-right:1.125rem;}
table.table-download-02 td:nth-child(2){min-width:18rem;}
table.table-download-02 tr.row-title td{padding:0; border:1px solid transparent;}
table.table-download-02 .row-header{position:relative; display:flex; align-items:center;}
table.table-download-02 .row-header .ss-date{width:2.8125rem; margin:0 1rem 0 0; padding:0;}
table.table-download-02 .row-header .ss-date > .date{position:relative; left:auto; top:auto;}
table.table-download-02 .row-header .text-wrapper{
    position:relative; width:calc(100% - 3.8125rem); padding:0 1.125rem 0 0;
    transition:color .25s;
}
table.table-download-02 .row-header::before{
    content:''; position:absolute; top:0; bottom:0; left:0; right:0; opacity:0;
    transition:opacity .25s;
}
table.table-download-02 .row-header:hover::before{opacity:1;}
table.table-download-02 .file-icon{display:block; width:2.5rem; height:auto;}
table.table-download-02 tr.row-sep td{
    padding:.75rem!important; background:transparent!important; border:0!important;
}
table.table-download-02 tr.row-sep:first-child td{padding:0!important;}
table.table-download-02 .btn{
    display:flex; font-size:1.25rem; font-weight:500; white-space:nowrap; padding:0;
}
table.table-download-02 .btn > em{
    display:block; width:1.5rem; height:1.5rem; text-align:center; line-height:1.1875rem;
    border:2px solid transparent; margin:0 0 0 .5rem; font-size:1rem;
}

table.table-sm td{
    border:0; padding:.125rem 0; font-size:1.25rem; font-weight:200; transition:color .25s;
}
table.table-sm td:nth-child(1){font-weight:500;}

table.table-xs td{
    border:0; padding:0; font-size:1.25rem; line-height:1.1; font-weight:200; transition:color .25s;
}
table.table-xs td:nth-child(1){font-weight:500;}

table.table-estate > tbody > tr > td{border:0;}
table.table-estate > tbody > tr > td:nth-child(1){padding:1.25rem 1rem; width:14rem; text-align:right;}
table.table-estate > tbody > tr > td:nth-child(2){padding:1.25rem 1.5rem;}
@media screen and (max-width:991.98px){
    table.table-estate > tbody > tr > td:nth-child(1){padding:1rem; width:10rem;}
    table.table-estate > tbody > tr > td:nth-child(2){padding:1rem;}
}
@media screen and (max-width:767.98px){
    table.table-estate, table.table-estate > tbody, table.table-estate > tbody > tr,
    table.table-estate > tbody > tr > td{display:block; width:100%;}
    table.table-estate > tbody > tr > td:nth-child(1){width:100%; text-align:left;}
}

table.table-helpdesk th{text-align:center; font-size:1.5625rem; font-weight:300; border:0;}
table.table-helpdesk td{
    font-size:1.3125rem; font-weight:200; text-align:center; border:0;
    padding-top:.875rem; padding-bottom:.875rem; border-bottom:2px solid transparent;
}
table.table-helpdesk .tag-status{
    display:inline-block; text-align:center; padding:.1875rem .5em; min-width:6.5rem;
    margin:0 auto; border-radius:.125rem; font-size:1.0625rem;
}

table.table-vote th{
    padding:1rem .25rem; font-size:1.375rem; font-weight:300; border:0; vertical-align:middle;
}
table.table-vote th:nth-child(1){padding:1rem .25rem 1rem 1rem;}
table.table-vote td{padding:.5rem .25rem; font-size:1.3125rem; font-weight:200; border:0;}
table.table-vote td:nth-child(1){padding:.5rem .25rem .5rem 1rem;}
table.table-vote tbody > tr:first-child > td{padding-top:1.25rem;}
table.table-vote tbody > tr:last-child > td{padding-bottom:1.25rem;}
@media screen and (max-width:767.98px){
    table.table-vote th{padding:.75rem .25rem;}
    table.table-vote th:nth-child(1){padding:.75rem .25rem .75rem 1rem;}
}

table.table-faq th{
    text-align:center; padding:1rem .5rem; border-top:3px solid transparent;
    border-bottom:3px solid transparent;
}
table.table-faq th:last-child, table.table-faq td:last-child{border-right:0!important;}
table.table-faq td{
    border:0; padding-top:.875rem; padding-bottom:.875rem; border-right:1px solid transparent;
}
table.table-faq tr:last-child > td{border-bottom:3px solid transparent;}


/* Vote Block */
.vote-blocks{width:100%;}
.vote-blocks .vote-block{
    width:100%; position:relative; border:1px solid transparent; border-bottom:0;
    display:flex; justify-content:space-between; padding:0;
}
.vote-blocks .vote-block:last-child{border-bottom:1px solid transparent;}
.vote-blocks .vote-block .ss-date{position:absolute;}
.vote-blocks .vote-block .date{top:0; left:0;}
.vote-blocks .vote-block .question-container{
    width:calc(100% - 12rem); padding:1.5rem 1.25rem 1.75rem 5rem;
}
.vote-blocks .vote-block .field.field-sm label{font-size:1.25rem; font-weight:500;}
.vote-blocks .vote-block .info-container{width:12rem; text-align:center;}
.vote-blocks .vote-block .icon-container{
    width:100%; display:flex; align-items:center; padding:1.25rem; font-size:1.3125rem;
    font-weight:500;
}
.vote-blocks .vote-block .icon-container em{transform:none; margin:0 .5rem 0 0;}
.vote-blocks .vote-block .chart-container{
    display:flex; align-items:center; justify-content:space-between;
    width:100%; max-width:32rem; margin:.75rem auto 0 auto;
}
.vote-blocks .vote-block .chart-container .chart{width:calc(100% - 14rem);}
.vote-blocks .vote-block .chart-container .labels{width:14rem;}
.vote-blocks .vote-block .chart-container .label{
    width:100%; display:flex; align-items:center; margin:.3125rem 0;
}
.vote-blocks .vote-block .chart-container .label > .dot{
    width:2.5rem; height:2rem; line-height:2rem; font-size:1.5rem; font-weight:500;
    color:#fff; text-align:center; margin:0 .5rem 0 0;
}
.vote-blocks .vote-block .chart-container .label > p{
    font-size:1.125rem; font-weight:500; opacity:.6; line-height:1;
}
@media screen and (max-width:991.98px){
    .vote-blocks .vote-block .question-container{padding:1.25rem 1rem 1.5rem 4.5rem;}
}
@media screen and (max-width:767.98px){
    .vote-blocks .vote-block{flex-wrap:wrap;}
    .vote-blocks .vote-block .question-container,
    .vote-blocks .vote-block .info-container{width:100%;}
    .vote-blocks .vote-block .question-container{padding:1rem 1rem 1.25rem 4rem;}
    .vote-blocks .vote-block .info-container{padding:0 0 1.25rem 4rem;}
    .vote-blocks .vote-block .icon-container{padding:1rem;}
}
@media screen and (max-width:575.98px){
    .vote-blocks .vote-block .chart-container{
        max-width:18rem; flex-wrap:wrap; justify-content:center;
    }
    .vote-blocks .vote-block .chart-container .chart{width:100%;}
    .vote-blocks .vote-block .chart-container .labels{width:auto;}
}


/* Utility */
.text-3xl{font-size:240%!important; line-height:.25;}
.text-2xl{font-size:150%!important; line-height:.25;}
.text-xl{font-size:128%!important;}
.text-lg{font-size:114%!important;}
.text-md{font-size:110%!important;}
.text-nm{font-size:1.3125rem!important;}
.text-sm{font-size:90%!important;}
.text-xs{font-size:80%!important;}
.text-2xs{font-size:70%!important;}
.text-3xs{font-size:60%!important;}

.fw-100{font-weight:100!important;}
.fw-200{font-weight:200!important;}
.fw-300{font-weight:300!important;}
.fw-400{font-weight:400!important;}
.fw-500{font-weight:500!important;}
.fw-600{font-weight:600!important;}
.fw-700{font-weight:700!important;}
.fw-800{font-weight:800!important;}
.fw-900{font-weight:900!important;}

.op-100{opacity:1!important;} .op-0{opacity:0!important;}
.op-10{opacity:.1!important;} .op-20{opacity:.2!important;} .op-30{opacity:.3!important;}
.op-40{opacity:.4!important;} .op-50{opacity:.5!important;} .op-60{opacity:.6!important;}
.op-70{opacity:.7!important;} .op-80{opacity:.8!important;} .op-90{opacity:.9!important;}

.d-block{display:block!important;}
.d-flex{display:flex!important;}
.d-inline{display:inline!important;}
.d-inline-block{display:inline-block!important;}
.d-none{display:none!important;}

.jc-start{justify-content:flex-start!important;}
.jc-center{justify-content:center!important;}
.jc-end{justify-content:flex-end!important;}
.jc-space-between{justify-content:space-between!important;}
.jc-space-evenly{justify-content:space-evenly!important;}
.ai-center{align-items:center!important;}
.ai-start{align-items:flex-start!important;}
.ai-end{align-items:flex-end!important;}
.fw-wrap{flex-wrap:wrap!important;}

.width-auto{width:auto!important;}
.width-full{width:100%!important; max-width:100%!important;}
.height-auto{height:auto!important;}

.ws-nowrap{white-space:nowrap!important;}
.ws-normal{white-space:normal!important;}
.no-br > br{display:none;}

.no-border{border:0!important;}
.no-border-bottom{border-bottom:0!important;}
.border{border:1px solid transparent!important;}
.border-top{border-top:1px solid transparent!important;}
.border-top-2{border-top:2px solid transparent!important;}
.border-top-4{border-top:4px solid transparent!important;}
.border-bottom{border-bottom:1px solid transparent!important;}
.border-bottom-2{border-bottom:2px solid transparent!important;}
.border-bottom-4{border-bottom:4px solid transparent!important;}

.no-bradius{border-radius:0!important;}
.no-padding{padding:0!important;}
.box-shadow{box-shadow:0px 5px 20px 10px rgba(0,0,0,.1);}

.ovf-hidden{overflow:hidden;}
.clear-both{clear:both;}

@media screen and (max-width:1199.98px){
    .lg-no-br > br{display:none;}
}
@media screen and (max-width:991.98px){
    .md-no-br > br{display:none;}
}
@media screen and (max-width:767.98px){
    .sm-no-br > br{display:none;}
}
@media screen and (max-width:575.98px){
    .xs-no-br > br{display:none;}
    .xs-hide{display:none;}
}

/* Custom aos */
@media screen and (max-width:575.98px){
    #fade-up-mobile {
        transition-delay: .15s;
    }
    #fade-up-mobile-2 {
        transition-delay: .3s;
    }
}

/* Buttons */
.btn-icon.btn-icon-01{background:#4b326e; color:#fff;}
.btn-icon.btn-icon-01:hover{background:#169f96; color:#fff;}

.btn-action, .btn-action:focus, .btn-action:hover, .btn-action:active{
    background:#3d3d3d; color:#fff;
}
.btn-action::before{background:#6cdded;}
.btn-action.btn-action-01::before{background:#ccc;}

.btn-social-white{background:#fff; color:#fff;}
.btn-social-white::before{background:#4b326e;}
.btn-social-white:hover{background:#2d2d2d; color:#fff;}
.btn-social-white.tw:hover{background:#39cbed; color:#fff;}
.btn-social-white.fb:hover{background:#5182f2; color:#fff;}
.btn-social-white.yt:hover{background:#ff0000; color:#fff;}



</style>
</head>
<body style="max-width:768px;margin:auto;overflow-x: hidden;overflow-y: auto;font-size: 16px;font-weight: 300;line-height: 1.1;font-family: 'DB HEAVENT', sans-serif;">
   <!-- Topnav -->
            <nav style="position: relative;top: 0;left: 0;width: 100%;transition: transform .3s;z-index: 95;border-bottom: 1px solid transparent;background: #fff;">
                <div style="padding-right:10px;padding-left:10px;">
                    <div style="width: 100%;display: flex; align-items: center;justify-content: space-between;">
                        <a href="index.php" style="display:flex;flex-wrap:wrap;margin:0px 15px 0px 15px; align-items:center;color: #000;text-decoration:none;">
                            <img src="public/assets/app/images/logo.png" alt="Logo" />
                            <div style="font-size:1rem; margin-left:15px">
                                <h5>การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)</h5>
                                <p>Industrial Estate Authority of Thailand</p>
                            </div>
                        </a>
                         <div style="display:flex;flex-wrap:wrap;margin:0px 15px 0px 15px;align-items:center;">
                            <p href="">
                              <em class="zmdi zmdi-phone" style="font-size:2.5rem;color:#4A2E6D;"></em>
                            </p>
                            <div style="margin:0px 15px 0px 5px;color:#4A2E6D;border-right:1px solid black; padding:10px;border-right-style: dotted;text-align:center;">
                             <p>ติดต่อ Call-Center</p>
                             <h4>02-2072700</h4>
                            </div>
                            <div style="display:flex;">
                                   <a class="btn-social-white" href="#">
                                       <em class="zmdi zmdi-twitter"></em>
                                   </a>
                                   <a class="btn-social-white" href="#">
                                       <em class="zmdi zmdi-facebook"></em>
                                   </a>
                                   <a class="btn-social-white" href="#">
                                       <em class="zmdi zmdi-youtube-play"></em>
                                   </a>
                            </div>
                        </div>
                    </div>
                <h4 style="text-align:center;margin-top:10rem;margin-bottom:10rem;">[Content section]</h4>      
                </div>
            </nav>
            <div style="background-image: linear-gradient(rgba(255,255,255,1), transparent, transparent), url('public/assets/app/images/banner/01.jpg');text-align:center;background-position: -150px 90px;background-size: 190%; background-repeat: no-repeat;">
                <h5 style="font-weight:500; color:#4A2E6D;padding-top:2rem;">คุณสามารถยกเลิกอีเมล์ข่าวสาร โดยคลิกที่ปุ่มด้านล่าง</h5>
                <div>
                <button class="btn-action"style="margin-top:1rem;background-color:#3D3D3D;font-weight: 400;border: 1px solid transparent;padding: .375rem .75rem;
                font-size: 1.375rem;line-height: 1.5;transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                    <span>ยกเลิกรับข่าวสาร</span>
                </button> 
                </div>
                <img src="public/assets/app/images/hero/01.png" alt="Hero" style="margin-bottom: 10rem;margin-top:2rem;text-align:center;">               
            </div>
                <!-- Footer -->
            <nav style="color:white; background-color:#4b326e;">
                <div>
                    <div style="display:block;">
                            <div style="text-align:center;padding: 25px 0px 25px 0px;font-size:1.5rem;">
                                <span style="font-size:1.8rem;">การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)</span><br>
                                <span> 618 ถนนนิคมมักกะสัน แขวงมักกะสัน เขตราชเทวี กรุงเทพมหานคร 10400</span><br>
                                <span style="color:#6cdded; margin-left:.5rem;">โทรศัพท์</span> 
                                <a id="blue-h"style="font-weight:500;color:white;margin-right:0.5rem;" href="#">
                                    02 2530561
                                </a> 
                                <span style="color:#6cdded; margin-left:.5rem;">โทรสาร</span> 
                                <a style="font-weight:500;color:white;margin-right:0.5rem;" href="#">
                                    02 2526582 , 02 2534086 </a>
                                <span style="color:#6cdded; margin-left:.5rem;">อีเมล์</span>
                                <a style="font-weight:500;color:white;margin-right:0.5rem;" href="#">
                                    contact@ieat.mail.go.th
                                </a>
                                <br>				
                                <span style="font-size:80%">
                                    © สงวนสิทธ์ 2564 การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)
                                </span>
                            </div>
                         
                    </div>
                </div>
            </nav>
</body>
</html>
