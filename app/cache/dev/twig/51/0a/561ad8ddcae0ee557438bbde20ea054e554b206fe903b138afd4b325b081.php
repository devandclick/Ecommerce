<?php

/* @WebProfiler/Profiler/admin.html.twig */
class __TwigTemplate_510a561ad8ddcae0ee557438bbde20ea054e554b206fe903b138afd4b325b081 extends Twig_Template
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
        echo "<div class=\"search import clearfix\" id=\"adminBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADo0lEQVR42u2XS0hUURjHD5njA1oYbXQ2MqCmIu2iEEISUREEEURxFB8ovt+DEsLgaxBRQQeUxnQ0ZRYSQasgiDaFqxAy2jUtCjdCoEjFwHj6/+F+dbvN6PQAN37wm++c7/z/35x7uPcOo7TW58rFBs59A7GGQ51XBAIBlZmZuYOhE1zm/A/4PxvY3NwMO53OYEJCgp+nccqXXQc94D54boAxalyLNayNtra2NJmbmzvOyMj4cRqoKYK4AsZzc3Nft7e3f5qZmTnCpk8Ix6xxjRpDGzmkUU5Ozuu2trZP09PTR+vr6ycbGxtaWFtbC9fU1AQTExPdmNNzLSUlZXt4ePhANNGghlp6lDWkkcvlOsCX6LNYXV0N8BTS0tK2cDJfWIsFaumhV0lIIxzXl5WVFX0aPp8vhDwJbMnJyc6JiYkji8YP7oI4YowfmDX00KskOHG73UfLy8vahB/cBXFSW1pa2kPOA7RdqqysfGtaCyOXA2VGgmvUiJ5e9lD8qKioeOv1ejVZXFwMI5eLEWOFWgh5Etg4J0lJSTdwYiHxLSwseFi3Yg5qRE8veyh+TE1Nhebn5zWZnZ31mE2okTxmM6WlpS7xeDyeQ2Qb61bMQQ214mMPVVxc7MJuNBkfHz9EtplNmEcET4JPfL29va+i6azR19f3UnzV1dUrqqqqyocT0KSzs/OV1YB6ROrr67fF19TU9DSazhp1dXXPxdfS0vJQNTY2+sfGxjSpra19YTWgHhHs/pn40OhRNJ0lLuON+kF8ra2tY9yAe3R0VBMc6wfr84n6b1BDrfiam5snImgczObAq7ylv7//q/hGRkbuqMHBwTt4Q2nS3d39jSKzCfXfoKarq+ur+NhD1owLcNrt9h3OTXGrqKgoKJ6hoaFD5DhuIA43xiGyJoWFhUGKxYXaL3CNGtH39PR8Zg9jzREfH+8vKCgI4krDRu0GcGVnZ78ZGBg4ER/Wf+4OVzOMRhrwFE6ysrLe0EQzaopII65RI3p478lVp6am7uDmPJY11F44HI7dsrKyfc5Nnj1km5Lo6Oiw4cdnD1kLJSUl++np6btsQjhmzayB5x29uGp3fn5+EPMw66eBX8b3yHZlDdyRdtzN75F1LED7kR6gMA7E6HsMrqpogbv5KngM9Bk8MbTKwAYmQSiCdhd4wW0VazQ0NNwEXrALNDHGS+A2UFHIA3smj/rX4JvrT7GBSRDi/J8Db8e/JY/5jLj4Y3KxgfPfwHc53iL+IQDMOgAAAABJRU5ErkJggg==\">
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_profiler_import");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 8
        if ((!twig_test_empty((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))))) {
            // line 9
            echo "            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
            echo "\">Purge</a>
            </div>
            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
            echo "\">Export</a>
            </div>
        ";
        }
        // line 16
        echo "        &#187;&#160;<label for=\"file\">Import</label><br>
        <input type=\"file\" name=\"file\" id=\"file\"><br>
        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  36 => 10,  33 => 9,  27 => 7,  98 => 34,  87 => 32,  83 => 31,  76 => 27,  70 => 24,  64 => 21,  58 => 18,  53 => 15,  38 => 12,  31 => 8,  26 => 6,  56 => 16,  46 => 13,  42 => 13,  39 => 10,  35 => 9,  19 => 1,);
    }
}
