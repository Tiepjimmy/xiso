<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\xiso/themes/xiso/pages/fqa.htm */
class __TwigTemplate_65caaed152ed0cd5e38922b76ce6b41562b4197977a25db998a915034d1b54c3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"page-content animated fadeInRight\">
        <div class=\"wrap-text-page text-left\">
            <div class=\"container\">
                <div class=\"text-bottom\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home.png");
        echo "\" alt=\"\"></a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <span>Câu hỏi thường gặp</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class=\"wrapper-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <!--Sidebar menu start-->
                    <div class=\"col-lg-3\">
                        ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "                    </div>
                    <!--Sidebar menu end-->

                    <div class=\"col-lg-5\">
                        <div class=\"wrap-page-body\">
                            <div class=\"content-page\">
                                <div class=\"txt-head-body\">
                                    <h1 class=\"title-page title-page-bb\">
                                        Câu hỏi thường gặp
                                    </h1>
                                </div>
                                <div class=\"content-question accordion\">
                                    <!--Card start-->
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hoidap"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["thacmac"]) {
            // line 37
            echo "                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h2 class=\"mb-0\">
                                                <a class=\"btn btn-link collapsed\" data-toggle=\"collapse\" href=\"#fqa__1\" aria-expanded=\"false\">
                                                    <div class=\"fqa--flex\">
                                                        <div class=\"img\">
                                                            <span class=\"number-left\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thacmac"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>
                                                        </div>
                                                        <span class=\"titl\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thacmac"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
                                                    </div>
                                                    <i class=\"ion ion-md-remove-circle icon add-circle\"></i>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id=\"fqa__1\" class=\"collapse\" style=\"\">
                                            <div class=\"card-body\">
                                              ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thacmac"], "content", [], "any", false, false, false, 53), "html", null, true);
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thacmac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                     
                                    <!--Card end-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Form sign up for advice start-->
                    <div class=\"col-lg-4\">
                        ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar-signup"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "                    </div>
                    <!--Form sign up for advice end-->
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/fqa.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 68,  134 => 67,  123 => 58,  112 => 53,  101 => 45,  96 => 43,  88 => 37,  84 => 36,  69 => 23,  65 => 22,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-content animated fadeInRight\">
        <div class=\"wrap-text-page text-left\">
            <div class=\"container\">
                <div class=\"text-bottom\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ 'homepage' |page }}\"><img src=\"{{ 'assets/img/home.png'|theme }}\" alt=\"\"></a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <span>Câu hỏi thường gặp</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class=\"wrapper-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <!--Sidebar menu start-->
                    <div class=\"col-lg-3\">
                        {% partial 'site/sidebar'%}
                    </div>
                    <!--Sidebar menu end-->

                    <div class=\"col-lg-5\">
                        <div class=\"wrap-page-body\">
                            <div class=\"content-page\">
                                <div class=\"txt-head-body\">
                                    <h1 class=\"title-page title-page-bb\">
                                        Câu hỏi thường gặp
                                    </h1>
                                </div>
                                <div class=\"content-question accordion\">
                                    <!--Card start-->
                                    {%for thacmac in hoidap %}
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h2 class=\"mb-0\">
                                                <a class=\"btn btn-link collapsed\" data-toggle=\"collapse\" href=\"#fqa__1\" aria-expanded=\"false\">
                                                    <div class=\"fqa--flex\">
                                                        <div class=\"img\">
                                                            <span class=\"number-left\">{{thacmac.id}}</span>
                                                        </div>
                                                        <span class=\"titl\">{{thacmac.name}}</span>
                                                    </div>
                                                    <i class=\"ion ion-md-remove-circle icon add-circle\"></i>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id=\"fqa__1\" class=\"collapse\" style=\"\">
                                            <div class=\"card-body\">
                                              {{thacmac.content}}
                                            </div>
                                        </div>
                                    </div>
                                    {% endfor %}
                     
                                    <!--Card end-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Form sign up for advice start-->
                    <div class=\"col-lg-4\">
                        {% partial 'site/sidebar-signup'%}
                    </div>
                    <!--Form sign up for advice end-->
                </div>
            </div>
        </div>
    </div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/fqa.htm", "");
    }
}
