<?php

/* UtilisateursBundle:Administration/Utilisateurs/layout:index.html.twig */
class __TwigTemplate_1146dd214407b2505e021de367df50caeb865e55c132d3b5f07fa543c95a8754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout/layoutAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        echo "<h1>Utilisateurs list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute($context["utilisateur"], "adresses", array())) != 0)) {
                // line 19
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminAdressesUtilisateurs", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
                echo "\" title=\"Consulter les adresses\"><i class=\"icon-book\"></i></a>
                    ";
            }
            // line 21
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["utilisateur"], "commandes", array())) != 0)) {
                // line 22
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminFacturesUtilisateurs", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
                echo "\" title=\"Consulter les factures\"><i class=\"icon-book\"></i></a>
                    ";
            }
            // line 24
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Administration/Utilisateurs/layout:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  80 => 24,  74 => 22,  71 => 21,  65 => 19,  63 => 18,  58 => 16,  55 => 15,  51 => 14,  39 => 4,  36 => 3,  11 => 1,);
    }
}
