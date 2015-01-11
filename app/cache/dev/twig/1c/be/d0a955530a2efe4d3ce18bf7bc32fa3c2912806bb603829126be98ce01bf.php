<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1cbed0a955530a2efe4d3ce18bf7bc32fa3c2912806bb603829126be98ce01bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande et de manger équilibré.
                    </em>
                    <br /><br />
                    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>

                </div>

                <div class=\"span4 offset2\">
                    <h4>Connexion</h4>
                    <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <label for=\"username\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                    <label for=\"password\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    <br />
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
                <div class=\"span10\">
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 40,  94 => 36,  88 => 33,  83 => 31,  79 => 30,  74 => 28,  70 => 27,  61 => 21,  47 => 9,  41 => 7,  39 => 6,  36 => 5,  11 => 1,);
    }
}
