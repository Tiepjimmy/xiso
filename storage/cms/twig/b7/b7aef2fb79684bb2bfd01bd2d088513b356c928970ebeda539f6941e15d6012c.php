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

/* C:\xampp\htdocs\xiso/themes/xiso/partials/site/banner.htm */
class __TwigTemplate_99d6cd08aa388615e2f29357b6f765010675e5af4e03e847e4d84e22080b462b extends \Twig\Template
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
        echo "<div class=\"section-banner\">
    <div class=\"wrap-banner\">
        <a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\" title=\"Banner\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/banner_desktop.png");
        echo "\" class=\"d-none d-sm-block\" alt=\"Banner\">
            <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/banner_mobile.png");
        echo "\" class=\"d-block d-sm-none\" alt=\"Banner\">
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-banner\">
    <div class=\"wrap-banner\">
        <a href=\"{{'homepage' | page}}\" title=\"Banner\">
            <img src=\"{{ 'assets/img/banner_desktop.png'|theme }}\" class=\"d-none d-sm-block\" alt=\"Banner\">
            <img src=\"{{ 'assets/img/banner_mobile.png'|theme}}\" class=\"d-block d-sm-none\" alt=\"Banner\">
        </a>
    </div>
</div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/banner.htm", "");
    }
}
