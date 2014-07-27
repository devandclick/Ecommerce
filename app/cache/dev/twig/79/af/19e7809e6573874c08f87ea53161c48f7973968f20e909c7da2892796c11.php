<?php

/* EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig */
class __TwigTemplate_79af19e7809e6573874c08f87ea53161c48f7973968f20e909c7da2892796c11 extends Twig_Template
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
        echo "Bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "username"), "html", null, true);
        echo "
<br />
Votre commande est validée.
Vous pouvez accèder à votre facture sur votre espace client.
<br /><br />
L'équipe DevAndClick vous remerci pour votre commande.
<br />
Cordialement.";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
