<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_b9a346ca73e1dda75834ee8535c557c28463a9acc815ab7e0f541f66456ab58f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  50 => 15,  46 => 14,  182 => 85,  168 => 80,  163 => 78,  155 => 75,  152 => 74,  132 => 65,  108 => 56,  105 => 55,  97 => 52,  87 => 49,  56 => 35,  34 => 26,  22 => 20,  45 => 30,  36 => 10,  30 => 5,  23 => 2,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 303,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 294,  932 => 287,  930 => 286,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 277,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 267,  883 => 265,  881 => 264,  878 => 263,  871 => 259,  869 => 258,  845 => 257,  842 => 255,  839 => 253,  837 => 252,  835 => 251,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 226,  791 => 225,  788 => 224,  784 => 221,  781 => 216,  776 => 212,  756 => 208,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 199,  737 => 198,  734 => 197,  730 => 192,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 180,  701 => 179,  698 => 178,  694 => 175,  692 => 174,  689 => 173,  685 => 170,  683 => 169,  680 => 168,  675 => 165,  673 => 164,  670 => 163,  665 => 160,  663 => 159,  660 => 158,  656 => 155,  654 => 154,  651 => 153,  647 => 150,  645 => 149,  642 => 148,  638 => 145,  635 => 144,  631 => 141,  629 => 140,  626 => 139,  622 => 136,  619 => 135,  616 => 133,  611 => 129,  601 => 128,  596 => 127,  594 => 126,  591 => 124,  589 => 123,  586 => 122,  581 => 118,  579 => 116,  578 => 115,  577 => 114,  576 => 113,  572 => 112,  569 => 110,  567 => 109,  564 => 108,  558 => 104,  556 => 103,  554 => 102,  552 => 101,  550 => 100,  546 => 99,  543 => 97,  541 => 96,  538 => 95,  524 => 92,  521 => 91,  507 => 88,  504 => 87,  479 => 82,  476 => 80,  474 => 79,  472 => 78,  467 => 77,  465 => 76,  448 => 75,  445 => 74,  441 => 71,  439 => 70,  437 => 69,  431 => 66,  429 => 65,  427 => 64,  425 => 63,  423 => 62,  414 => 60,  412 => 59,  404 => 58,  401 => 57,  399 => 56,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  381 => 48,  377 => 47,  373 => 46,  370 => 45,  365 => 41,  362 => 39,  360 => 38,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  337 => 27,  334 => 26,  330 => 23,  328 => 22,  326 => 21,  323 => 19,  321 => 18,  317 => 17,  314 => 16,  300 => 13,  298 => 12,  295 => 11,  290 => 7,  287 => 5,  285 => 4,  282 => 3,  278 => 331,  275 => 330,  273 => 317,  270 => 316,  268 => 300,  265 => 299,  263 => 294,  260 => 293,  257 => 291,  255 => 284,  252 => 283,  250 => 274,  247 => 273,  245 => 270,  242 => 269,  240 => 263,  237 => 262,  235 => 250,  232 => 249,  230 => 244,  227 => 243,  224 => 241,  222 => 238,  219 => 237,  217 => 232,  214 => 231,  212 => 224,  209 => 223,  207 => 216,  204 => 215,  201 => 213,  199 => 212,  196 => 211,  194 => 197,  191 => 196,  188 => 88,  186 => 190,  183 => 189,  181 => 185,  178 => 184,  176 => 178,  173 => 177,  171 => 81,  166 => 79,  161 => 162,  156 => 157,  154 => 153,  151 => 152,  149 => 73,  144 => 144,  141 => 70,  139 => 139,  136 => 138,  134 => 133,  131 => 132,  129 => 64,  126 => 63,  124 => 62,  119 => 95,  114 => 59,  106 => 86,  104 => 74,  101 => 73,  99 => 54,  84 => 48,  79 => 29,  74 => 16,  69 => 40,  66 => 25,  88 => 17,  85 => 16,  77 => 12,  58 => 9,  32 => 6,  26 => 3,  20 => 1,  29 => 24,  24 => 2,  19 => 1,  179 => 84,  174 => 31,  169 => 168,  164 => 163,  159 => 158,  153 => 5,  148 => 65,  146 => 147,  142 => 63,  138 => 69,  130 => 57,  121 => 61,  117 => 50,  109 => 87,  100 => 39,  91 => 35,  89 => 37,  83 => 30,  81 => 47,  76 => 25,  61 => 2,  59 => 36,  55 => 8,  51 => 33,  47 => 9,  43 => 8,  35 => 9,  25 => 5,  127 => 44,  123 => 42,  116 => 94,  111 => 90,  102 => 40,  96 => 53,  94 => 51,  90 => 27,  86 => 36,  82 => 25,  75 => 28,  71 => 15,  67 => 20,  64 => 38,  62 => 24,  57 => 15,  54 => 34,  48 => 16,  42 => 12,  39 => 11,  37 => 6,  31 => 25,  28 => 3,);
    }
}
