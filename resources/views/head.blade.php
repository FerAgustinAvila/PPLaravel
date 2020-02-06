<!DOCTYPE html>
<html>
    <head>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!-- Normalize -->
        <style> 
                /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

                /* Document
                ========================================================================== */

                /**
                * 1. Correct the line height in all browsers.
                * 2. Prevent adjustments of font size after orientation changes in iOS.
                */

                html {
                    line-height: 1.15; /* 1 */
                    -webkit-text-size-adjust: 100%; /* 2 */
                }
                
                /* Sections
                    ========================================================================== */
                
                /**
                * Remove the margin in all browsers.
                */
                
                body {
                    margin: 0;
                }
                
                /**
                * Render the `main` element consistently in IE.
                */
                
                main {
                    display: block;
                }
                
                /**
                * Correct the font size and margin on `h1` elements within `section` and
                * `article` contexts in Chrome, Firefox, and Safari.
                */
                
                h1 {
                    font-size: 2em;
                    margin: 0.67em 0;
                }
                
                /* Grouping content
                    ========================================================================== */
                
                /**
                * 1. Add the correct box sizing in Firefox.
                * 2. Show the overflow in Edge and IE.
                */
                
                hr {
                    box-sizing: content-box; /* 1 */
                    height: 0; /* 1 */
                    overflow: visible; /* 2 */
                }
                
                /**
                * 1. Correct the inheritance and scaling of font size in all browsers.
                * 2. Correct the odd `em` font sizing in all browsers.
                */
                
                pre {
                    font-family: monospace, monospace; /* 1 */
                    font-size: 1em; /* 2 */
                }
                
                /* Text-level semantics
                    ========================================================================== */
                
                /**
                * Remove the gray background on active links in IE 10.
                */
                
                a {
                    background-color: transparent;
                }
                
                /**
                * 1. Remove the bottom border in Chrome 57-
                * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
                */
                
                abbr[title] {
                    border-bottom: none; /* 1 */
                    text-decoration: underline; /* 2 */
                    text-decoration: underline dotted; /* 2 */
                }
                
                /**
                * Add the correct font weight in Chrome, Edge, and Safari.
                */
                
                b,
                strong {
                    font-weight: bolder;
                }
                
                /**
                * 1. Correct the inheritance and scaling of font size in all browsers.
                * 2. Correct the odd `em` font sizing in all browsers.
                */
                
                code,
                kbd,
                samp {
                    font-family: monospace, monospace; /* 1 */
                    font-size: 1em; /* 2 */
                }
                
                /**
                * Add the correct font size in all browsers.
                */
                
                small {
                    font-size: 80%;
                }
                
                /**
                * Prevent `sub` and `sup` elements from affecting the line height in
                * all browsers.
                */
                
                sub,
                sup {
                    font-size: 75%;
                    line-height: 0;
                    position: relative;
                    vertical-align: baseline;
                }
                
                sub {
                    bottom: -0.25em;
                }
                
                sup {
                    top: -0.5em;
                }
                
                /* Embedded content
                    ========================================================================== */
                
                /**
                * Remove the border on images inside links in IE 10.
                */
                
                img {
                    border-style: none;
                }
                
                /* Forms
                    ========================================================================== */
                
                /**
                * 1. Change the font styles in all browsers.
                * 2. Remove the margin in Firefox and Safari.
                */
                
                button,
                input,
                optgroup,
                select,
                textarea {
                    font-family: inherit; /* 1 */
                    font-size: 100%; /* 1 */
                    line-height: 1.15; /* 1 */
                    margin: 0; /* 2 */
                }
                
                /**
                * Show the overflow in IE.
                * 1. Show the overflow in Edge.
                */
                
                button,
                input { /* 1 */
                    overflow: visible;
                }
                
                /**
                * Remove the inheritance of text transform in Edge, Firefox, and IE.
                * 1. Remove the inheritance of text transform in Firefox.
                */
                
                button,
                select { /* 1 */
                    text-transform: none;
                }
                
                /**
                * Correct the inability to style clickable types in iOS and Safari.
                */
                
                button,
                [type="button"],
                [type="reset"],
                [type="submit"] {
                    -webkit-appearance: button;
                }
                
                /**
                * Remove the inner border and padding in Firefox.
                */
                
                button::-moz-focus-inner,
                [type="button"]::-moz-focus-inner,
                [type="reset"]::-moz-focus-inner,
                [type="submit"]::-moz-focus-inner {
                    border-style: none;
                    padding: 0;
                }
                
                /**
                * Restore the focus styles unset by the previous rule.
                */
                
                button:-moz-focusring,
                [type="button"]:-moz-focusring,
                [type="reset"]:-moz-focusring,
                [type="submit"]:-moz-focusring {
                    outline: 1px dotted ButtonText;
                }
                
                /**
                * Correct the padding in Firefox.
                */
                
                fieldset {
                    padding: 0.35em 0.75em 0.625em;
                }
                
                /**
                * 1. Correct the text wrapping in Edge and IE.
                * 2. Correct the color inheritance from `fieldset` elements in IE.
                * 3. Remove the padding so developers are not caught out when they zero out
                *    `fieldset` elements in all browsers.
                */
                
                legend {
                    box-sizing: border-box; /* 1 */
                    color: inherit; /* 2 */
                    display: table; /* 1 */
                    max-width: 100%; /* 1 */
                    padding: 0; /* 3 */
                    white-space: normal; /* 1 */
                }
                
                /**
                * Add the correct vertical alignment in Chrome, Firefox, and Opera.
                */
                
                progress {
                    vertical-align: baseline;
                }
                
                /**
                * Remove the default vertical scrollbar in IE 10+.
                */
                
                textarea {
                    overflow: auto;
                }
                
                /**
                * 1. Add the correct box sizing in IE 10.
                * 2. Remove the padding in IE 10.
                */
                
                [type="checkbox"],
                [type="radio"] {
                    box-sizing: border-box; /* 1 */
                    padding: 0; /* 2 */
                }
                
                /**
                * Correct the cursor style of increment and decrement buttons in Chrome.
                */
                
                [type="number"]::-webkit-inner-spin-button,
                [type="number"]::-webkit-outer-spin-button {
                    height: auto;
                }
                
                /**
                * 1. Correct the odd appearance in Chrome and Safari.
                * 2. Correct the outline style in Safari.
                */
                
                [type="search"] {
                    -webkit-appearance: textfield; /* 1 */
                    outline-offset: -2px; /* 2 */
                }
                
                /**
                * Remove the inner padding in Chrome and Safari on macOS.
                */
                
                [type="search"]::-webkit-search-decoration {
                    -webkit-appearance: none;
                }
                
                /**
                * 1. Correct the inability to style clickable types in iOS and Safari.
                * 2. Change font properties to `inherit` in Safari.
                */
                
                ::-webkit-file-upload-button {
                    -webkit-appearance: button; /* 1 */
                    font: inherit; /* 2 */
                }
                
                /* Interactive
                    ========================================================================== */
                
                /*
                * Add the correct display in Edge, IE 10+, and Firefox.
                */
                
                details {
                    display: block;
                }
                
                /*
                * Add the correct display in all browsers.
                */
                
                summary {
                    display: list-item;
                }
                
                /* Misc
                    ========================================================================== */
                
                /**
                * Add the correct display in IE 10+.
                */
                
                template {
                    display: none;
                }
                
                /**
                * Add the correct display in IE 10.
                */
                
                [hidden] {
                    display: none;
                }
        </style>

        <style>
            @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');


            
            html{
                box-sizing: border-box;
                font-size: 62.5%; /** Reset para REMS - 62.5% = 10px de 16px  **/
            }
            *, *:before,*:after{
                box-sizing: inherit;
            }

            body {
                margin: 0 auto;
                padding: 0;
                width: 100%;
                /* display: table; */
                font-weight: 100;
                font-family: 'Lato';
                overflow-x: hidden;
                background: #fff;
                height: 1000px;
                font-family: 'Raleway', sans-serif;
                text-align: center;
            }

            .nav{
                position: fixed;
                display: flex;
                flex-direction: row;
                font-size: 20px;
                color: #fff;
                justify-content: center;
                align-items: center;
                z-index: 1;
                list-style: none;
                background: #000;
                padding: 30px;
                width: 100%;
                font-weight: bold;
                left: 50%;
                margin-top: 1%;
                transform: translate(-50%, -40%);
            }

            .nav li{
                padding-top: 15px;
            }

            .content{
                width: 95%;
                max-width: 120rem; /** = 1200px **/
                margin: 0 auto;
            }

            .container {
                text-align: center;
            }

            .title {
                font-size: 70px;
                margin-top: 100px;
            }

            span {  
                font-size: 3.8rem;
                opacity:0.5;
            }

            h4{
                font-size: 4rem;
            }

            .alignl{
                text-align: justify;
            }

            @media screen and (max-width: 300px){
                .nav{
                    font-size: 10px;
                }
            } 

            li{
                margin-left: 70px;
                margin-right: 70px;
                list-style: none;
            }
            a:hover,
            .alignl a:hover{
                cursor: pointer;
                color: blue;
            } 

            @media screen and (max-width: 600px){
                li{
                    margin-left: 30px;
                    margin-right: 30px;
                    font-size: 10px;
                }
            }         

            a{
                text-decoration: none;
                color: white;
            }

            p, li, label{
                font-size: 25px;
                font-family: 'Raleway', sans-serif;
            }

            .alignl a{
                color: #FF0000;
            }

            /* Formulario */

            

            .form-consulta {
                text-align: left;
                margin: 15px auto;
                max-width: 700px; 
                background: #eee; 
                padding: 25px; 
                font-family: 'Source Sans Pro', sans-serif;
            }

            .campo-form {
                width:100%; 
                height:36px; 
                margin:2px 0 6px; 
                padding-left:6px; 
                box-sizing: border-box; 
                border-radius:3px; 
                border:0; 
                font-family: 'Source Sans Pro', sans-serif; 
                font-size: 1em;
            }
            
            label span {
                color: #f00
            }

            textarea {
                min-height: 150px!important;
            }

            .btn-form {
                display: inline-block; 
                border:0; 
                background: #000; 
                height: 46px; 
                line-height: 46px; 
                padding: 0 20px; 
                border-radius: 6px; 
                color:#fff; 
                text-decoration: none; 
                text-transform: uppercase; 
                letter-spacing: 1px;
                font-size: 15px
            }

            .btn-form:hover {
                background: #444;
                cursor: pointer;
            }

</style>