<?php

/* UtilisateursBundle:Administration:Utilisateurs/layout/factures.html.twig */
class __TwigTemplate_39629bc8cb515ac8a832b8aff18562d8c49079731bbfdb886830d872e843becd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layoutAdmin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Utilisateurs factures list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Références</th>
                <th>Date</th>
                <th>Prix TTC</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "commandes")) == 0)) {
            // line 17
            echo "                <tr>
                    <td colspan=\"4\"><center>Ancunne facture actuellement.</center></td>
                </tr>
            ";
        }
        // line 21
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "commandes"));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 22
            echo "            <tr>
                <td>ref : ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "reference"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande"), "prixTTC"), "html", null, true);
            echo " €</td>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminShowFacture", array("id" => $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "id"))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-refresh\"></i></a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Administration:Utilisateurs/layout/factures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  58 => 22,  53 => 21,  47 => 17,  45 => 16,  31 => 4,  28 => 3,);
    }
}
