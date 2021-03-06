import * as $ from 'jquery';

import Prism from 'prismjs';
import 'prismjs/components/prism-markup-templating';
import 'prismjs/components/prism-php';
import 'prismjs/components/prism-javascript';
import 'prismjs/components/prism-markup';
import 'prismjs/components/prism-css';
import 'prismjs/components/prism-bash';
import 'prismjs/themes/prism.css';

export default class PrismHighlight {

    /**
     * @type Object
     */
    private static attributes = {
        data:   {
            highlightPrismCode: "data-highlight-prism-code"
        },
    };

    /**
     * @description Main initialization logic
      */
    public init(): void
    {
        this.highlightCode();
    };

    /**
     * @description Calling prism on tinymce elements
     */
    public highlightCode(): void
    {
        let $codeElements               = $('code[class^="language-"]');
        let $tinyMceCodeElements        = $('#tiny-mce-wrapper code');
        let $prismHighlightedCodeElements = $('[' + PrismHighlight.attributes.data.highlightPrismCode + '=true] pre');

        let $allElements = $.merge($codeElements, $tinyMceCodeElements);
        $allElements     = $.merge($allElements, $prismHighlightedCodeElements);

        $.each($allElements, function(index, codeElement){
            Prism.highlightElement(codeElement);
        });
    }

}