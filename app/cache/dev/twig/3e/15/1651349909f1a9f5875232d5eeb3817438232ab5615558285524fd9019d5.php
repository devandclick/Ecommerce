<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_3e151651349909f1a9f5875232d5eeb3817438232ab5615558285524fd9019d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "position" => "normal")));
        echo "

    <div id=\"content\">
        ";
        // line 8
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 9
        echo "
        <div id=\"main\">

            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    ";
        // line 14
        if ((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile"))) {
            // line 15
            echo "                        <div id=\"resume\">
                            <a id=\"resume-view-all\" href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("_profiler_search", array("limit" => 10));
            echo "\">View last 10</a>
                            <strong>Profile for:</strong>
                            ";
            // line 18
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method")), "html", null, true);
            echo "
                            ";
            // line 19
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method")), array(0 => "GET", 1 => "HEAD"))) {
                // line 20
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url"), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 22
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url"), "html", null, true);
                echo "
                            ";
            }
            // line 24
            echo "                            <span class=\"date\">
                                <em>by ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "ip"), "html", null, true);
            echo "</em> at <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "time"), "r"), "html", null, true);
            echo "</em>
                            </span>
                        </div>
                    ";
        }
        // line 29
        echo "
                    <div id=\"collector-content\">
                        ";
        // line 31
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 32
        echo "                        ";
        $this->displayBlock('panel', $context, $blocks);
        // line 33
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 36
        if (array_key_exists("templates", $context)) {
            // line 37
            echo "                        <ul id=\"menu-profiler\">
                            ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 39
                echo "                                ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 40
                echo "                                ";
                if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) != "")) {
                    // line 41
                    echo "                                    <li class=\"";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")))) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"));
                    echo "</a>
                                    </li>
                                ";
                }
                // line 45
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                            <li class=\"minimize\">
                                <a href=\"javascript:void(0);\" title=\"Minimize toolbar\" onclick=\"return toggleMenuPanels();\">
                                    <span class=\"label\">
                                        <span class=\"icon\"><img id=\"minimizePanelIcon\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4tJREFUeNrkl19IU1Ecx7fZJN2arhq2JUWJlEZL1MAm1B582GBErMJqtabzRRAqFAYa9OfFFx+KQEG3MkYRZkkEJUUwctVSKCJWJojL1ZiydJvLtNXW98AW1znv7t0CHzrw5Xe3nXM/O/f8zvf8LjcajXJWo/E4q9T+P/CaNMZw29rahBMTE3LyoaKi4m1zc/M865swSS6bzZbT09NzfG5urjYUCikikYiQ+ntWVlZQKBQ+F4lE/Var9Ta+CmcK5hsMhpNer/fiwsLCFiYzycnJGZfJZOctFss9uj+wInhwcDDfbDb3+Hy+I+msoVQqNZtMpnNlZWUhxuChoaENHR0djwOBwN5MEkgsFtsGBgY0uPzOJKtzu7q6rmcKJW12dlaJpbqGy7WpwPyWlpZGj8dzkMX9B+l+dLlcda2trbrEHbQEPDY2Jh0dHTWxgF5AxqsRz9J1cjqdlxDWrwTO7u3tNWK7SFhAL8e221WE7pU6Ytk2t7e311JnTQWLJycntWyhpCmVShXCKboBMJyjCKJlzgVzKJiamtrBAKoH1JoAvU+2MN2g6enp3QgboRnqjHl2u70kHA7zU0APpQMlze/357vd7gKyhang7GAwKEsx1gLoAwp0E8JdJtB4w1LK4sw4OAtWl51inBGwAxT/9iLUQb+ZgsHgJ4I5hYWFAQZjbYBrKPB+hGNM4DweL1pUVBRMzOpweXm5WyAQ/GIAfwj4GbZwiUTyIy8vby7eLw4mQH9paamX4VO7kgTeTTeguLjYg0AOjAgVTD58UygUb1i41l84ogGhka4z+rwi9p3MQHwajeYRjrNFlvBbiDfoOmFtQzU1NU/J5JKBA3w+/71er3/J8hA6kSKpOPX19c9w+YH4VDIwqRbG1Wr1HZVK5eX8o6bVaj9XV1cTk3HFcinpsUjs7AWKNwvWO5gpFI93pqmpyYxLB0neVBUIcaI90OHOzs7TfX19ErZA8niNRuNXnU53M2apTmiBSc0lgEoh9cjIiBYV5i6c1YxKYblc/rOhoeEdIin2nkCfoHk2VSYpV7ZCVdB+h8OxDyocHh4WoEJZskRwvUhVVVUIcldWVtrx1XPoNfQFWkynvCWzzIe2QSXQTmg7Od5QT+WinuagliaFnI8kJvQxJpJIATo34zJ8WyR/YF2sfBFDpKCPHyqLMUeajSVniJq9mYKXjUtwPdY34a7W+/EfAQYAZM5kh2zoNWsAAAAASUVORK5CYII=\" alt=\"\"></span>
                                        <strong>Minimize</strong>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    ";
        }
        // line 56
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 57
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))));
        // line 58
        echo "                </div>
            </div>
        </div>
    </div>

    <script>//<![CDATA[

        function toggleMenuPanels(state, doSave) {
            var leftIconPath = \"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4tJREFUeNrkl19IU1Ecx7fZJN2arhq2JUWJlEZL1MAm1B582GBErMJqtabzRRAqFAYa9OfFFx+KQEG3MkYRZkkEJUUwctVSKCJWJojL1ZiydJvLtNXW98AW1znv7t0CHzrw5Xe3nXM/O/f8zvf8LjcajXJWo/E4q9T+P/CaNMZw29rahBMTE3LyoaKi4m1zc/M865swSS6bzZbT09NzfG5urjYUCikikYiQ+ntWVlZQKBQ+F4lE/Var9Ta+CmcK5hsMhpNer/fiwsLCFiYzycnJGZfJZOctFss9uj+wInhwcDDfbDb3+Hy+I+msoVQqNZtMpnNlZWUhxuChoaENHR0djwOBwN5MEkgsFtsGBgY0uPzOJKtzu7q6rmcKJW12dlaJpbqGy7WpwPyWlpZGj8dzkMX9B+l+dLlcda2trbrEHbQEPDY2Jh0dHTWxgF5AxqsRz9J1cjqdlxDWrwTO7u3tNWK7SFhAL8e221WE7pU6Ytk2t7e311JnTQWLJycntWyhpCmVShXCKboBMJyjCKJlzgVzKJiamtrBAKoH1JoAvU+2MN2g6enp3QgboRnqjHl2u70kHA7zU0APpQMlze/357vd7gKyhang7GAwKEsx1gLoAwp0E8JdJtB4w1LK4sw4OAtWl51inBGwAxT/9iLUQb+ZgsHgJ4I5hYWFAQZjbYBrKPB+hGNM4DweL1pUVBRMzOpweXm5WyAQ/GIAfwj4GbZwiUTyIy8vby7eLw4mQH9paamX4VO7kgTeTTeguLjYg0AOjAgVTD58UygUb1i41l84ogGhka4z+rwi9p3MQHwajeYRjrNFlvBbiDfoOmFtQzU1NU/J5JKBA3w+/71er3/J8hA6kSKpOPX19c9w+YH4VDIwqRbG1Wr1HZVK5eX8o6bVaj9XV1cTk3HFcinpsUjs7AWKNwvWO5gpFI93pqmpyYxLB0neVBUIcaI90OHOzs7TfX19ErZA8niNRuNXnU53M2apTmiBSc0lgEoh9cjIiBYV5i6c1YxKYblc/rOhoeEdIin2nkCfoHk2VSYpV7ZCVdB+h8OxDyocHh4WoEJZskRwvUhVVVUIcldWVtrx1XPoNfQFWkynvCWzzIe2QSXQTmg7Od5QT+WinuagliaFnI8kJvQxJpJIATo34zJ8WyR/YF2sfBFDpKCPHyqLMUeajSVniJq9mYKXjUtwPdY34a7W+/EfAQYAZM5kh2zoNWsAAAAASUVORK5CYII=\",
                rightIconPath = \"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4tJREFUeNrsl11IU2EYx91ytrnpmmy4TYNkqGhEJGiiabuQ2EAiZ1kZW9NtF4pgoBB40weJeCHVjReygVmuIhP6gLoJJNQGadhiJcLa2sb8KN2nrprbel7YYh7WzjnOsIsO/Hnes533/Z33PB/nOZRIJJK2GwflP/ifBg8MDGTOzs4eQeOCggJjb2+vH4aRvwGmyeXyZq/Xe9rv99eGQqHs+D+pVKqfxWJNZ2VlPdRoNPfFYnEgVTBNpVI1Op3OG4FAQETkDul0uo3P518dHh6+B6dB0uC5uTlWf3//zcXFRfV2fMjlcsfUarVGIpG4yYCZDQ0Nz10ulziVAGKz2W+7u7ulNTU1q0TAdKVSOWi1Wlt2InqFQuFTvV5/HoYbW+ICc116T0/PBQLQl0TBEB8nYddtKF6SgXNMJtM1nLUuTUxMSMFeIQqfn5+/vLCwIPgTOL2vr++sx+PJS7LGEEBvowHY60ThkII8iHIVDDMSgbMtFssZnDXkkKOS2AkZuM1mk4HhJAJzV1ZWDuHMZ4DGE8AVeODl5eVin8+XiwVT7HZ7rtvt3kfg5hPB74I5lWxSMBikTU5OlsSYMTAVHoWQRJYg+COA8+PgT8Dokk2CkiuM+fk3mMFg0EiAQ6AWgC3FfoCbOA5GlfRuGQwE3bPFxyKRyAvFPkIQeg6gY3HQerRpvIn5+fkerI9DUN58PB4vsA1oJ5hneFAmk7lZVlZmj704YuAwSrfCwkInzvyhBNBbRHxTWlqK3IJeGJvYdHLBQm9w5rfBNUqyUHRUVVW9A7Ma3eSWlwRK7np4/w6azWYWzjp6UDNRqEAg+DEyMtJJo9Eew+k37I59oI+tra2vIMjw1momkQFpCoViGqAfYOhJVLnQs7dWV1ePy2SyLzvV1EEjsCSVSh/A0BzfkWC3hpxv6Ojo0NbV1a2lCgW/eru6ulBRmQKt4TYCoIMg2ejo6EWdTpcXDodJQ5uamr62t7ffgSHy63tQgEjrkwkqBp0wGo2NWq32MNgMIsCioqJN6DRN5eXl43D6AsUNaJ1Ml7kXFRvQUVDtzMzMMYPBsB/EcjgcVEx7E66oqFivrKx0gFBKvkYuA6FY+b6d9hbVVTboAKgkKtTmcqHgM6G/TuNwOBvRFPmMmg3QJ5Alvlik0tCng1Bu50TznRV9Iuj4iaoeKkDRAPIlA6b67UTBlFvSi+zaR9svAQYA6+V18DvfH/8AAAAASUVORK5CYII=\",
                menu = document.getElementById('navigation'), savedState = Sfjs.getPreference('menu/displayState'),
                displayState, elem, className;

            if (savedState == null) {
                savedState = 'block';
            }

            displayState = state || (savedState == 'block' ? 'none' : 'block');

            if (typeof doSave === 'undefined') {
                doSave = true;
            }

            document.getElementById('searchBar').style.display = displayState;
            document.getElementById('adminBar').style.display = displayState;

            if (displayState == 'block') {
                Sfjs.removeClass(menu, 'collapsed-menu');
                Sfjs.removeClass(menu.parentNode.parentNode, 'collapsed-menu-parents');

                document.getElementById('minimizePanelIcon').src = leftIconPath;
            } else {
                Sfjs.addClass(menu, 'collapsed-menu');
                Sfjs.addClass(menu.parentNode.parentNode, 'collapsed-menu-parents');

                document.getElementById('minimizePanelIcon').src = rightIconPath;
            }

            if (doSave) {
                Sfjs.setPreference('menu/displayState', displayState);
            }

            try {
                canvasAutoUpdateOnThresholdChange(null);
            } catch (err) {

            }

            return false;
        }

        window.setTimeout(function() {
            if (document.getElementById('menu-profiler') == null) {
                return;
            }

            var menuItems = document.getElementById('menu-profiler').getElementsByTagName('LI'),
                elem, value, child, displayState = Sfjs.getPreference('menu/displayState');

            if (displayState == 'none') {
                toggleMenuPanels('none', false);
            }

            for (elem in menuItems) {
                if (typeof(menuItems[elem].children) != 'undefined' &&
                    menuItems[elem].children.length > 0) {
                    child = menuItems[elem].children[0]

                    if (child.getAttribute('title') == '' ||
                        child.getAttribute('title') == null) {
                        value = child.text.replace(/^\\s+/g, '').split('\\n')[0].replace(/\\s+\$/g, '');
                        child.setAttribute('title', value);
                    }
                }
            }
        }, 25);

    //]]></script>
";
    }

    // line 32
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 58,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  106 => 36,  101 => 33,  98 => 32,  92 => 29,  83 => 25,  80 => 24,  74 => 22,  66 => 20,  60 => 18,  55 => 16,  52 => 15,  50 => 14,  41 => 8,  32 => 4,  29 => 3,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 160,  373 => 156,  361 => 146,  355 => 143,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  312 => 124,  303 => 122,  300 => 121,  298 => 120,  289 => 113,  286 => 112,  278 => 106,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  246 => 32,  241 => 90,  233 => 87,  229 => 85,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 75,  203 => 73,  200 => 72,  197 => 71,  194 => 70,  191 => 69,  185 => 66,  181 => 65,  178 => 64,  176 => 63,  172 => 62,  168 => 61,  165 => 60,  162 => 57,  156 => 58,  153 => 56,  150 => 55,  147 => 54,  141 => 51,  134 => 47,  130 => 46,  123 => 41,  119 => 40,  116 => 39,  113 => 38,  105 => 34,  102 => 33,  99 => 31,  96 => 31,  90 => 27,  84 => 24,  81 => 23,  73 => 20,  70 => 19,  67 => 18,  64 => 19,  59 => 14,  53 => 12,  45 => 10,  43 => 9,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
