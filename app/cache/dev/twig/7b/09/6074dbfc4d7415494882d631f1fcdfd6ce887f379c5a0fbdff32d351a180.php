<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_7b096074dbfc4d7415494882d631f1fcdfd6ce887f379c5a0fbdff32d351a180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\" />
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  34 => 5,  31 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 93,  196 => 92,  188 => 90,  182 => 87,  173 => 85,  68 => 30,  62 => 27,  28 => 3,  357 => 123,  344 => 119,  341 => 118,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  263 => 95,  258 => 94,  243 => 92,  231 => 83,  224 => 81,  212 => 78,  202 => 94,  190 => 76,  187 => 75,  174 => 65,  143 => 51,  136 => 71,  122 => 41,  117 => 39,  112 => 36,  104 => 32,  85 => 24,  75 => 19,  58 => 25,  44 => 10,  161 => 63,  158 => 80,  154 => 60,  151 => 59,  140 => 58,  125 => 42,  121 => 50,  118 => 49,  100 => 39,  87 => 41,  49 => 11,  46 => 10,  27 => 3,  91 => 33,  88 => 25,  63 => 18,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  309 => 108,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  283 => 100,  281 => 114,  276 => 111,  274 => 97,  269 => 107,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  235 => 85,  232 => 88,  227 => 86,  222 => 83,  210 => 77,  208 => 76,  189 => 66,  184 => 63,  175 => 65,  170 => 84,  166 => 54,  163 => 82,  155 => 47,  152 => 46,  144 => 42,  127 => 35,  109 => 52,  94 => 21,  82 => 28,  76 => 34,  61 => 15,  39 => 6,  36 => 5,  79 => 21,  72 => 18,  69 => 17,  54 => 22,  47 => 11,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 58,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  120 => 31,  115 => 39,  111 => 47,  108 => 37,  106 => 51,  101 => 31,  98 => 45,  92 => 43,  83 => 33,  80 => 32,  74 => 14,  66 => 11,  60 => 6,  55 => 24,  52 => 12,  50 => 22,  41 => 19,  32 => 6,  29 => 6,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 158,  373 => 156,  361 => 152,  355 => 150,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  312 => 109,  303 => 106,  300 => 105,  298 => 120,  289 => 113,  286 => 112,  278 => 98,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  246 => 136,  241 => 93,  233 => 87,  229 => 87,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 75,  203 => 73,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  178 => 66,  176 => 86,  172 => 64,  168 => 61,  165 => 83,  162 => 57,  156 => 62,  153 => 77,  150 => 55,  147 => 75,  141 => 73,  134 => 54,  130 => 46,  123 => 61,  119 => 40,  116 => 57,  113 => 48,  105 => 25,  102 => 40,  99 => 23,  96 => 37,  90 => 42,  84 => 40,  81 => 23,  73 => 33,  70 => 15,  67 => 24,  64 => 23,  59 => 16,  53 => 12,  45 => 9,  43 => 12,  38 => 7,  35 => 6,  33 => 4,  30 => 5,);
    }
}
