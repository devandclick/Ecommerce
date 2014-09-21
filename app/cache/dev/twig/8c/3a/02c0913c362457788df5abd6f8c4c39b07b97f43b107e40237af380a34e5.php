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
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("adminCategories");
        echo "\">Catégories produits</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("adminUtilisateurs");
        echo "\">Clients</a>
            </li>
            <li>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("adminCommande");
        echo "\">Commandes</a>
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
        return array (  32 => 9,  26 => 6,  19 => 1,  153 => 50,  148 => 33,  143 => 12,  138 => 7,  133 => 6,  127 => 5,  122 => 51,  120 => 50,  116 => 49,  112 => 48,  108 => 47,  93 => 34,  91 => 33,  88 => 32,  86 => 31,  76 => 24,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 17,  39 => 7,  35 => 6,  25 => 1,  75 => 26,  65 => 22,  60 => 28,  56 => 19,  52 => 18,  49 => 20,  45 => 16,  31 => 5,  28 => 3,);
    }
}
