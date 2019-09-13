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

/* C:\xampp\htdocs\xiso/themes/xiso/partials/site/student.htm */
class __TwigTemplate_e449a47039c0975d09119ee392873461667cbd8b1c7b236beed5dc10c6e0c577 extends \Twig\Template
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
        echo "<div class=\"section-list-students\">
            <div class=\"container\">
                <div class=\"row row-list-students\">
                    <!--Student item start-->
                    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comment"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["binhluan"]) {
            // line 6
            echo "                        <div class=\"col-student col-md-4 col-sm-6\">
                            <div class=\"student-wrap wow fadeInUp\">
                                <div class=\"student-img\">
                                    <a href=\"#\" title=\"\">
                                        <img src=\"";
            // line 10
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["binhluan"], "image", [], "any", false, false, false, 10));
            echo "\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"student-content\">
                                    <div class=\"hover-content text-detail-content\">
                                        <p class=\"clamp__5 small-clamp_3\">
                                           ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["binhluan"], "content", [], "any", false, false, false, 16), "html", null, true);
            echo "
                                        </p>
                                    </div>
                                    <div class=\"title-student-show text-center\">
                                        <a href=\"#\" title=\"\">
                                            <h3 class=\"title__2 tt-student\">
                                                ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["binhluan"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "
                                            </h3>
                                        </a>
                                        <p class=\"short-detail\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["binhluan"], "year", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--Student item end-->
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['binhluan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/student.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  77 => 25,  71 => 22,  62 => 16,  53 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-list-students\">
            <div class=\"container\">
                <div class=\"row row-list-students\">
                    <!--Student item start-->
                    {%for binhluan in comment %}
                        <div class=\"col-student col-md-4 col-sm-6\">
                            <div class=\"student-wrap wow fadeInUp\">
                                <div class=\"student-img\">
                                    <a href=\"#\" title=\"\">
                                        <img src=\"{{ binhluan.image |media}}\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"student-content\">
                                    <div class=\"hover-content text-detail-content\">
                                        <p class=\"clamp__5 small-clamp_3\">
                                           {{ binhluan.content }}
                                        </p>
                                    </div>
                                    <div class=\"title-student-show text-center\">
                                        <a href=\"#\" title=\"\">
                                            <h3 class=\"title__2 tt-student\">
                                                {{ binhluan.name }}
                                            </h3>
                                        </a>
                                        <p class=\"short-detail\">{{ binhluan.year }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--Student item end-->
                   {% endfor %}
                </div>
            </div>
        </div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/student.htm", "");
    }
}
