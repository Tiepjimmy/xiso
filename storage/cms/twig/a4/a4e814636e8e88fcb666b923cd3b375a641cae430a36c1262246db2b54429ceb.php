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

/* C:\xampp\htdocs\xiso/themes/xiso/pages/mentor.htm */
class __TwigTemplate_b5994ee422f82b6ec29b546e2fe711702810f06fb93904193667422f8fa48459 extends \Twig\Template
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
        echo "homepage";
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home.png");
        echo "\" alt=\"\"></a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <span>Mentor tiêu biểu</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class=\"wrapper-page\">
        <div class=\"container\">
            <div class=\"wrapper-mentor\">
                <div class=\"header-mentor\">
                    <h1 class=\"title-inner title-mentor\">Danh sách các mentor</h1>
                    <h2 class=\"title__2 title-mtor-2\">Sẽ đồng hành cùng con bạn</h2>
                </div>
                
                <div class=\"content-mentor\">
                    <ul class=\"list-mentor-boxes\">
                        <!--Mentor item start-->
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teacher"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["teachers"]) {
            // line 29
            echo "                        <li class=\"mentor-box\">
                            <div id=\"teacher\" data-id=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teachers"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" title=\"\" class=\"mentor-item\">
                                <div class=\"img bg-mentor-img\">
                                    <img class=\"bg-mentor-image\" src=\"";
            // line 32
            echo ((((            // line 33
$context["key"] == 0) || ($context["key"] == 5))) ? ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mt1.png")) : (((((            // line 34
$context["key"] == 1) || ($context["key"] == 6))) ? ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mt2.png")) : (((((            // line 35
$context["key"] == 2) || ($context["key"] == 7))) ? ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mt3.png")) : (((((            // line 36
$context["key"] == 3) || ($context["key"] == 8))) ? ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mt4.png")) : (((((            // line 37
$context["key"] == 4) || ($context["key"] == 9))) ? ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mt5.png")) : (""))))))))));
            echo "\" alt=\"\"> 
                                    <div class=\"mentor-front\">
                                        <img src=\"";
            // line 39
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["teachers"], "image", [], "any", false, false, false, 39));
            echo "\" alt=\"\">
                                    </div>
                                </div>
                                <span class=\"txt-dt\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teachers"], "info", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                                <h3 class=\"title__2\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["teachers"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</h3>
                            </a>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['teachers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </ul>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>
<!--Popup mentor start-->
<div class=\"modal popup-mentor popup-common\" id=\"popup_mentor\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <i class=\"ion ion-ios-close\"></i>
            </button>
            <div class=\"modal-body\">
                <div class=\"row align-items-center\">
                    <div class=\"col-left-mentor col-sm-4\">
                        <span class=\"icon\">
                            <i class=\"fa fa-quote-left\"></i>
                        </span>
                        <div class=\"mentor-box \">
                            <div class=\"img img-mentor\">
                                <img src=\"\" alt=\"\">
                            </div>
                            <span class=\"txt-dt\"></span>
                            <h3 class=\"title__2\"></h3>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"text text-mentor\">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/mentor.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 48,  103 => 43,  99 => 42,  93 => 39,  88 => 37,  87 => 36,  86 => 35,  85 => 34,  84 => 33,  83 => 32,  78 => 30,  75 => 29,  71 => 28,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-content animated fadeInRight\">
    <div class=\"wrap-text-page text-left\">
        <div class=\"container\">
            <div class=\"text-bottom\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ 'homepage'}}\"><img src=\"{{ 'assets/img/home.png'|theme }}\" alt=\"\"></a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <span>Mentor tiêu biểu</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class=\"wrapper-page\">
        <div class=\"container\">
            <div class=\"wrapper-mentor\">
                <div class=\"header-mentor\">
                    <h1 class=\"title-inner title-mentor\">Danh sách các mentor</h1>
                    <h2 class=\"title__2 title-mtor-2\">Sẽ đồng hành cùng con bạn</h2>
                </div>
                
                <div class=\"content-mentor\">
                    <ul class=\"list-mentor-boxes\">
                        <!--Mentor item start-->
                        {%for key, teachers in teacher %}
                        <li class=\"mentor-box\">
                            <div id=\"teacher\" data-id=\"{{teachers.id}}\" title=\"\" class=\"mentor-item\">
                                <div class=\"img bg-mentor-img\">
                                    <img class=\"bg-mentor-image\" src=\"{{
                                    key  == 0 or key == 5 ? 'assets/img/mt1.png'|theme : 
                                    key  == 1 or key == 6 ? 'assets/img/mt2.png'|theme : 
                                    key  == 2 or key == 7 ? 'assets/img/mt3.png'|theme :
                                    key  == 3 or key == 8 ? 'assets/img/mt4.png'|theme :
                                    key  == 4 or key == 9 ? 'assets/img/mt5.png'|theme }}\" alt=\"\"> 
                                    <div class=\"mentor-front\">
                                        <img src=\"{{teachers.image | media }}\" alt=\"\">
                                    </div>
                                </div>
                                <span class=\"txt-dt\">{{teachers.info}}</span>
                                <h3 class=\"title__2\">{{teachers.name}}</h3>
                            </a>
                        </div>
                    </li>
                    {% endfor %}
                </ul>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>
<!--Popup mentor start-->
<div class=\"modal popup-mentor popup-common\" id=\"popup_mentor\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <i class=\"ion ion-ios-close\"></i>
            </button>
            <div class=\"modal-body\">
                <div class=\"row align-items-center\">
                    <div class=\"col-left-mentor col-sm-4\">
                        <span class=\"icon\">
                            <i class=\"fa fa-quote-left\"></i>
                        </span>
                        <div class=\"mentor-box \">
                            <div class=\"img img-mentor\">
                                <img src=\"\" alt=\"\">
                            </div>
                            <span class=\"txt-dt\"></span>
                            <h3 class=\"title__2\"></h3>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"text text-mentor\">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/mentor.htm", "");
    }
}
