<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_35ed73d0417671ed6e3212a6c9ae4c8e4a942f0214daa5dfab7df6589ac9f739 extends Twig_Template
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
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
        </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("factures");
        echo "\">Mes factures</a>
        </li>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  42 => 13,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
    }
}
