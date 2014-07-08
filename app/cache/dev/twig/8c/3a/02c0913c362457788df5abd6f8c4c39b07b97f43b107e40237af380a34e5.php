<?php

/* ::modulesUsed/navigationAdmin.html.twig */
class __TwigTemplate_8c3a02c0913c362457788df5abd6f8c4c39b07b97f43b107e40237af380a34e5 extends Twig_Template
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
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("adminProduits");
        echo "\">Produits</a>
            </li>
            <li>
                <a href=\"ajout-edit.php\">Catégories produits</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"ajout-edit.php\">Clients</a>
            </li>
            <li>
                <a href=\"ajout-edit.php\">Commandes</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">Pages</a>
            </li>
        </ul>
    </div>    
</div>";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,  150 => 50,  145 => 33,  140 => 12,  135 => 7,  130 => 6,  124 => 5,  119 => 51,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  90 => 34,  88 => 33,  85 => 32,  83 => 31,  61 => 13,  51 => 28,  39 => 7,  35 => 6,  25 => 1,  77 => 29,  70 => 24,  59 => 12,  55 => 11,  50 => 16,  47 => 9,  43 => 8,  31 => 5,  28 => 3,);
    }
}
