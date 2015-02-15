<?php

/* :modulesUsed:panier.html.twig */
class __TwigTemplate_10c4ea1b18b645bb4534d0688ed45698357e75bc1de6e0e170ecf1c54d169a66 extends Twig_Template
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
        echo "<div class=\"well\">
    <div class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"icon-shopping-cart\"></i>
            3 item - 54,27 €
            <b class=\"caret\"></b></a>
        </a>
        <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
            <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
            <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
            <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
            <a href=\"panier.php\" class=\"btn btn-primary\">Mon Panier</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return ":modulesUsed:panier.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
